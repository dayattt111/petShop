<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Struk</title>
    <style>
        /* Gaya CSS dari file sebelumnya diulang agar setiap blade mandiri */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 200px; background-color: #333; color: white; padding: 20px; box-sizing: border-box; }
        .sidebar h3 { margin-top: 0; margin-bottom: 20px; color: #f0f0f0; }
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #444; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #555; }
        .sidebar a.active { background-color: #007bff; }

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; }
        .top-card { margin-bottom: 20px; }
        .card { border: 1px solid black; padding: 20px; background-color: white; border-radius: 5px; height: 100px; }
        .card h4 { margin-top: 0; }
        
        /* Tabel & CRUD Buttons */
        .action-buttons { margin-bottom: 15px; }
        .action-buttons a { text-decoration: none; padding: 8px 15px; margin-right: 10px; border-radius: 4px; color: white; }
        #print { background-color: #007bff; }
        
        .data-table { width: 100%; border-collapse: collapse; border: 1px solid black; background-color: white; }
        .data-table th, .data-table td { border-bottom: 1px solid black; padding: 10px; text-align: left; }
        .data-table th { background-color: #e0e0e0; border-bottom: 2px solid black; }
        .data-table tr:hover { background-color: #b9f6ca; cursor: pointer; } /* Warna hijau muda */
        .data-table td:last-child { text-align: center; } /* Kolom aksi */
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            {{-- <h3>Dashboard Kasir</h3> --}}
            <a style="font-size: 20px" href="/Kasir" >Dashboard Kasir</a>
            <a href="/Kasir/KelolaTransaksiPenjualan">Kelola transaksi penjualan</a>
            <a href="/Kasir/KelolaTransaksiPelayanan">Kelola transaksi layanan perawatan</a>
            <a href="/Kasir/CetakStruk" class="active">Cetak struk</a>
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
                <div class="top-card">
                    <div class="card" style="background-color: #DCDCDC;">
                        <h4>total transaksi untuk di cetak</h4>
                        <p>Pilih transaksi di bawah untuk mencetak struk.</p>
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="/Kasir/CetakStrukSelect" id="print">Cetak Struk Transaksi Terpilih</a>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Pilih</th>
                            <th>ID Transaksi</th>
                            <th>Jenis Transaksi</th>
                            <th>Total Pembayaran</th>
                            <th>Waktu Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="transaksi_print[]"></td>
                            <td>TRX-004</td>
                            <td>Penjualan</td>
                            <td>Rp 125.000</td>
                            <td>10:30</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="transaksi_print[]"></td>
                            <td>LYN-003</td>
                            <td>Layanan</td>
                            <td>Rp 80.000</td>
                            <td>09:45</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="transaksi_print[]"></td>
                            <td>TRX-005</td>
                            <td>Penjualan</td>
                            <td>Rp 210.000</td>
                            <td>11:00</td>
                        </tr>
                    </tbody>
                </table>
                <div style="height: 10px; width: 100%; border-right: 1px solid black; background-color: #ccc;"></div>
            </div>
        </div>
    </div>
</body>
</html>