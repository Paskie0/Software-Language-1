<?php
$kites = ["Gin", "Gaastra", "Naisin"];
$kitesAndSizes = [
    ["Gin" => "12m"],
    ["Gaastra" => "9m"],
    ["Naisin" => "7m"]
];
$kitesAndSizes2 = [
    ['name' => "Gin", 'age' => "12m"],
    ['name' => "Gaastra", 'age' => "9m"],
    ['name' => "Naisin", 'age' => "7m"]
];
echo "<strong>index:</strong> " . $kites[0] . ", " . $kites[1] . ", " . $kites[2];
echo "<br>";
echo "<strong>implode:</strong> " . implode(", ", $kites);
echo "<br>";
echo "<strong>print_r:</strong> ";
echo print_r($kites);
echo "<br>";
echo "<strong>var_dump:</strong> ";
echo var_dump($kites);
echo "<br>";
echo "<strong>foreach:</strong> ";
foreach ($kites as $kite) {
    echo $kite . " ";
}
echo "<br>";
echo "<strong>for:</strong> ";
for ($i = 0; $i < count($kites); $i++) {
    echo $kites[$i] . " ";
}
echo "<br>";
echo "<strong>multidimensional arrays (nested foreach):</strong> ";
foreach ($kitesAndSizes as $kiteAndSize) {
    foreach ($kiteAndSize as $kite => $size) {
        echo $kite . " " . $size . " ";
    }
}
echo "<br>";
echo "<strong>multidimensional arrays (for loop):</strong> ";
for ($i = 0; $i < count($kitesAndSizes2); $i++) {
    echo $kitesAndSizes2[$i]["name"] . " " . $kitesAndSizes2[$i]["age"] . " ";
}
echo "<br>";
echo "<strong>multidimensional arrays (index + key names):</strong> ";
echo $kitesAndSizes2[0]["name"] . " " . $kitesAndSizes2[0]["age"] . " ";
echo $kitesAndSizes2[1]["name"] . " " . $kitesAndSizes2[1]["age"] . " ";
echo $kitesAndSizes2[2]["name"] . " " . $kitesAndSizes2[2]["age"] . " ";
echo "<br>";
$blond = [
    ['name' => "Pascal", 'age' => 21, 'woonplaats' => "Almere", 'hobbies' => ["voetbal", "gamen"]],
    ['name' => "Robin", 'age' => 21, 'woonplaats' => "Harderwijk", 'hobbies' => ["voetbal", "gamen"]],
    ['name' => "Bram", 'age' => 21, 'woonplaats' => "Huizen", 'hobbies' => ["voetbal", "gamen"]],
];
echo "<br>";
for ($i = 0; $i < count($blond); $i++) {
    echo $blond[$i]['name'] . " " . $blond[$i]['age'] . " " . $blond[$i]['woonplaats'] . " " . implode(" ", $blond[$i]['hobbies']) . "<br>";
}
echo "<br>";
$numbers = [
    'pascal' => [1, 2, 3, 4, 5],
    'robin' => [6, 7, 8, 9, 10],
    'bram' => [11, 12, 13, 14, 15]
];
foreach ($numbers as $number => $value) {
    echo array_sum($value) . "<br>";
}
