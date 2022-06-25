<?php

use Illuminate\Support\Str;

if (! function_exists('truncate')) {
    function truncate(string $string, int $length = 100)
    {
        return Str::limit($string, $length, ' ...');
    }
}
