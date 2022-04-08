<?php
function solution($roman)
{
    $number = 0;
    $split_roman = str_split($roman);
    foreach ($split_roman as $r) {
        switch ($r) {
            case 'I':
                $i = 1;
                $number += $i;
                break;
            case 'V':
                $i = 5;
                $number += $i;
                break;
            case 'X':
                $i = 10;
                $number += $i;
                break;
            case 'L':
                $i = 50;
                $number += $i;
                break;
            case 'C':
                $i = 100;
                $number += $i;
                break;
            case 'D':
                $i = 500;
                $number += $i;
                break;
            case 'M':
                $i = 1000;
                $number += $i;
                break;
        }
    }

    return $number;
}

echo solution("MCMLIV");
