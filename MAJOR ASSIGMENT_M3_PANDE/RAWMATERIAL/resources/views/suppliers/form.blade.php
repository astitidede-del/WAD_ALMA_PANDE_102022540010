<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Supplier</title>
    <style>
        *{box-sizing:border-box}body{margin:0;background:#f3f6f4;color:#20312b;font:15px/1.5 "Segoe UI",Arial,sans-serif}.wrap{max-width:620px;margin:42px auto;padding:0 20px}.card{background:#fff;border:1px solid #e4ebe7;border-radius:14px;padding:28px;box-shadow:0 10px 28px #183b2b0a}.eyebrow{color:#438369;font-weight:700;font-size:12px;letter-spacing:.12em;text-transform:uppercase}h1{margin:4px 0 3px;font-size:27px}p{margin:0 0 22px;color:#687870}.field{margin:17px 0}.field label{display:block;font-weight:650;margin-bottom:6px}.field input,.field select,.field textarea{width:100%;border:1px solid #d7e1db;border-radius:8px;padding:11px 12px;font:inherit;background:#fff}.field input:focus,.field select:focus,.field textarea:focus{outline:2px solid #b9dfca;border-color:#32865b}.error{color:#a52f20;font-size:13px;margin-top:4px}.actions{display:flex;gap:10px;margin-top:22px}.btn{border:0;border-radius:8px;padding:11px 15px;background:#18794e;color:white;text-decoration:none;font-weight:650;cursor:pointer}.btn-muted{background:#edf3ef;color:#29493a}
    </style>
</head>
<body><main class="wrap"><section class="card">
    <div class="eyebrow">Raw Material Supplier</div><h1>Tambah Supplier</h1><p>Isi informasi pemasok bahan mentah di bawah ini.</p>
    <form action="{{ route('suppliers.store') }}" method="POST">@csrf
        <div class="field"><label for="supplier_name">Nama Supplier / Vendor</label><input id="supplier_name" name="supplier_name" value="{{ old('supplier_name') }}" placeholder="Contoh: PT Segar Bersama" required>@error('supplier_name')<div class="error">{{ $message }}</div>@enderror</div>
        <div class="field"><label for="supply_type">Jenis Pasokan</label><select id="supply_type" name="supply_type" required><option value="">-- Pilih Jenis Pasokan --</option>@foreach (['Fresh Ingredients','Dry Ingredients','Beverages & Dairy','Packaging & Consumables'] as $type)<option value="{{ $type }}" @selected(old('supply_type') === $type)>{{ $type }}</option>@endforeach</select>@error('supply_type')<div class="error">{{ $message }}</div>@enderror</div>
        <div class="field"><label for="contact_person">Contact Person / No. Telepon</label><input id="contact_person" name="contact_person" value="{{ old('contact_person') }}" placeholder="Contoh: 0812-3456-7890" required>@error('contact_person')<div class="error">{{ $message }}</div>@enderror</div>
        <div class="field"><label for="vendor_address">Alamat Toko / Vendor</label><textarea id="vendor_address" name="vendor_address" rows="4" placeholder="Masukkan alamat lengkap..." required>{{ old('vendor_address') }}</textarea>@error('vendor_address')<div class="error">{{ $message }}</div>@enderror</div>
        <div class="actions"><button class="btn" type="submit">Simpan Supplier</button><a class="btn btn-muted" href="{{ route('suppliers.index') }}">Kembali</a></div>
    </form>
</section></main></body>
</html>
