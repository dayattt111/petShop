<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Transaksi Pelayanan - CRUD</title>
    <style>
        /* Gaya CSS yang sudah ada */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 200px; background-color: #333; color: white; padding: 20px; box-sizing: border-box; }
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #444; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #555; }
        .sidebar a.active { background-color: #007bff; }

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; }
        .top-cards { display: flex; gap: 20px; margin-bottom: 20px; }
        .card { border: 1px solid black; padding: 20px; background-color: white; flex: 1; border-radius: 5px; height: 100px; }
        .card h4 { margin-top: 0; }
        
        /* CRUD Buttons */
        .crud-buttons { margin-bottom: 15px; }
        .crud-buttons a { text-decoration: none; padding: 8px 15px; margin-right: 10px; border-radius: 4px; color: white; font-weight: bold; }
        #add { background-color: #28a745; } /* Create */
        
        .data-table { width: 100%; border-collapse: collapse; border: 1px solid black; background-color: white; }
        .data-table th, .data-table td { border-bottom: 1px solid black; padding: 10px; text-align: left; }
        .data-table th { background-color: #e0e0e0; border-bottom: 2px solid black; }
        .data-table tr:hover { background-color: #b3e5fc; } 
        .data-table td:last-child { text-align: center; } 
        
        /* Aksi Buttons di dalam Tabel */
        .action-btn { padding: 5px 10px; margin: 0 3px; border-radius: 4px; text-decoration: none; color: white; font-size: 12px; }
        .action-btn.edit { background-color: #ffc107; color: black; } /* Update */
        .action-btn.delete { background-color: #dc3545; } /* Delete */
        .action-btn.detail { background-color: #007bff; } /* Read (Detail) */
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Kasir">Dashboard Kasir</a>
            <a href="/Kasir/KelolaTransaksiPenjualan">Kelola transaksi penjualan</a>
            <a href="/Kasir/KelolaTransaksiPelayanan" class="active">Kelola transaksi layanan perawatan</a>
            <a href="/Kasir/CetakStruk">Cetak struk</a>
        </div>

        <div class="main-container">
            <header class="header">
                <div>Dashboard Kasir</div>
                <div class="profile">
                    Profil Kasir
                    <a href="/">Logout</a>
                </div>
            </header>

            <div class="content">
                <div class="top-cards">
                    <div class="card" style="background-color: #E6E6FA;">
                        <h4>informasi transaksi perawatan</h4>
                        <p>Total layanan hari ini: 12</p>
                    </div>
                    <div class="card" style="background-color: #B2EBF2;">
                        <h4>pengeluaran dan pemasukan</h4>
                        <p>Pemasukan Layanan Hari Ini: Rp 850.000</p>
                    </div>
                </div>

                <div class="crud-buttons">
                    <a href="/Kasir/KelolaTransaksiPelayanan/tambah" id="add">➕ Tambah Layanan (Create)</a>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID Layanan</th>
                            <th>Tanggal</th>
                            <th>Nama Klien</th>
                            <th>Jenis Layanan</th>
                            <th>Aksi (CRUD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>LYN-001</td>
                            <td>20/11/2025</td>
                            <td>Andi</td>
                            <td>Grooming Kucing</td>
                            <td>
                                <a href="/Kasir/KelolaTransaksiPelayanan/edit?id=LYN-001" class="action-btn edit">Edit (Update)</a>
                                <a href="/Kasir/KelolaTransaksiPelayanan/hapus?id=LYN-001" class="action-btn delete">Hapus (Delete)</a>
                            </td>
                        </tr>
                        <tr>
                            <td>LYN-002</td>
                            <td>20/11/2025</td>
                            <td>Budi</td>
                            <td>Vaksin Anjing</td>
                            <td>
                                <a href="/Kasir/KelolaTransaksiPelayanan/edit?id=LYN-002" class="action-btn edit">Edit (Update)</a>
                                <a href="/Kasir/KelolaTransaksiPelayanan/hapus?id=LYN-002" class="action-btn delete">Hapus (Delete)</a>
                            </td>
                        </tr>
                        <tr>
                            <td>LYN-003</td>
                            <td>19/11/2025</td>
                            <td>Citra</td>
                            <td>Cek Kesehatan</td>
                            <td>
                                <a href="/Kasir/KelolaTransaksiPelayanan/edit?id=LYN-003" class="action-btn edit">Edit (Update)</a>
                                <a href="/Kasir/KelolaTransaksiPelayanan/hapus?id=LYN-003" class="action-btn delete">Hapus (Delete)</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="height: 10px; width: 100%; border-right: 1px solid black; background-color: #ccc;"></div>
            </div>
        </div>
    </div>
</body>
</html>