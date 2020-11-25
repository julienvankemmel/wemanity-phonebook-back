<?php

namespace App\DataFixtures;

use App\Entity\Phonebook;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $phonebook = new Phonebook();
        $phonebook->setFirstname("Julien")
            ->setLastname("Vankemmel")
            ->setPhone("+33 3 123456");
        $manager->persist($phonebook);

        $phonebook2 = new Phonebook();
        $phonebook2->setFirstname("Bernard")
            ->setLastname("Durand")
            ->setPhone("+44 5 654321");
        $manager->persist($phonebook2);

        $phonebook3 = new Phonebook();
        $phonebook3->setFirstname("Jean")
            ->setLastname("Dupond")
            ->setPhone("+55 8 987654");
        $manager->persist($phonebook3);

        $manager->flush();
    }
}
