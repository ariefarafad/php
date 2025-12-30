<?php

require_once 'stock.php';
require_once 'action/functions.php';

$pageTitle = 'Kantin Bu Wati';
$menus = $menuKantin;
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
        <h2><?php echo $pageTitle; ?></h2>
        <p>Silakan pilih menu dan jumlah pesanan</p>
        <hr>

        <form action="dash.php" method="POST">
            <div class="mb-3">
                <label>Nama Pembeli</label>
                <input type="text" class="form-control" name="nama_pembeli" required>
            </div>

            <div class="mb-3">
                <label>Nomor Meja</label>
                <input type="number" class="form-control" name="nomor_meja" min="1" max="20">
            </div>

            <div class="mb-3">
                <label>Pilih Menu</label>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pilih</th>
                                <th>Menu</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menus as $menu): ?>
                            <tr>
                                <td><input type="checkbox" name="menu[]" value="<?php echo $menu['id']; ?>"></td>
                                <td><?php echo $menu['nama']; ?></td>
                                <td><?php echo formatRupiah($menu['harga']); ?></td>
                                <td><?php echo $menu['stock']; ?></td>
                                <td><input type="number" class="form-control form-control-sm" name="jumlah[<?php echo $menu['id']; ?>]" value="1" min="1" max="<?php echo $menu['stock']; ?>" style="width:70px"></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-3">
                <label>Catatan (Opsional)</label>
                <textarea class="form-control" name="catatan" rows="2"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>