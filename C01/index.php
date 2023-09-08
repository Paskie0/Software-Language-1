<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $current_time = date("H:i:s");
    echo date("a") == "am" ? "<style>body {background-color: black; color: white;}</style>" : "<style>body {background-color: white; color: black;}</style>";
    ?>
    <?php
    $name = "Pascal";
    $age = 21;
    $pi = round(pi(), 4);
    $married = true;
    $array = ["PhP", "RuST", "gO", "JaVaScRiPt", "PyThOn"];
    $array_LC = array_map('strtolower', ["PhP", "RuST", "gO", "JaVaScRiPt", "PyThOn"]);
    $array_UCfirst = array_map('ucfirst', $array_LC);
    ?>
    <?php
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $pi;
    echo "<br>";
    echo $married;
    echo "<br>";
    echo implode(" ", $array_UCfirst);
    ?>
</body>

</html>