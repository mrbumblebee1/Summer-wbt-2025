<?php
$principal = (int)readline("Enter Principal: ");
$rate = (float)readline("Enter Rate (%): ");
$time = (int)readline("Enter Time (years): ");

$si = ($principal * $rate * $time) / 100;

echo "Simple Interest = $si\n";
?>
