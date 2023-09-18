<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C03</title>
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin: 1rem;
            justify-items: center;
            align-content: start;
            font-family: sans-serif;

        }

        .memberCard {
            width: 100%;
            max-width: 250px;
            aspect-ratio: 2/3;
            padding: 1rem;
            border-radius: 1rem;
            background-color: yellow;
        }
    </style>
</head>

<body>
    <?php
    $teams = [
        [
            'name' => 'Blond',
            'members' => [
                [
                    'name' => 'Pascal',
                    'age' => 21,
                    'city' => 'Almere',
                    'hobbies' => ['voetbal', 'gamen'],
                ],
                [
                    'name' => 'Robin',
                    'age' => 21,
                    'city' => 'Harderwijk',
                    'hobbies' => ['voetbal', 'gamen'],
                ],
                [
                    'name' => 'Bram',
                    'age' => 21,
                    'city' => 'Huizen',
                    'hobbies' => ['voetbal', 'gamen'],
                ],
                [
                    'name' => 'Pascal',
                    'age' => 21,
                    'city' => 'Almere',
                    'hobbies' => ['voetbal', 'gamen'],
                ],
                [
                    'name' => 'Robin',
                    'age' => 21,
                    'city' => 'Harderwijk',
                    'hobbies' => ['voetbal', 'gamen'],
                ],
                [
                    'name' => 'Bram',
                    'age' => 21,
                    'city' => 'Huizen',
                    'hobbies' => ['voetbal', 'gamen'],
                ],
            ]
        ],
    ];
    function generateMemberCard($name, $team, $age, $city, $hobbies)
    {
        echo "<div class='memberCard'>";
        echo "<h2>$name</h2>";
        echo "<h3>$team</h3>";
        echo "<span>$age</span>";
        echo "<span>$city</span>";
        echo "<span>$hobbies</span>";
        echo "</div>";
    };
    foreach ($teams as $team) {
        foreach ($team['members'] as $member) {
            generateMemberCard($member['name'], $team['name'], $member['age'], $member['city'], implode(" ", $member['hobbies']));
        };
    };
    ?>
</body>

</html>