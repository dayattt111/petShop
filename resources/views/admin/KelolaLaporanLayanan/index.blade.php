<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Laporan Data Layanan Perawatan</title>
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

        /* Report Cards */
        .report-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Disini hanya 1 kartu di wireframe, saya buat 2 untuk proporsi */
            gap: 20px;
            margin-bottom: 30px;
        }
        .report-card {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            text-align: center;
            font-size: 1.1em;
            color: #333;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .report-card h4 {
            margin: 0 0 10px 0;
            color: #2c3e50;
        }
        .report-card p {
            font-size: 1.6em;
            font-weight: bold;
            margin: 0;
            color: #1abc9c;
        }

        /* Search Bar (sesuai wireframe) */
        .search-bar { 
            margin-bottom: 15px; 
            display: flex; 
            align-items: center;
            justify-content: space-between;
        }
        .search-bar label {
            font-weight: bold;
            margin-right: 10px;
        }
        .search-bar input {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
        }

        /* CRUD Buttons (untuk layanan, jika ada) */
        .crud-buttons { text-align: right; }
        .crud-buttons a { text-decoration: none; padding: 8px 15px; margin-right: 10px; border-radius: 4px; color: white; font-weight: bold; }
        #add { background-color: #28a745; }
        
        /* Tabel Styling */
        .data-table { width: 100%; border-collapse: collapse; border: 1px solid black; background-color: white; }
        .data-table th, .data-table td { border-bottom: 1px solid black; padding: 10px; text-align: left; }
        .data-table th { background-color: #d1f7ee; border-bottom: 2px solid #1abc9c; color: #2c3e50; } 
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
            <a href="/Admin/KelolaDataProduk">Kelola Data Produk</a>
            <a href="/Admin/KelolaLaporanPenjualan">Kelola Laporan Penjualan</a>
            <a href="/Admin/KelolaLaporanDataLayananPerawatan" class="active">Kelola Laporan Data Layanan Perawatan</a>
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
                <h2 style="margin-top: 0;">Kelola Laporan Data Layanan Perawatan</h2>
                
                <div class="report-cards">
                    <div class="report-card" style="grid-column: span 2;"> <h4>Total Layanan Hari Ini</h4>
                        <p>12 Layanan</p>
                    </div>
                </div>

                <div class="search-bar">
                    <div>
                        <label for="search-layanan">Layanan:</label>
                        <input type="text" id="search-layanan" placeholder="Cari jenis layanan...">
                    </div>
                    <div class="crud-buttons">
                         <a href="/Admin/KelolaLaporanDataLayananPerawatan/tambah" id="add">➕ Tambah Layanan Baru</a>
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID Layanan</th>
                            <th>Nama Layanan</th>
                            <th>Harga</th>
                            <th>Dokter Penanggung Jawab</th>
                            <th>Aksi (CRUD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>LYN-001</td>
                            <td>Grooming Kucing</td>
                            <td>Rp 120.000</td>
                            <td>Dr. Budi</td>
                            <td>
                                <a href="/Admin/KelolaLaporanDataLayananPerawatan/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaLaporanDataLayananPerawatan/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>LYN-002</td>
                            <td>Vaksinasi Anjing</td>
                            <td>Rp 150.000</td>
                            <td>Dr. Citra</td>
                            <td>
                                <a href="/Admin/KelolaLaporanDataLayananPerawatan/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaLaporanDataLayananPerawatan/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>LYN-003</td>
                            <td>Cek Kesehatan Rutin</td>
                            <td>Rp 80.000</td>
                            <td>Dr. Budi</td>
                            <td>
                                <a href="/Admin/KelolaLaporanDataLayananPerawatan/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaLaporanDataLayananPerawatan/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>