<?php
$num = (int)readline("Enter a number: ");
$fact = 1;

for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}

echo "Factorial of $num = $fact\n";
?>
