<?php
require_once 'stock.php';
require_once 'action/functions.php';
require_once 'action/form_handler.php';
require_once 'action/process_order.php';

$pageTitle = 'Invoice - Kantin Bu Wati';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Invoice Pesanan</h2>
        <p>Kantin Bu Wati</p>
        <hr>

        <p><strong>No. Invoice:</strong> <?php echo $nomor_invoice; ?></p>
        <p><strong>Tanggal:</strong> <?php echo $tanggal; ?></p>
        <p><strong>Nama Pembeli:</strong> <?php echo htmlspecialchars($nama_pembeli); ?></p>

        <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($pesanan as $item): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $item['nama']; ?></td>
                    <td><?php echo formatRupiah($item['harga']); ?></td>
                    <td><?php echo $item['jumlah']; ?></td>
                    <td><?php echo formatRupiah($item['subtotal']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4"><strong>Total</strong></td>
                    <td><strong><?php echo formatRupiah($total); ?></strong></td>
                </tr>
            </tfoot>
        </table>
        </div>

        <?php if (!empty($catatan)): ?>
        <p><strong>Catatan:</strong> <?php echo htmlspecialchars($catatan); ?></p>
        <?php endif; ?>

        <p><strong>Nomor Meja:</strong> <?php echo $nomor_meja; ?></p>

        <a href="index.php" class="btn btn-primary">Pesan Lagi</a>
        <button onclick="window.print()" class="btn btn-secondary">Cetak</button>
    </div>
</body>
</html>