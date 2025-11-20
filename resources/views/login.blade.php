<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <style>
    html,body{height:100%;margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}
    .wrap {
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      background:#f5f7fa;
      padding:20px;
    }
    .card {
      width:100%;
      max-width:420px;
      background:#fff;
      border-radius:8px;
      box-shadow:0 6px 18px rgba(0,0,0,0.08);
      padding:28px;
      box-sizing:border-box;
    }
    h1{margin:0 0 14px;font-size:20px;color:#111;text-align:center}
    .desc{margin:0 0 18px;color:#666;font-size:14px;text-align:center}
    label{display:block;font-size:13px;color:#333;margin-bottom:6px}
    input, select {
      width:100%;
      padding:10px 12px;
      border:1px solid #d7dbe0;
      border-radius:6px;
      box-sizing:border-box;
      margin-bottom:12px;
      font-size:14px;
    }
    .btn {
      width:100%;
      padding:10px 12px;
      border:0;
      border-radius:6px;
      background:#2563eb;
      color:#fff;
      font-weight:600;
      cursor:pointer;
      font-size:15px;
    }
    .help {font-size:13px;color:#6b7280;text-align:center;margin-top:12px;}
    a.link{color:#2563eb;text-decoration:none;}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>Login</h1>
      <p class="desc">Silakan pilih role lalu login menggunakan email dan kata sandi Anda.</p>

      {{-- User, Dosen, Admin, Kasir --}}

      {{-- <form method="post" action="/Admin"> --}}

      {{-- <form method="post" action="/Dokter"> --}}
      
      {{-- <form method="post" action="/Kasir"> --}}

      <form id="loginForm" method="POST" action="/Admin">
        @csrf

        <!-- PILIH ROLE -->
        <label for="role">Login sebagai:</label>
        <select id="role" name="role">
          <option value="Admin" selected>Admin</option>
          <option value="Dokter">Dokter</option>
          <option value="User">User</option>
          <option value="Kasir">Kasir</option>
        </select>

        <label for="email">Email</label>
        <input id="email" type="email" name="email" >

        <label for="password">Kata Sandi</label>
        <input id="password" type="password" name="password" >

        <button class="btn" type="submit">Login</button>
      </form>

      <p class="help">Belum punya akun? <a class="link" href="/register">Register</a></p>
    </div>
  </div>

  <script>
    // Otomatis ubah action form sesuai role yang dipilih
    const roleSelect = document.getElementById('role');
    const form = document.getElementById('loginForm');

    roleSelect.addEventListener('change', () => {
      const role = roleSelect.value;
      form.action = "/" + role; // Contoh: /Admin, /Dokter, /User, /Kasir
    });
  </script>

</body>
</html>
