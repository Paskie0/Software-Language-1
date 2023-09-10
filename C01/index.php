<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Language 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: grid;
            place-items: center;
            background-color: #121212;
            font-family: sans-serif;
            color: #fff;
        }

        table {
            background-color: #212121;
            border: 2px solid rgb(255, 255, 255, 0.5);
            border-radius: 0.5rem;
            border-spacing: 0;
            overflow: hidden;
        }

        tr:nth-child(odd) {
            background-color: #333;
        }

        td {
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
    ?>
    <?php
    function arrayToUpperCaseString($array)
    {
        $array = array_map('strtolower', $array);
        $array = array_map('ucfirst', $array);
        return implode(" ", $array);
    };
    ?>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    if (date("a") == "am") {
        echo "<style>body{background-color: #fff;color:#000;}</style>";
        echo "<style>table{background-color: #d8ccb8;}</style>";
        echo "<style>tr:nth-child(odd){background-color: #fff0d9;}</style>";
    } else {
        echo "<style>body{background-color: #121212;color:#fff;}</style>";
        echo "<style>table{background-color: #212121;}</style>";
        echo "<style>tr:nth-child(odd){background-color: #313131;}</style>";
    }
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