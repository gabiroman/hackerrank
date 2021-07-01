<?php
function printerError($s)
{
    return strlen(preg_replace('/[a-m]/i', '', $s)) . '/' . strlen($s);
}

printerError("aaaxbbbbyyhwawiwjjjwwm");
