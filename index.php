<?php

namespace IgnisWeb\USARPS;

require_once 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;



$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);
$template = $twig->load('main.html');
//var_dump(DB::getRounds());
echo $template->render(['rounds' => DB::getRounds()]);

