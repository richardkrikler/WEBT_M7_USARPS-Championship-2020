<?php

namespace IgnisWeb\USARPS;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PlayerDataLoader implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $player1 = new Player(1, 'Richard', 'Krikler');
        $player2 = new Player(2, 'Martin', 'Windhager');

        $manager->persist($player1);
        $manager->persist($player2);
        $manager->flush();
    }
}