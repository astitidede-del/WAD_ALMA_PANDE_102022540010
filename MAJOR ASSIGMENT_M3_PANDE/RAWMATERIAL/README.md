# Supplier Raw Material (Laravel)

Proyek unik ini mengubah aplikasi supplier PHP biasa menjadi aplikasi Laravel 12. Nama proyek: `SupplierRawAstit2026`.

## Bagian tugas

- Model utama: `App\Models\Supplier`
- Controller utama: `App\Http\Controllers\SupplierController`
- Dua halaman Blade aplikasi: daftar supplier dan form tambah supplier
- Modul login/logout: `AuthController`, route autentikasi, dan halaman login
- Koneksi database: MySQL Laragon, database `db_rawmaterial`

Laravel juga memakai model bawaan `User` untuk autentikasi.

## Menjalankan di Laragon

1. Salin folder proyek ini ke `C:\laragon\www\SupplierRawAstit2026`.
2. Pastikan MySQL Laragon berjalan dan database `db_rawmaterial` sudah dibuat.
3. Buka **Terminal** dari Laragon, lalu jalankan:

   ```powershell
   cd C:\laragon\www\SupplierRawAstit2026
   composer install
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve
   ```

4. Buka `http://127.0.0.1:8000`.
5. Masuk dengan akun demo lokal:
   - Email: `admin@supplier.test`
   - Password: `Supplier123!`

Jika Composer mengeluh bahwa ekstensi ZIP PHP tidak aktif, buka `php.ini` yang dipakai Laragon, aktifkan `extension=zip`, lalu tutup dan buka kembali Terminal Laragon sebelum menjalankan `composer install`.

Migrasi membuat tabel `suppliers` bila belum ada. Jika tabel dari versi PHP biasa sudah ada, migrasi mempertahankan tabel itu dan model Supplier tidak memerlukan kolom timestamp.

## Bukti untuk tugas

Sesudah aplikasi terbuka, ambil screenshot halaman daftar supplier yang menampilkan URL `127.0.0.1:8000`. Untuk bukti tambahan, ambil screenshot halaman login dan folder proyek yang menunjukkan `app/Models/Supplier.php`, `app/Http/Controllers/SupplierController.php`, serta folder `resources/views/suppliers`.
