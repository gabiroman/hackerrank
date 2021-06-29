<?php


function jumpingOnClouds($c)
{
    $count = 0;
    for ($i = 0; $i < count($c); $i++) {
        if ($c[$i] == 0) {
            if ($c[$i++] == 0) {
                $count++;
            }
        }
    }
    echo $count;
}

jumpingOnClouds([0, 0, 1, 0, 0, 1, 0]);
