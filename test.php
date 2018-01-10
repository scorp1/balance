<?php
require "src/balance.php";
//require_once __DIR__.'/vendor/autoload.php';
use Beloplotov\Balance as Balance;
$formula = "((27 + 38) ÷ (77 – 69 x (54 x (26 - 3)))) x (11 x 12 – 17 + 18) – 36 ÷ (32 – 10 x 4)";


$foo = new Balance($formula);
$foo->proverka();