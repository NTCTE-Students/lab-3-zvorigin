
<?php
$table = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "<table border='1'>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
