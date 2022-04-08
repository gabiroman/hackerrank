<?php
function likes($names)
{
    $likes = " likes this";
    if ($names) {
        if (count($names) == 2) {
            $name = $names[0] . " and " . $names[1] . $likes;
            return $name;
        } else if (count($names) == 3) {
            $name = $names[0] . ", " . $names[1] . " and " . $names[2] . $likes;
            return $name;
        } else if (count($names) > 3) {
            $name = $names[0] . ", " . $names[1] . " and " . $names[2] . $likes;
            return $name;
        }
    } else {
        return "no one" . $likes;
    }
}

echo likes(["Uno", "Dos", "Tres"]);
