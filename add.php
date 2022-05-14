<?php

namespace IgnisWeb\USARPS;

require_once 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);
$template = $twig->load('add.html');
echo $template->render(
    [
        'rounds' => DB::getRounds(),
        'players' => DB::getPlayers(),
        'symbols' => DB::getSymbols()
    ]
);

