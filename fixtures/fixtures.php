<?php

namespace IgnisWeb\USARPS;

// https://www.doctrine-project.org/projects/doctrine-data-fixtures/en/latest/how-to/loading-fixtures.html

require_once '../vendor/autoload.php';
require_once 'PlayerDataLoader.php';
// require_once 'RoundDataLoader.php';
require_once 'SymbolDataLoader.php';

use Doctrine\Common\DataFixtures\Loader;
use IgnisWeb\USARPS\PlayerDataLoader;

$loader = new Loader();
$loader->addFixture(new PlayerDataLoader());
$loader->addFixture(new SymbolDataLoader());
// $loader->addFixture(new RoundDataLoader());



use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;

require_once '../bootstrap.php';

$executor = new ORMExecutor($entityManager, new ORMPurger());
$executor->execute($loader->getFixtures());

