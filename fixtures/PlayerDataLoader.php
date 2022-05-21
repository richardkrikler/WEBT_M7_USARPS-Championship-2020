<?php

namespace IgnisWeb\USARPS;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PlayerDataLoader implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // TODO: Implement load() method.
        $player = new Player(1, 'Richard', 'Krikler');

//        VALUES ('Richard', 'Krikler'),
//       ('Hadi', 'Tlais'),
//       ('Jakob', 'Mucherl'),
//       ('Martin', 'Windhager');

        $manager->persist($player);
        $manager->flush();
    }
}