<?php
    # 1. Hitung Total Lembur: Hitung total upah yang didapat dari jam lembur.
    $jam_lembur = 10;
    $tarif_lembur = 25000;
    $total_lembur = $tarif_lembur * $jam_lembur;
    
    echo "<br>Total tarif lembur : " . $total_lembur;

    # 2. Hitung Gaji Kotor: Tambahkan total lembur ke gaji pokok.
    $gaji_pokok = 3000000;
    $gaji_kotor = $gaji_pokok + $total_lembur;
    
    echo "<br>Total gaji kotor : " . $gaji_kotor;

    # 3. Hitung Gaji Bersih: Potong biaya administrasi dari gaji kotor.
    $biaya_adm = 50000;
    $gaji_bersih = $gaji_kotor - $biaya_adm;

    echo "<br>Total gaji bersih : " . $gaji_bersih;
?>