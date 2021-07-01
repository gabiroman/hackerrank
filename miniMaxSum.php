<?php

function miniMaxSum($arr)
{
    echo (array_sum($arr) - max($arr)) . " " . (array_sum($arr) - min($arr));
}

miniMaxSum([1, 2, 3, 4, 5]);
