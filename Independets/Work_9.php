<?php
$array = [1, 2, 3, 4, 5];
$elementToFind = 3;
$index = array_search($elementToFind, $array);

if ($index !== false) {
    echo "Элемент найден, индекс: $index\n"; // Элемент найден, индекс: 2
} else {
    echo "Элемент не найден\n";
}
?>