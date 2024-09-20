<?php

if (!function_exists('format_currency')) {
  function format_currency($amount, $rate, $symbol)
  {
    $finalAMount = $amount * $rate;
    if ($symbol === 'Rs' || $symbol === '£P') {
      return $symbol . ' ' . number_format($finalAMount, 2);
    }

    return $symbol  . number_format($finalAMount, 2);
  }
}
