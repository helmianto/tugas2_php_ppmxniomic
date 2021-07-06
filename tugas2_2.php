<?php
$jual = 80000;
$beli = 50000;
function hitungPersenKeuntungan($jual, $beli){
    $untung = $jual - $beli;
    $persenKeuntungan = $untung / $beli * 100;
    return $persenKeuntungan;
}

echo "Jual = ". $jual ."<br/>";
echo "Beli = ". $beli ."<br/>";
echo "Keuntungan = ...? <br/>";
echo "Jawaban : ". hitungPersenKeuntungan($jual, $beli). " %";

?>