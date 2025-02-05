
<?php
$str = "Привет мир";
$wordsArray = explode(" ", $str);
echo "Массив слов: " . implode(", ", $wordsArray) . "\n"; // ['Привет', 'мир']
?>