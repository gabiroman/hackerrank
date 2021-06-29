<?php
function sockMerchant($n, $ar)
{
    $arr = array_count_values($ar);
    $i = 0;
    $count = 0;
    foreach ($arr as $r) {
        if ($r >= 2) {
            $count = $r;
            while ($count > 1) {
                $count = $count - 2;
                $i++;
            }
        }
    }
    return $i;
}

sockMerchant(20, [4, 5, 5, 5, 6, 6, 4, 1, 4, 4, 3, 6, 6, 3, 6, 1, 4, 5, 5, 5]);
