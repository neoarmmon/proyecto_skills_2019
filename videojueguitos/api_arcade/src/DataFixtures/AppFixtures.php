<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    
    public function __construct(private UserPasswordHasherInterface  $userPasswordHasher){

    }
    

    public function load(ObjectManager $manager): void
    {
        $user=new User();
        $user->setUsername("Mario");
        $hashedPasword=$this->userPasswordHasher->hashPassword($user,"mario");
        $user->setPassword($hashedPasword);
        $manager->persist($user);
        $manager->flush();
    }
}
