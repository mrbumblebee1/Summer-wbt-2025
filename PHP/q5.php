<?php
$limit = (int)readline("Enter the limit (e.g. 50): ");

echo "Prime numbers between 1 and $limit:\n";

for ($i = 2; $i <= $limit; $i++) {
    $prime = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $prime = false;
            break;
        }
    }
    if ($prime) {
        echo $i . " ";
    }
}
echo "\n";
?>
