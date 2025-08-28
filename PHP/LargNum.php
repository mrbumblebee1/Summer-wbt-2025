<?php
$a = 12;
$b = 45;
$c = 27;

if ($a >= $b && $a >= $c) {
    echo "Largest Number is: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest Number is: $b";
} else {
    echo "Largest Number is: $c";
}
?>
