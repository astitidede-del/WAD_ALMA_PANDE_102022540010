<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Supplier</title>
    <style>
        *{box-sizing:border-box}body{margin:0;min-height:100vh;display:grid;place-items:center;background:#f3f6f4;color:#20312b;font:15px/1.5 "Segoe UI",Arial,sans-serif;padding:20px}.card{width:min(100%,430px);background:#fff;border:1px solid #e4ebe7;border-radius:14px;padding:30px;box-shadow:0 10px 28px #183b2b0a}.eyebrow{color:#438369;font-weight:700;font-size:12px;letter-spacing:.12em;text-transform:uppercase}h1{margin:4px 0 3px;font-size:27px}p{margin:0 0 22px;color:#687870}.field{margin:17px 0}.field label{display:block;font-weight:650;margin-bottom:6px}.field input{width:100%;border:1px solid #d7e1db;border-radius:8px;padding:11px 12px;font:inherit}.field input:focus{outline:2px solid #b9dfca;border-color:#32865b}.btn{width:100%;border:0;border-radius:8px;padding:12px;background:#18794e;color:#fff;font:inherit;font-weight:700;cursor:pointer}.error{color:#a52f20;font-size:13px;margin-top:4px}.hint{font-size:13px;margin-top:18px;background:#f4f8f5;border-radius:8px;padding:10px 12px;color:#53665b}
    </style>
</head>
<body><main class="card"><div class="eyebrow">Raw Material Supplier</div><h1>Login</h1><p>Masuk untuk mengelola data supplier.</p>
    @if ($errors->any())<div class="error">{{ $errors->first() }}</div>@endif
    <form action="{{ route('login.store') }}" method="POST">@csrf
        <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="username" required autofocus></div>
        <div class="field"><label for="password">Password</label><input id="password" name="password" type="password" autocomplete="current-password" required></div>
        <div class="field"><label><input type="checkbox" name="remember" value="1"> Ingat saya</label></div>
        <button class="btn" type="submit">Masuk</button>
    </form>
    <div class="hint">Akun demo lokal: <strong>admin@supplier.test</strong> / <strong>Supplier123!</strong></div>
</main></body>
</html>
