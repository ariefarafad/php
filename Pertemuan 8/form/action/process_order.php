<?php

$pesanan = array();
$total = 0;

foreach ($menu_ids as $menu_id) {
    $menu = getMenuById($menu_id);
    if ($menu) {
        $qty = isset($jumlah[$menu_id]) ? (int)$jumlah[$menu_id] : 1;
        
        if ($qty < 1) $qty = 1;
        if ($qty > $menu['stock']) $qty = $menu['stock'];
        
        $subtotal = $menu['harga'] * $qty;
        $total += $subtotal;
        
        $pesanan[] = array(
            'nama' => $menu['nama'],
            'harga' => $menu['harga'],
            'jumlah' => $qty,
            'subtotal' => $subtotal
        );
    }
}

$nomor_invoice = 'KBW-' . date('dmY') . '-' . rand(100, 999);
$tanggal = date('d/m/Y H:i:s');