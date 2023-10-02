<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setRoles(['ROLE_ADMIN']);
        $password = 'symfony';
        $hashed_pwd = UserFixtures::hash($user, $password);
        $user->setPassword($hashed_pwd);
        $user->setEmail('admin@artist-database.com');
        $user->setVorname('Symfony');
        $user->setNachname('Administrator');
        $manager->persist($user);
        $manager->flush();
    }

    static function hash( $user, $password, UserPasswordHasherInterface $passwordHasher = null ) {
 
        // hash the password (based on the security.yaml config for the $user class)
        $password_hashed = $passwordHasher->hashPassword(
            $user,
            $password
        );

        return $password_hashed;
    }
}
