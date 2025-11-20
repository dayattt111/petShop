<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna Baru</title>
    <style>
        /* CSS Umum dan Sidebar Admin (Dari Template Anda) */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background-color: #2c3e50; color: white; padding: 20px; box-sizing: border-box; } 
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #34495e; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #49637f; }
        .sidebar a.active { background-color: #1abc9c; } 
        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        .content { padding: 20px; }

        /* Form Styling */
        .form-area { 
            border: 1px solid #28a745; 
            padding: 30px; 
            background-color: white; 
            border-radius: 5px; 
            max-width: 600px; 
            margin: 20px auto; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #2c3e50; }
        .form-group input:not([type="checkbox"]), 
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            border-color: #1abc9c;
            outline: none;
        }

        .form-actions { margin-top: 30px; text-align: right; }
        .form-actions button, .form-actions a { 
            padding: 10px 20px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            text-decoration: none; 
            font-weight: bold;
            transition: opacity 0.3s;
        }
        .btn-submit { background-color: #28a745; color: white; margin-right: 10px; }
        .btn-cancel { background-color: #6c757d; color: white; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Admin">Dashboard Admin</a>
            <a href="/Admin/KelolaDataProduk">Kelola Data Produk</a>
            <a href="/Admin/KelolaLaporanPenjualan">Kelola Laporan Penjualan</a>
            <a href="/Admin/KelolaLaporanDataLayananPerawatan">Kelola Laporan Data Layanan Perawatan</a>
            <a href="/Admin/KelolaJadwalDokter">Kelola Jadwal Dokter</a>
            <a href="/Admin/KelolaDataPengguna" class="active">Kelola Data Pengguna</a>
        </div>

        <div class="main-container">
            <header class="header">
                <div>Dashboard Admin</div>
                <div class="profile">
                    Profil Admin
                    <a href="/">Logout</a>
                </div>
            </header>

            <div class="content">
                <h2 style="margin-top: 0; text-align: center;">➕ Tambah Data Pengguna Baru</h2>
                
                <div class="form-area">
                    <form action="/Admin/KelolaDataPengguna" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="_token" value="SIMULASI_CSRF_TOKEN">  --}}
                        
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" placeholder="Masukkan nama pengguna">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="contoh@petcare.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password (Default)</label>
                            <input type="password" id="password" placeholder="Masukkan password awal">
                        </div>
                        <div class="form-group">
                            <label for="role">Role Pengguna</label>
                            <select id="role">
                                <option value="">Pilih Role</option>
                                <option>Admin</option>
                                <option>Dokter</option>
                                <option>Kasir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat (Opsional)</label>
                            <textarea id="alamat" rows="2" placeholder="Alamat lengkap pengguna"></textarea>
                        </div>

                        <div class="form-actions">
                            <a href="/Admin/KelolaDataPengguna" class="btn-cancel">Batal</a>
                            <button type="submit" class="btn-submit">Simpan Pengguna</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>