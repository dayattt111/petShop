<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Produk</title>
    <style>
        /* CSS Umum */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        
        /* Sidebar Admin */
        .sidebar { width: 250px; background-color: #2c3e50; color: white; padding: 20px; box-sizing: border-box; } 
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #34495e; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #49637f; }
        .sidebar a.active { background-color: #1abc9c; } 

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; }

        /* Search Bar (sesuai wireframe) */
        .search-bar { 
            margin-bottom: 15px; 
            display: flex; 
            align-items: center;
            justify-content: space-between;
        }
        .search-bar input {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
        }
        .search-bar label {
            font-weight: bold;
            margin-right: 10px;
        }

        /* CRUD Buttons */
        .crud-buttons { margin-bottom: 15px; text-align: right; } /* Diubah ke kanan */
        .crud-buttons a { text-decoration: none; padding: 8px 15px; margin-right: 10px; border-radius: 4px; color: white; font-weight: bold; }
        #add { background-color: #28a745; } /* Create */
        
        /* Tabel Styling */
        .data-table { width: 100%; border-collapse: collapse; border: 1px solid black; background-color: white; }
        .data-table th, .data-table td { border-bottom: 1px solid black; padding: 10px; text-align: left; }
        .data-table th { background-color: #d1f7ee; border-bottom: 2px solid #1abc9c; color: #2c3e50; } /* Header sesuai tema */
        .data-table tr:hover { background-color: #e0f8f4; } 
        .data-table td:last-child { text-align: center; } 
        
        /* Aksi Buttons di dalam Tabel */
        .action-btn { padding: 5px 10px; margin: 0 3px; border-radius: 4px; text-decoration: none; color: white; font-size: 12px; }
        .action-btn.edit { background-color: #ffc107; color: black; } 
        .action-btn.delete { background-color: #dc3545; } 
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Admin">Dashboard Admin</a>
            <a href="/Admin/KelolaDataProduk" class="active">Kelola Data Produk</a>
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
                <h2 style="margin-top: 0;">Kelola Data Produk</h2>
                
                <div class="search-bar">
                    <div>
                        <label for="search-produk">Produk:</label>
                        <input type="text" id="search-produk" placeholder="Cari nama produk...">
                    </div>
                    <div class="crud-buttons">
                        <a href="/Admin/KelolaDataProduk/tambah" id="add">➕ Tambah Produk (Create)</a>
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi (CRUD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PROD-001</td>
                            <td>Makanan Anjing Premium</td>
                            <td>Makanan Hewan</td>
                            <td>Rp 150.000</td>
                            <td>50</td>
                            <td>
                                <a href="/Admin/KelolaDataProduk/edit?id=PROD-001" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaDataProduk/hapus?id=PROD-001" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>PROD-002</td>
                            <td>Shampo Kucing Anti Kutu</td>
                            <td>Perawatan</td>
                            <td>Rp 75.000</td>
                            <td>30</td>
                            <td>
                                <a href="/Admin/KelolaDataProduk/edit?id=PROD-002" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaDataProduk/hapus?id=PROD-002" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>PROD-003</td>
                            <td>Mainan Bola Karet</td>
                            <td>Aksesoris</td>
                            <td>Rp 25.000</td>
                            <td>100</td>
                            <td>
                                <a href="/Admin/KelolaDataProduk/edit?id=PROD-003" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaDataProduk/hapus?id=PROD-003" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>