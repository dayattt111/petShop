<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        /* CSS Umum */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        
        /* Sidebar Admin */
        .sidebar { width: 250px; background-color: #2c3e50; color: white; padding: 20px; box-sizing: border-box; } /* Dark Blue/Grey */
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #34495e; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #49637f; }
        .sidebar a.active { background-color: #1abc9c; } /* Greenish-Blue */

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; }
        
        /* Dashboard Cards */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 kolom */
            gap: 20px;
            margin-bottom: 30px;
        }
        .dashboard-card {
            border: 1px solid #ccc;
            padding: 25px;
            background-color: white;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .dashboard-card:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            transform: translateY(-2px);
            transition: all 0.2s ease-in-out;
        }
        .dashboard-card h3 {
            margin: 0;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Admin" class="active">Dashboard Admin</a>
            <a href="/Admin/KelolaDataProduk">Kelola Data Produk</a>
            <a href="/Admin/KelolaLaporanPenjualan">Kelola Laporan Penjualan</a>
            <a href="/Admin/KelolaLaporanDataLayananPerawatan">Kelola Laporan Data Layanan Perawatan</a>
            <a href="/Admin/KelolaJadwalDokter">Kelola Jadwal Dokter</a>
            <a href="/Admin/KelolaDataPengguna">Kelola Data Pengguna</a>
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
                <h2 style="margin-top: 0;">Selamat Datang, Admin!</h2>

                <div class="dashboard-grid">
                    <div class="dashboard-card">
                        <h3>Dokter</h3>
                        <p>Total: 5</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Produk</h3>
                        <p>Total: 45</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Layanan</h3>
                        <p>Total: 12</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>User</h3>
                        <p>Total: 120</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Perawat</h3>
                        <p>Total: 8</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Jadwal</h3>
                        <p>Total: 25</p>
                    </div>
                </div>
                
                <div style="border: 1px solid #ccc; padding: 20px; background-color: white; border-radius: 5px;">
                    <h3>Informasi Sistem</h3>
                    <p>Versi Aplikasi: 1.0.0</p>
                    <p>Status Server: Online</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>