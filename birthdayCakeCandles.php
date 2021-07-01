<?php
function birthdayCakeCandles($candles)
{
    $c = count($candles);
    $i = 0;
    for($j = 0; $j < $c; $j++) {
        if ($candles[$j] == max($candles)) {
            $i++;
        }
    }
    echo $i;
}

birthdayCakeCandles([3, 2, 1, 3]);
