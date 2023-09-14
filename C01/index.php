<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C01</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
    <?php
    $name = "Pascal";
    $age = 21;
    $pi = round(pi(), 5);
    $married = true;
    $array = ["PhP", "RuST", "gO", "JaVaScRiPt", "PyThOn"];
    function arrayToUpperCaseString($array)
    {
        if (!is_array($array)) {
            return "Not an array";
        } else {
            $array = array_map('strtolower', $array);
            $array = array_map('ucfirst', $array);
            return implode(" ", $array);
        }
    };
    date_default_timezone_set("Europe/Amsterdam");
    echo date("a") == "am" ? "<style>body{background-color:#fff;color:#000;}</style>" : "<style>body{background-color:#000;color:#fff;}</style>";
    ?>
    <table>
        <?php
        echo "<tr><td>" . $name . "</td></tr>";
        echo "<tr><td>" . $age . "</td></tr>";
        echo "<tr><td>" . $pi . "</td></tr>";
        echo "<tr><td>" . $married . "</td></tr>";
        echo "<tr><td>" . arrayToUpperCaseString($array) . "</td></tr>";
        ?>
    </table>
</body>

</html>