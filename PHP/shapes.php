<?php
echo "Shape 1:<br>";
echo "<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

echo "Shape 2:<br>";
echo "<br>";
$num = 1;
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}

echo "<br>";

echo "Shape 3:<br>";
echo "<br>";
$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
?>
