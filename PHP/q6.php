<?php
echo "Pattern 1:\n";
echo "<br>";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "\n";

echo "Pattern 2:\n";
echo "<br>";

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";

echo "Pattern 3:\n";
echo "<br>";

$ch = 'A';
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
    }
    $ch++;
    echo "<br>";
}
?>
