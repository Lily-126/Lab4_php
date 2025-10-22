<?php
declare(strict_types=1);

function fullName(string $first, string $last): string {
    return trim("$first $last");
}

function counter(): int {
    static $n = 0;
    return ++$n;
}

$first = $_GET['first'] ?? 'Ada';
$last  = $_GET['last']  ?? 'Lovelace';
echo "<p>Name: " . htmlspecialchars(fullName($first, $last)) . "</p>";
echo "<p>Counter calls: " . counter() . ', ' . counter() . ', ' . counter() . "</p>";

$g = 42;
function showGlobal(): int { global $g; return $g; }
echo "<p>Global g: " . showGlobal() . "</p>";