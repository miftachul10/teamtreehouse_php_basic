<?php
//  buat function celcius to fahrenheit
//  rumus (nilai celcius 89/5) +32
// parameter function int celcius
// infoke function celcius to fahrenheit(12) // print 53,6 

function suhu($celcius)
{
    $conversi= ($celcius*9/5)+32;


    echo "$celcius celcius= $conversi fahrenheit";
}
// suhu(10);