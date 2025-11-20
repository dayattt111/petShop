<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal Dokter (Admin)</title>
    <style>
        /* CSS Umum */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        
        /* Sidebar Admin (Biru Tua/Abu-abu) */
        .sidebar { width: 250px; background-color: #2c3e50; color: white; padding: 20px; box-sizing: border-box; } 
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #34495e; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #49637f; }
        .sidebar a.active { background-color: #1abc9c; } /* Warna aktif */

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; }

        /* Search Bar */
        .search-bar { 
            margin-bottom: 15px; 
            display: flex; 
            align-items: center;
            justify-content: space-between;
        }
        .search-bar input, .search-bar select {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
            margin-right: 10px;
        }
        .search-bar label {
            font-weight: bold;
            margin-right: 10px;
        }
        
        /* Tabel Styling */
        .data-table { width: 100%; border-collapse: collapse; border: 1px solid black; background-color: white; }
        .data-table th, .data-table td { border-bottom: 1px solid black; padding: 10px; text-align: left; }
        .data-table th { background-color: #d1f7ee; border-bottom: 2px solid #1abc9c; color: #2c3e50; } 
        .data-table tr:hover { background-color: #e0f8f4; } 
        .data-table td:last-child { text-align: center; } 
        
        /* Aksi Buttons di dalam Tabel dan CRUD Buttons */
        .action-btn { padding: 5px 10px; margin: 0 3px; border-radius: 4px; text-decoration: none; color: white; font-size: 12px; display: inline-block; }
        .action-btn.edit { background-color: #ffc107; color: black; } 
        .action-btn.delete { background-color: #dc3545; } 
        .crud-buttons a { text-decoration: none; padding: 8px 15px; margin-right: 10px; border-radius: 4px; color: white; font-weight: bold; display: inline-block;}
        #add { background-color: #28a745; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Admin">Dashboard Admin</a>
            <a href="/Admin/KelolaDataProduk">Kelola Data Produk</a>
            <a href="/Admin/KelolaLaporanPenjualan">Kelola Laporan Penjualan</a>
            <a href="/Admin/KelolaLaporanDataLayananPerawatan">Kelola Laporan Data Layanan Perawatan</a>
            <a href="/Admin/KelolaJadwalDokter" class="active">Kelola Jadwal Dokter</a>
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
                <h2 style="margin-top: 0;">Kelola Jadwal Dokter</h2>
                
                <div class="search-bar">
                    <div>
                        <label for="filter-dokter">Filter Dokter:</label>
                        <select id="filter-dokter">
                            <option>Semua Dokter</option>
                            <option>Dr. Budi</option>
                            <option>Dr. Citra</option>
                        </select>
                        <label for="filter-tanggal">Filter Tanggal:</label>
                        <input type="date" id="filter-tanggal" value="2025-11-20">
                    </div>
                    <div class="crud-buttons">
                        <a href="/Admin/KelolaJadwalDokter/tambah" id="add">➕ Tambah Jadwal (Create)</a>
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal & Waktu</th>
                            <th>Dokter</th>
                            <th>Klien</th>
                            <th>Layanan/Keluhan</th>
                            <th>Status</th>
                            <th>Aksi (CRUD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>20/11/2025 (09:00)</td>
                            <td>Dr. Budi</td>
                            <td>Andi</td>
                            <td>Grooming</td>
                            <td style="color: green; font-weight: bold;">Selesai</td>
                            <td>
                                <a href="/Admin/KelolaJadwalDokter/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaJadwalDokter/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>20/11/2025 (10:30)</td>
                            <td>Dr. Citra</td>
                            <td>Budi</td>
                            <td>Vaksinasi Rutin</td>
                            <td style="color: orange; font-weight: bold;">Proses</td>
                            <td>
                                <a href="/Admin/KelolaJadwalDokter/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaJadwalDokter/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>21/11/2025 (13:00)</td>
                            <td>Dr. Budi</td>
                            <td>Citra</td>
                            <td>Kaki pincang</td>
                            <td style="color: blue; font-weight: bold;">Terjadwal</td>
                            <td>
                                <a href="/Admin/KelolaJadwalDokter/edit" class="action-btn edit">Edit</a>
                                <a href="/Admin/KelolaJadwalDokter/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>