<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Pengguna</title>
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

        /* Delete Confirmation Styling */
        .confirmation-area { 
            border: 1px solid #dc3545; 
            padding: 30px; 
            background-color: #f8d7da; /* Latar Merah Muda */
            border-radius: 5px; 
            max-width: 550px; 
            margin: 50px auto; 
            text-align: center; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .confirmation-area h3 { color: #dc3545; margin-top: 0; }
        .confirmation-area p { font-size: 1.1em; margin-bottom: 30px; }
        .detail-info {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: left;
        }
        
        .delete-actions button, .delete-actions a { 
            padding: 10px 20px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            text-decoration: none; 
            font-weight: bold;
            transition: opacity 0.3s;
        }
        .btn-delete-confirm { background-color: #dc3545; color: white; margin-right: 15px; }
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
                <h2 style="margin-top: 0; text-align: center;">🗑️ Konfirmasi Penghapusan Pengguna</h2>
                
                <div class="confirmation-area">
                    <h3>PERINGATAN! Hapus Akun Pengguna</h3>
                    <p>Anda akan menghapus akun pengguna berikut dari sistem. Aksi ini tidak dapat dibatalkan!</p>
                    
                    <div class="detail-info">
                        <strong>No. Pengguna:</strong> 2<br>
                        <strong>Nama:</strong> Dr. Budi<br>
                        <strong>Email:</strong> budi.doc@petcare.com<br>
                        <strong>Role:</strong> Dokter
                    </div>

                    <form action="/Admin/KelolaDataPengguna" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="_token" value="SIMULASI_CSRF_TOKEN"> 
                        <input type="hidden" name="id_pengguna" value="2"> --}}
                        
                        <div class="delete-actions">
                            <button type="submit" class="btn-delete-confirm">Ya, Hapus Pengguna Ini</button>
                            <a href="/Admin/KelolaDataPengguna" class="btn-cancel">Batal / Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>