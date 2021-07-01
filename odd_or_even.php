<?php
function odd_or_even(array $a)
{
    return ((array_sum($a) % 2) == 0) ? "even" : "odd";
}

odd_or_even([0, -1, -5]);
