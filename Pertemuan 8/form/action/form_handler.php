<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nama_pembeli = isset($_POST['nama_pembeli']) ? trim($_POST['nama_pembeli']) : '';
$menu_ids = isset($_POST['menu']) ? $_POST['menu'] : array();
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : array();
$catatan = isset($_POST['catatan']) ? trim($_POST['catatan']) : '';

if (empty($nama_pembeli)) {
    die('Nama pembeli harus diisi!');
}

if (empty($menu_ids)) {
    die('Pilih minimal 1 menu!');
}

if (strlen($nama_pembeli) < 3) {
    die('Nama pembeli minimal 3 karakter!');
}

$nomor_meja = isset($_POST['nomor_meja']) ? (int)$_POST['nomor_meja'] : 0;