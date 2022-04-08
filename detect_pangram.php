<?php
function detect_pangram($string)
{
    $abc = range('a', 'z');
    foreach ($abc as $s) {
        if (strpos(strtolower($string), $s) === false) {
            echo false;
        }
    }

    echo true;
}

detect_pangram("The quick brown fox jumps over the lazy dog");
