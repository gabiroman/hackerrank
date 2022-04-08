<?php
function countingValleys($steps, $path)
{
    $ss = str_split($path);
    $i = 0;
    $count = 0;
    foreach ($ss as $r) {
        if ($r == 'U') {
            $i++;
            if ($i == 0) {
                $count++;
            }
        } else if ($r == 'D') {
            $i--;
        }
    }
    return $count;
}

countingValleys(8, 'DDUUDDUDUUUD');
