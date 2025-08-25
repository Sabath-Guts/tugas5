<?php
$p = 6;
$l = 4;
$t = 3;

$luas_permukaan = 2 * (($p * $l) + ($p * $t) + ($l * $t));
$volume = $p * $l * $t;

echo "Luas permukaan balok = $luas_permukaan <br>";
echo "Volume balok = $volume";
