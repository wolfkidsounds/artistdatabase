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
        $user->setUsername('Pulsation Audio');
        $user->setRoles(['ROLE_ADMIN']);
        $password = '$2y$13$wcrIudT9RuEflF.CpbRrOecQ05/Spfu2vS2SjSGok1Lay134Pdybm'; // symfony
        $user->setPassword($password);
        $user->setEmail('admin@artist-database.com');
        $user->setVorname('Pulsation');
        $user->setNachname('Audio');

        $manager->persist($user);
        $manager->flush();
    }
}
