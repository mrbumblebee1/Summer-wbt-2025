<?php
$numbers = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;

foreach ($numbers as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $search found in the array.";
} else {
    echo "Element $search not found in the array.";
}
?>
