<?php
    function perkenalan(){
        echo "<h1><center>Selamat Datang</center></h1> ";
        echo "<h2><center>Pada Acara KopDar AKH ";
        echo "Regional Yogyakarta</center></h2></br>";
    }
    perkenalan()
echo "<hr>";

function perkenalan1($nama, $panggilan)
{
    echo "Selamat datang " . $panggilan . " " . $nama;
}

perkenalan1("farid", "mr");
echo "<hr>";

function perkenalan2($nama, $waktu = "siang")
{
    echo "Selamat  $waktu $nama "; //tanpa return namanya procedure
}

perkenalan2("farid", "sore");
echo "<hr>";

function umur($tahun_lahir, $tahun_sekarang)
{
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur; //kalau ada return berarti function
}

echo umur(2002, 2019);
echo "<hr>";

function perkenalanZ($nama, $waktu)
{
    echo "Selamat $waktu <br>";
    echo "Perkenalkan Nama saya $nama<br>";
    echo "Umur Saya " . umur(2002, 2019) . "tahun";
}

perkenalanZ("Muhammad Farid Priambada", "Siang");
