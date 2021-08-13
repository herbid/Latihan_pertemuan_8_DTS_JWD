<?php 

//membuat fungsi
function perkenalan($nama, $salam){
    echo $nama. ", ";
    echo "Perkenalan, nama saya ".$nama."</br>";
    echo "SEnang berkenalan dengan anda </br>";
}   

//memanggil fungsi yang sudah di buat
perkenalan("komang", "HI");
echo "<hr>";

$saya = "Medi";
$ucapansalam ="Selamat pagi";
//memnggil lagi
perkenalan($saya, $ucapansalam);
?>