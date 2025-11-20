<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Laporan Penjualan</title>
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
            grid-template-columns: repeat(3, 1fr); /* 3 kolom */
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

        /* Search Bar & CRUD Button */
        .header-controls { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            margin-bottom: 15px;
        }
        .search-bar { 
            display: flex; 
            align-items: center;
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
        .crud-buttons a { text-decoration: none; padding: 8px 15px; margin-right: 10px; border-radius: 4px; color: white; font-weight: bold; }
        #add { background-color: #28a745; } /* Warna Tambah */

        /* Tabel Styling */
        .data-table { width: 100%; border-collapse: collapse; border: 1px solid black; background-color: white; }
        .data-table th, .data-table td { border-bottom: 1px solid black; padding: 10px; text-align: left; }
        .data-table th { background-color: #d1f7ee; border-bottom: 2px solid #1abc9c; color: #2c3e50; } 
        .data-table tr:hover { background-color: #e0f8f4; } 
        .data-table td:last-child { text-align: center; } 
        
        /* Aksi Buttons di dalam Tabel */
        .action-btn { padding: 5px 10px; margin: 0 3px; border-radius: 4px; text-decoration: none; color: white; font-size: 12px; display: inline-block; }
        .action-btn.detail { background-color: #007bff; }
        .action-btn.edit { background-color: #ffc107; color: black; } 
        .action-btn.delete { background-color: #dc3545; } 
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Admin">Dashboard Admin</a>
            <a href="/Admin/KelolaDataProduk">Kelola Data Produk</a>
            <a href="/Admin/KelolaLaporanPenjualan" class="active">Kelola Laporan Penjualan</a>
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
                <h2 style="margin-top: 0;">Kelola Laporan Penjualan</h2>
                
                <div class="report-cards">
                    <div class="report-card">
                        <h4>Data Per Bulan (November)</h4>
                        <p>Rp 15.200.000</p>
                    </div>
                    <div class="report-card">
                        <h4>Total Saldo</h4>
                        <p>Rp 78.500.000</p>
                    </div>
                    <div class="report-card">
                        <h4>Data Per Tahun (2025)</h4>
                        <p>Rp 95.000.000</p>
                    </div>
                </div>

                <div class="header-controls">
                    <div class="search-bar">
                        <label for="search-penjualan">Cari ID Transaksi:</label>
                        <input type="text" id="search-penjualan" placeholder="Cari ID Transaksi...">
                    </div>
                    <div class="crud-buttons">
                        <a href="/Admin/KelolaLaporanPenjualan/tambah" id="add">➕ Tambah Transaksi (Create)</a>
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Tanggal</th>
                            <th>Total Harga</th>
                            <th>Metode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TRX-001</td>
                            <td>20/11/2025</td>
                            <td>Rp 315.000</td>
                            <td>Tunai</td>
                            <td>
                                {{-- <a href="/Admin/KelolaLaporanPenjualan/detail" class="action-btn detail">Detail</a> --}}
                                <a href="/Admin/KelolaLaporanPenjualan/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaLaporanPenjualan/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>TRX-002</td>
                            <td>19/11/2025</td>
                            <td>Rp 500.000</td>
                            <td>QRIS</td>
                            <td>
                                {{-- <a href="/Admin/KelolaLaporanPenjualan/detail" class="action-btn detail">Detail</a> --}}
                                <a href="/Admin/KelolaLaporanPenjualan/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaLaporanPenjualan/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>TRX-003</td>
                            <td>18/11/2025</td>
                            <td>Rp 120.000</td>
                            <td>Tunai</td>
                            <td>
                                {{-- <a href="/Admin/KelolaLaporanPenjualan/detail" class="action-btn detail">Detail</a> --}}
                                <a href="/Admin/KelolaLaporanPenjualan/edit?id=TRX-003" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaLaporanPenjualan/hapus?id=TRX-003" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>