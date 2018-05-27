<?php
$x = (int) $_GET['x'];

if (!$x) {
    echo "Введите число x";
    exit();
}

echo "Введённое число: $x", "<br />";

$first = $second = 1;

while (true) {
    if ($first > $x) {
        echo "Задуманное число НЕ входит в числовой ряд";
        exit();

    } elseif ($first === $x) {
        echo "Задуманное число входит в числовой ряд";
        exit();
    }

    $third = $first;
    $first += $second;
    $second = $third;
}