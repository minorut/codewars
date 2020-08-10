<?php

function accum($s)
{
    $parts = [];

    $times = strlen($s);
    for ($i = 0; $i < $times; $i++) {
        $str = substr($s, $i, 1);
        $parts[] = strtoupper($str) . str_repeat(strtolower($str), $i);
    }

    return implode('-', $parts);
}
