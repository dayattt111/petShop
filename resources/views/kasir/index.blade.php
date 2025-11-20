<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir Utama</title>
    <style>
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
        
        .content { padding: 20px; display: grid; grid-template-columns: 2fr 1fr; gap: 20px; }
        .left-area { display: flex; flex-direction: column; gap: 20px; }
        .card { border: 1px solid black; padding: 20px; background-color: white; border-radius: 5px; }
        .card h4 { margin-top: 0; }
        
        /* Warna untuk kartu */
        #transaksi-info { height: 200px; background-color: #ffcccb; } /* Light Red */
        #produk-info { height: 300px; background-color: #add8e6; } /* Light Blue */
        #layanan-info { height: 520px; background-color: #90ee90; } /* Light Green */
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            {{-- <h3>Dashboard Kasir</h3> --}}
            <a style="font-size: 20px" href="/Kasir" class="active">Dashboard Kasir</a>
            <a href="/Kasir/KelolaTransaksiPenjualan">Kelola transaksi penjualan</a>
            <a href="/Kasir/KelolaTransaksiPelayanan">Kelola transaksi layanan perawatan</a>
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
                <div class="left-area">
                    <div id="transaksi-info" class="card">
                        <h4>informasi transaksi</h4>
                        <p>Total Penjualan: Rp 1.500.000</p>
                        <p>Total Layanan: Rp 500.000</p>
                    </div>
                    <div id="produk-info" class="card">
                        <h4>Produk</h4>
                        <p>Daftar produk terlaris:</p>
                        <ul>
                            <li>Makanan Kucing Royal</li>
                            <li>Shampo Anti Kutu</li>
                        </ul>
                    </div>
                </div>
                
                <div id="layanan-info" class="card">
                    <h4>Layanan</h4>
                    <p>Layanan paling diminati:</p>
                    <ul>
                        <li>Grooming Lengkap</li>
                        <li>Vaksinasi Tahunan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>