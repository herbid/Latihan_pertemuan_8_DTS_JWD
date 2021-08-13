<?php

function faktorial($angka){

    if($angka<2){
        return 1;

    }else {
        ///menanggil dirinya
        return ($angka*faktorial($angka-1));
    }
}
//memnggil fungso
echo "faktorial 5 adalah". faktorial(5);

?>