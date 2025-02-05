
<?php
$numbers = [5, 1, 4, 2, 3];
sort($numbers);
echo "По возрастанию: " . implode(", ", $numbers) . "\n"; // [1, 2, 3, 4, 5]

rsort($numbers);
echo "По убыванию: " . implode(", ", $numbers) . "\n"; // [5, 4, 3, 2, 1]
?>