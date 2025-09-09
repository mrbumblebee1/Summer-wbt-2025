<?php
$year = (int)readline("Enter a year: ");

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year\n";
} else {
    echo "$year is NOT a Leap Year\n";
}
?>
