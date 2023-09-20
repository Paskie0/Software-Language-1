<?php
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
