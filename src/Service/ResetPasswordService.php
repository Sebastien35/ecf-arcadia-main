<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\LogicException;

class ResetPasswordService
{
    private string $zooEmail;
    private MailerInterface $mailer;
    private UrlGeneratorInterface $router;
    private EntityManagerInterface $em;

    public function __construct(
        #[Autowire('%zoo_email%')] string $zooEmail,
        MailerInterface $mailer,
        UrlGeneratorInterface $router,
        EntityManagerInterface $em
    ) {
        $this->zooEmail = $zooEmail;
        $this->mailer = $mailer;
        $this->router = $router;
        $this->em = $em;
    }

    public function sendResetPasswordEmail(User $user): void
    {


        $token = bin2hex(random_bytes(32));
        $user->setResetPasswordToken($token);
        $this->em->persist($user);
        $this->em->flush();

        $resetPasswordUrl = $this->router->generate('app_password_reset_reset', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);

        $email = (new NotificationEmail())
            ->from($this->zooEmail)
            ->to($user->getEmail())
            ->subject('Réinitialisation de votre mot de passe')
            ->htmlTemplate('emails/reset_password.html.twig')
            ->context([
                'resetPasswordUrl' => $resetPasswordUrl,
                'user_email' => $user->getEmail(),
            ]);

        $this->mailer->send($email);
    }
}
