<?php
// echo 'Hello'.'</br>';
// $color = 'red';
// $carColor = "red Pink";
// echo strlen($color).'</br>';
// echo strrev($carColor).'</br>';
// var_dump (strpos($carColor, $color));
// echo str_replace('red','blue', $carColor).'</br>';

// echo (pi()).'</br>';
// echo(sqrt(16)).'</br>';
$number = 0.66;
// echo round($number).'</br>';
// echo ceil($number).'</br>';
// echo floor(5.6).'</br>';

function getPow($number, $number2) 
{
    echo pow($number, $number2);
    echo $number ** $number2;

}
getPow(2,3);

function flipStr($str)
{
    echo strrev($str);
}
flipStr('test');