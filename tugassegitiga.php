<?php 

function luassegitiga($alas,$tinggi){
$rumus= ($alas)/2 * $tinggi;
return $rumus;
}
function kelsegitiga($alas,$sisi){
    $kel= $alas+$sisi+$sisi;
    return $kel;
    }


function segitiga(){
echo "<h4>SSegitiga sama kaki</h4><br>";
echo "Luas Segitiga [alas/2 x tinggi] dengan alas (27) dan tinggi (28) = ".luassegitiga(16,18);
echo "<br>";
echo "keliling Segitiga [alas x sisi x sisi] dengan alas (27) dan sisi (29) sisi2 (29) = ".kelsegitiga(19,13);
}

segitiga();

echo "<br>";
function ssamakaki(){
    $alas = 10;$tinggi = 12; $sisi = 13  ; 
	$luas = ($alas)/2 * $tinggi;
	$keliling = $alas + $sisi + $sisi;
	echo "<br>";
	echo" alas =".$alas." ,  ";
	echo" Tinggi = ".$tinggi." , ";
	echo" Sisi ".$sisi."  , <br/>";
    echo" Luas  = ".$luas." <br>";
	echo" Keliling  = ".$keliling."<br>";

}
ssamakaki();
 ?>