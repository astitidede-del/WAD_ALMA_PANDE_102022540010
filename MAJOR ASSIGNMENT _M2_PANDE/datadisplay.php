<?php
include 'koneksi.php';

$query  = "SELECT * FROM suppliers ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);

function getBadgeClass($type) {
    if ($type === "Fresh Ingredients") return "badge-fresh";
    if ($type === "Dry Ingredients") return "badge-dry";
    if ($type === "Beverages & Dairy") return "badge-beverage";
    return "badge-default";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier Raw Material</title>
    <link rel="stylesheet" href="datadisplay.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h2>Daftar Raw Material Supplier</h2>
                <p class="subtitle">Manajemen master data supplier bahan mentah</p>
            </div>
            <a href="input.php" class="btn btn-add">+ Tambah Supplier</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>Jenis Pasokan</th>
                        <th>Kontak</th>
                        <th>Alamat Toko/Vendor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    if (mysqli_num_rows($result) > 0) :
                        while ($row = mysqli_fetch_assoc($result)) : 
                            $badgeClass = getBadgeClass($row['supply_type']);
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><strong><?= htmlspecialchars($row['supplier_name']); ?></strong></td>
                            <td><span class="badge <?= $badgeClass; ?>"><?= htmlspecialchars($row['supply_type']); ?></span></td>
                            <td><?= htmlspecialchars($row['contact_person']); ?></td>
                            <td><?= htmlspecialchars($row['vendor_address']); ?></td>
                            <td>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn-action delete" onclick="return confirm('Yakin ingin menghapus supplier ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php 
                        endwhile;
                    else : 
                    ?>
                        <tr>
                            <td colspan="6" style="text-align: center; color: #7f8c8d;">Belum ada data supplier di database.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>