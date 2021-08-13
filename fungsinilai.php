<?php 
//membuat fungsi
function hitungumur($thn_lahir, $tahun_sekrg){
    $umur = $tahun_sekrg - $thn_lahir;
    return $umur;
}

echo "umur saya Adalah ". hitungumur(1999,2021). "               tahun";
?>