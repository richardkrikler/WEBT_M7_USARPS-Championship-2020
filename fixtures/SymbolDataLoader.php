<?php

namespace IgnisWeb\USARPS;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SymbolDataLoader implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $symbol1 = new Symbol(1, 'Rock');
        $symbol2 = new Symbol(2, 'Paper');
        $symbol3 = new Symbol(3, 'Scissor');

        $manager->persist($symbol1);
        $manager->persist($symbol2);
        $manager->persist($symbol3);
        $manager->flush();
    }
}