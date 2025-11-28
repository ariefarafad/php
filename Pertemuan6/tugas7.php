<?php
    # Arief Arafad 255520211015
    # Tugas Penentuan kelulusan
    $nama = "Arief";
    $nilai = 82;

    if ($nilai >= 75) {
        echo "Status $nama : Lulus";
    }else {
        echo "Status $nama : Tidak Lulus";
    }

    echo "<br>";

    # Tugas penentuan angka ganjil/genap
    $nama2 = "Kamila";
    $noUndian = 17;

    if ($noUndian % 2 == 0) {
        echo "Angka adalah genap.";
    } else {
        echo "Angka adalah ganjil.";
    }

    echo "<br>";

    #Tugas Konversi Nilai Huruf
    $nama3 = "Dimas";
    $nilai2 = 65;

    if ($nilai2 >= 85) {
        echo "Grade $nama3 : A";
    } elseif ($nilai2 >= 75) {
        echo "Grade $nama3 : B";
    } elseif ($nilai2 >= 65) {
        echo "Grade $nama3 : C";
    } else {
        echo "Grade $nama3 : D";
    }


    echo "<br>";

    #Tugas Kode Hari

    $kodeHari = 4;

    switch($kodeHari) {
        case 1:
            echo "Senin";
            break;
        case 2:
            echo "Selasa";
            break;
        case 3:
            echo "Rabu";
            break;
        case 4:
            echo "Kamis";
            break;
        case 5:
            echo "Jum'at";
            break;
        case 6:
            echo "Sabtu";
            break;
        case 7:
            echo "Minggu";
            break;
        default:
            echo "Tentukan hari.";
            break;
    }

    echo "<br>";

    #Tugas for loop

    for ($x = 1; $x < 6; $x++) {
        echo "$x";
    }


?>