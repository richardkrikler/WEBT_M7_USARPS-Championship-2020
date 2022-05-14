<?php

namespace IgnisWeb\USARPS;

require_once '../vendor/autoload.php';

if (isset($_GET['round'])) {
    DB::deleteRound($_GET['round']);
} else if (isset($_GET['player'])) {
    DB::deletePlayer($_GET['player']);
}

header('Location: /delete.php');
