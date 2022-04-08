<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n)
{
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(' ', ($n - $i)) . str_repeat('#', $i);
        echo "\n";
    }
}

$n = 20;

staircase($n);
