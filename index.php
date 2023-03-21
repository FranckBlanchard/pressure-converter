<?php
// Inclure la classe PressureConverter
require_once('src/PressureConverter/PressureConverter.php');

use Pressure\PressureConverter;

// Instancier la classe PressureConverter
$converter = new PressureConverter();

var_dump($converter);

// Convertir 1000 pascals en bars
$bars = $converter->convertPascalsToBars(1000);
echo '1000 pascals = ' . $bars . ' bars' . PHP_EOL;

// Convertir 2 bars en livres par pouce carré (psi)
$psi = $converter->convertBarsToPsi(2);
echo '2 bars = ' . $psi . ' psi' . PHP_EOL;

// Convertir 20 psi en pascals
$pascals = $converter->convertPsiToPascals(20);
echo '20 psi = ' . $pascals . ' pascals' . PHP_EOL;
