
<?php
$array = [1, 2, 3, 4, 5];
$reversedArray = array_reverse($array);
echo "Перевёрнутый массив: " . implode(", ", $reversedArray) . "\n"; // [5, 4, 3, 2, 1]
?>
