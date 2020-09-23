<?php

$number=1; //integer

$float=1.2; //float

$int_float=(int)$float; //integer

$str_float=(string)$float; //string

$str_boolean=(bool)$float; //boolean

var_dump($str_boolean);

function kali(int $satu,int $dua):int
{
    return $satu*$dua;
}
/**
 * Operator
 * subtract (-)
 * addition (+)
 * multiply (*)
 * modulus (%)
 * divide (/)
 * incremen (++)
 * decremen (--)
 */

echo 4/2; // 2

echo PHP_EOL;

echo 4%2; // 0


$angka=1; // 1
$angka++; //2
$angka--; //1
$angka+=9; //10
$angka/=5; //2
$angka.=7; // 2 dan 7 bukan 27

echo PHP_EOL;

echo $angka;





