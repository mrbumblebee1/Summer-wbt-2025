<?php
$a = (int)readline("Enter first number (a): ");
$b = (int)readline("Enter second number (b): ");

echo "Before Swapping: a = $a, b = $b\n";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After Swapping: a = $a, b = $b\n";
?>
