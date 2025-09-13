<?php
$number = 10;

if ($number > 90) {
    echo 'Grade A';
} elseif ($number > 80) {
    echo 'Grade B';
} elseif ($number > 70) {
    echo 'Grade C';
} elseif ($number >= 20 && $number <= 70) {
    echo 'Grade D';
} elseif ($number < 20) {
    echo 'Fail ho yrr, padhai karo bewkoof';
} else {
    echo 'Result not found, please enter a valid number';
}

?>