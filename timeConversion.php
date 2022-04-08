<?php

function timeConversion($s)
{
    echo date('H:i:s', strtotime($s));
}
timeConversion("07:05:45PM");