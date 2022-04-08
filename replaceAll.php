<?php
function replaceAll($string)
{
    return explode("#", $string)[0];
}

echo replaceAll('www.codewars.com#about');
