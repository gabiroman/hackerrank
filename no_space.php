<?php
function no_space(string $s)
{
    return str_replace(" ", "", $s);
}

no_space("Casa con espacio");
