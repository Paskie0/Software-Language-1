<?php
include("./data/arrays.php");
include("./functions/memberCard.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C03</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <?php
    foreach ($teams as $team) {
        foreach ($team['members'] as $member) {
            generateMemberCard($member['name'], $team['name'], $member['age'], $member['city'], implode(" ", $member['hobbies']));
        };
    };
    ?>
</body>

</html>