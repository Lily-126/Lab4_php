<?php
$a = 10; $b = '10';

$loose = ($a == $b);   // true
$strict = ($a === $b); // false
$sum = $a + (int)$b;

echo "<p>Loose: " . ($loose ? 'true' : 'false') . "</p>";
echo "<p>Strict: " . ($strict ? 'true' : 'false') . "</p>";
echo "<p>Sum: $sum</p>";

$x = 5; $y =& $x; $y = 9;
echo "<p>By reference: x=$x, y=$y</p>";