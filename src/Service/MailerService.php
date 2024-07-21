<?php

namespace App\Service;

use App\Entity\Contact;
use App\Entity\User;
use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    private string $zooEmail;
    private MailerInterface $mailer;
    public function __construct(
        #[Autowire('%zoo_email%')]string $zooEmail,
        MailerInterface $mailer
    ) {
        $this->zooEmail = $zooEmail;
        $this->mailer = $mailer;
    }

    public function sendContactEmail(Contact $contact):void
    {
        $email = (new NotificationEmail())
            ->from($contact->getEmail())
            ->to($this->zooEmail)
            ->subject('Nouvelle demande de contact: ' . $contact->getTitle())
            ->htmlTemplate('emails/contact.html.twig')
            ->context([
                'title' => $contact->getTitle(),
                'description' => $contact->getDescription(),
                'sender_email' => $contact->getEmail(),
            ]);

        $this->mailer->send($email);
    }

    public function sendUserCreationEmail(User $user): void
    {
        $email = (new NotificationEmail())
            ->from($this->zooEmail)
            ->to($user->getEmail())
            ->subject('Votre compte a été créé')
            ->htmlTemplate('emails/user_creation.html.twig')
            ->context([
                'user_email' => $user->getEmail(),
            ]);

        $this->mailer->send($email);
    }
}