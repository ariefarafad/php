<?php
$barang = ["Pensil", "Buku", "Penghapus", "Dompet", "Sarung"];

array_push($barang, "Flashdisk");
array_push($barang, "Laptop");
array_push($barang, "Handphone");
array_push($barang, "Pulpen");
array_push($barang, "Indomie");

echo "<pre>";
print_r($barang);
echo "</pre>";

array_pop($barang);
array_pop($barang);
array_pop($barang);

echo "<hr><pre>";
print_r($barang);
echo "</pre>";

function cetakNamadanKampus($nama, $kampus){
    $hasil = "Nama saya $nama dan saya adalah mahasiswa kampus $kampus";
    return $hasil;
}
echo "<hr>";
echo "Output fungsi : " . cetakNamadanKampus("Arief Arafad", "Metamedia");
?>
