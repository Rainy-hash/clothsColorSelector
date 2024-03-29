<?php
function colorSuggestions()
{
    function colorOfTheDay($dayOfWeek)
    {
        $colors = array("blue", "red", "orange", "yellow", "purple", "green", "black", "white");
        return $colors[rand(0, count($colors) - 1)];
    }
    $dayOfWeek = date("N");
    $color = colorOfTheDay($dayOfWeek);

    return "Today you should wear " . $color;
}

echo colorSuggestions();
// Generates a random index within the range of 0 to the length of the $colors array minus 1,
// ensuring that the index is within the bounds of the array.
?>