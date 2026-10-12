<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $supplier_name  = mysqli_real_escape_string($koneksi, $_POST['supplier_name']);
    $supply_type    = mysqli_real_escape_string($koneksi, $_POST['supply_type']);
    $contact_person = mysqli_real_escape_string($koneksi, $_POST['contact_person']);
    $vendor_address = mysqli_real_escape_string($koneksi, $_POST['vendor_address']);

    $query = "INSERT INTO suppliers (supplier_name, supply_type, contact_person, vendor_address) 
              VALUES ('$supplier_name', '$supply_type', '$contact_person', '$vendor_address')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: datadisplay.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Raw Material Supplier</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <div class="container">
        <h2>Form Input Raw Material Supplier</h2>
        <p class="subtitle">Tambah data pemasok bahan mentah baru ke dalam sistem</p>

        <form action="input.php" method="POST">
            <div class="form-group">
                <label for="supplier_name">Nama Supplier / Vendor</label>
                <input type="text" id="supplier_name" name="supplier_name" placeholder="Contoh: PT Segar Bersama" required>
            </div>

            <div class="form-group">
                <label for="supply_type">Jenis Pasokan (Supply Type)</label>
                <select id="supply_type" name="supply_type" required>
                    <option value="" disabled selected>-- Pilih Jenis Pasokan --</option>
                    <option value="Fresh Ingredients">Fresh Ingredients (Sayur, Daging, Buah)</option>
                    <option value="Dry Ingredients">Dry Ingredients (Beras, Bumbu Kering, Tepung)</option>
                    <option value="Beverages & Dairy">Beverages & Dairy (Susu, Sirup, Biji Kopi)</option>
                    <option value="Packaging & Consumables">Packaging & Consumables (Kemasan, Tisu)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="contact_person">Contact Person / No. Telepon</label>
                <input type="tel" id="contact_person" name="contact_person" placeholder="Contoh: 0812-3456-7890" required>
            </div>

            <div class="form-group">
                <label for="vendor_address">Alamat Toko / Vendor</label>
                <textarea id="vendor_address" name="vendor_address" rows="4" placeholder="Masukkan alamat lengkap toko/vendor..." required></textarea>
            </div>

            <div class="form-actions">
                <button type="submit" name="submit" class="btn btn-primary">Simpan Supplier</button>
                <button type="reset" class="btn btn-secondary">Reset Form</button>
            </div>
        </form>
    </div>
</body>
</html>