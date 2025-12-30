<?php
function getMenuById($id) {
    global $menuKantin;
    foreach ($menuKantin as $menu) {
        if ($menu['id'] == $id) {
            return $menu;
        }
    }
    return null;
}

function formatRupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function hitungDiskon($harga, $persen) {
    return $harga - ($harga * $persen / 100);
}