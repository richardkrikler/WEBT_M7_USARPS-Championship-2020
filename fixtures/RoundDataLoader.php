<?php

namespace IgnisWeb\USARPS;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

class RoundDataLoader implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $round = new Round(1, 'Richard', new Player(1, 'Richard', 'Krikler'), new Player(2, 'Martin', 'Windhager'), new Symbol(1, 'Rock'), new Symbol(2, 'Paper'));
        // $round = [1, 'Richard', 1, 2, 1, 2];

        $manager->persist($round);
        $manager->flush();
    }
}
