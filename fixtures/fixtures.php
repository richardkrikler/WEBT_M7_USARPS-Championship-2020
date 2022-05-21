<?php

namespace IgnisWeb\USARPS;

// https://www.doctrine-project.org/projects/doctrine-data-fixtures/en/latest/how-to/loading-fixtures.html


use Doctrine\Common\DataFixtures\Loader;
use IgnisWeb\USARPS\PlayerDataLoader;

$loader = new Loader();
$loader->addFixture(new PlayerDataLoader());



use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;

require_once '../bootstrap.php';

$executor = new ORMExecutor($entityManager, new ORMPurger());
$executor->execute($loader->getFixtures());


// TODO: line 9 error (Loader not found)
// TODO: ADV1: US6: (All instances of accessing the database (select, insert, delete) are using ORM instead of DBAL)