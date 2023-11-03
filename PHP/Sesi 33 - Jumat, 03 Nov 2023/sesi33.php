<?php
// Menyelesaikan tugas 1
$array = array("satu","dua","tiga","empat","lima");
$array = array_reverse($array);
foreach($array as $value) {
    echo $value . "<br>";
}
echo "<br>";
// Menyelesaikan tugas 2
$array = array("apel","nanas","mangga","jeruk");
echo "terdapat " . count($array) . " buah";

echo "<br>";

// Menyelesaikan tugas 3
$array = array (7,3,4,9);
echo "totalnya adalah " . array_sum($array);

echo "<br>";
// Menyelesaikan tugas 4
for ($i = 1; $i <= 10; $i++) {
    echo "1x" . $i . " = " . $i . "<br>";
}