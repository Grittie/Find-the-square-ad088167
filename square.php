<?php
$field = explode("\n", file_get_contents('input.txt'));
$equals = array();

foreach ($field as $key => $value) {
    $letter = str_split($value);

    for ($i = 0; $i < count($letter) - 1; $i++) {

        if ($letter[$i] == $letter[$i + 1]) {
            $equal = array($i, $key, $letter[$i]);
            array_push($equals, $equal);
        }
    }
}
foreach ($equals as $key => $value) {
    $row = array($value[0], $value[1] + 1, $value[2]);

    if (array_search($row, $equals)) {
        echo ("Letter: " . $row[2] . " horizontal=" . $row[0] . " vertical=" . $row[1] . PHP_EOL);
    }
}
