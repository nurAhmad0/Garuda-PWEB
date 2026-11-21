<?php

if (! function_exists('rp')) {

    function rp(int|string $n): string
    {
        return 'Rp ' . number_format((int) $n, 0, ',', '.');
    }
}
