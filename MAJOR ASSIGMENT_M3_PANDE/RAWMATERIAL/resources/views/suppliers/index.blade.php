<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supplier Bahan Mentah</title>
    <style>
        *{box-sizing:border-box}body{margin:0;background:#f3f6f4;color:#20312b;font:15px/1.5 "Segoe UI",Arial,sans-serif}.wrap{max-width:1100px;margin:42px auto;padding:0 20px}.top{display:flex;justify-content:space-between;align-items:center;gap:16px;margin-bottom:22px}.eyebrow{color:#438369;font-weight:700;font-size:12px;letter-spacing:.12em;text-transform:uppercase}h1{margin:4px 0;font-size:28px}p{margin:0;color:#687870}.card{background:white;border:1px solid #e4ebe7;border-radius:14px;box-shadow:0 10px 28px #183b2b0a;overflow:hidden}.actions{display:flex;gap:10px;align-items:center}.btn{border:0;border-radius:8px;padding:10px 15px;background:#18794e;color:white;text-decoration:none;font-weight:650;cursor:pointer}.btn:hover{background:#12633f}.btn-muted{background:#edf3ef;color:#29493a}.btn-danger{background:#fff0ed;color:#a52f20;padding:7px 10px}.notice{margin:0 0 16px;background:#e9f8ef;color:#17613e;padding:12px 15px;border-radius:8px}.scroll{overflow:auto}table{width:100%;border-collapse:collapse;min-width:760px}th,td{text-align:left;padding:14px 16px;border-bottom:1px solid #edf1ee}th{background:#f8faf9;color:#63736b;font-size:12px;text-transform:uppercase;letter-spacing:.05em}tr:last-child td{border-bottom:0}.badge{display:inline-block;background:#eaf5ef;color:#28714e;padding:4px 9px;border-radius:999px;font-size:12px}.empty{text-align:center;padding:42px;color:#687870}.user{font-size:13px;color:#687870}.inline{display:inline}@media(max-width:650px){.top{align-items:flex-start;flex-direction:column}.wrap{margin-top:24px}h1{font-size:24px}}
    </style>
</head>
<body>
<main class="wrap">
    <div class="top">
        <div><div class="eyebrow">Raw Material Supplier</div><h1>Daftar Supplier</h1><p>Kelola data pemasok bahan mentah.</p></div>
        <div class="actions">
            <span class="user">Masuk sebagai {{ auth()->user()->name }}</span>
            <a class="btn" href="{{ route('suppliers.create') }}">+ Tambah Supplier</a>
            <form class="inline" action="{{ route('logout') }}" method="POST">@csrf<button class="btn btn-muted" type="submit">Keluar</button></form>
        </div>
    </div>
    @if (session('success'))<div class="notice">{{ session('success') }}</div>@endif
    <section class="card"><div class="scroll"><table>
        <thead><tr><th>No.</th><th>Nama Supplier</th><th>Jenis Pasokan</th><th>Kontak</th><th>Alamat</th><th>Aksi</th></tr></thead>
        <tbody>
        @forelse ($suppliers as $supplier)
            <tr>
                <td>{{ $loop->iteration }}</td><td><strong>{{ $supplier->supplier_name }}</strong></td>
                <td><span class="badge">{{ $supplier->supply_type }}</span></td><td>{{ $supplier->contact_person }}</td>
                <td>{{ $supplier->vendor_address }}</td>
                <td><form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" onsubmit="return confirm('Hapus supplier ini?')">@csrf @method('DELETE')<button class="btn btn-danger" type="submit">Hapus</button></form></td>
            </tr>
        @empty
            <tr><td class="empty" colspan="6">Belum ada data supplier. Klik “Tambah Supplier” untuk memasukkan data pertama.</td></tr>
        @endforelse
        </tbody>
    </table></div></section>
</main>
</body>
</html>
