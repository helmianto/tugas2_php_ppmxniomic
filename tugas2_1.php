<?php
$waktu_pengerjaan1 = 36;
$jumlah_pekerja_pengerjaan1 = 12;
$jumlah_pekerja_pengerjaan2 = 24;

function hitungWaktuPengerjaan($waktu1, $pekerja1, $pekerja2){
    return $waktu1 * $pekerja1 / $pekerja2;
}

echo $waktu_pengerjaan1." Hari = ". $jumlah_pekerja_pengerjaan1 ." Pekerja <br/>";
echo "X Hari = ". $jumlah_pekerja_pengerjaan2 ." Pekerja <br/>";
echo "X Hari = ...? <br/>";
echo "Jawaban : ". hitungWaktuPengerjaan($waktu_pengerjaan1, $jumlah_pekerja_pengerjaan1, $jumlah_pekerja_pengerjaan2)." Hari";

?>