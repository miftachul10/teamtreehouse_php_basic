<?php


$tanya=readline("pilih mana (yes/no/lain)?");

if($tanya=="yes")
{
    echo "Kamu Memilih Yes";
}elseif ($tanya=="no")
{
    echo "Kamu Memilih No";
}elseif ($tanya=="lain")
{
    echo "Kamu Memilih lain";
}else
{
    echo "Kamu Tidak Memilih Pilihan Yang Tersedia";
}



$menu=readline("pilih angka 1-3 ?");

switch($menu)
{
    case 1:
        echo "anda memilih angka 1";
    break;
    case 2:
        echo "anda memilih angka 2";
    break;
    case 3:
        echo "anda memilih angka 3";
    break;
    default:
        echo "anda tidak memilih pilihan yang tersedia";
    
}
