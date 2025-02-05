<?php
$arrayWithDuplicates = [1, 2, 2, 3, 4, 4, 5];
$uniqueArray = array_unique($arrayWithDuplicates);
echo "Массив без дубликатов: " . implode(", ", $uniqueArray) . "\n"; // [1, 2, 3, 4, 5]
?>
