<?php 
//membuat fungsi
function hitungumur($thn_lahir, $tahun_sekrg){
    $umur = $tahun_sekrg - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="selamat datang"){
    echo $salam. ", ";
    echo "perkenalkan nama saya ".$nama."<br/>";
    //memanggil fungsi
    echo "saya Berusia ". hitungumur(1992,2021) ."tahun</br>";
    echo "senang berkenalan dengan anda<br/>";
}
//memangggil 
perkenalan   ("candra");

?>