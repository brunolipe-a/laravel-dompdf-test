<?php

if (!function_exists('money')) {
    function money($value)
    {
        $moneyValue = round($value, 2);

        return 'R$ ' . number_format($moneyValue, 2, ',', '.');
    }
}

if (!function_exists('percentage')) {
    function percentage($value)
    {
        return round($value, 2) . '%';
    }
}
