<?php

namespace IgnisWeb\USARPS;

require_once 'vendor/autoload.php';

if (isset($_GET['table'])) {
    if ($_GET['table'] === 'player') {
        if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
            DB::addPlayer($_GET['firstname'], $_GET['lastname']);
        }
    } else if ($_GET['table'] === 'round') {
        if (isset($_GET['datetime']) && isset($_GET['playerA']) && isset($_GET['playerB']) && isset($_GET['symbolA']) && isset($_GET['symbolB'])) {
            DB::addRound($_GET['datetime'], $_GET['playerA'], $_GET['playerB'], $_GET['symbolA'], $_GET['symbolB']);
        }
    }
}

header('Location: /add.php');
