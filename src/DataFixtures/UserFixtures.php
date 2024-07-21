<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {


        $userData = [
            ['email' => 'jose.hammond.ecf@gmail.com', 'password' => 'azerty', 'roles' => ['ROLE_ADMIN']],
            ['email' => 'veterinaire.grant.ecf@gmail.com', 'password' => 'azerty', 'roles' => ['ROLE_VETO']],
            ['email' => 'employe.nedry.ecf@gmail.com', 'password' => 'azerty', 'roles' => ['ROLE_EMPLOYEE']],
        ];

        foreach ($userData as $UD) {
            $user = new User();
            $user->setEmail($UD['email']);
            $user->setRoles($UD['roles']);
            $user->setPassword($this->passwordHasher->hashPassword($user, $UD['password']));
            $manager->persist($user);
        }
        $manager->flush();
    }
}

