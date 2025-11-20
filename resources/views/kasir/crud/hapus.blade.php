<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Transaksi Penjualan</title>
    <style>
        /* CSS yang sudah ada dari file Tambah Data */
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
        
        /* Delete Confirmation Styling */
        .confirmation-area { border: 1px solid #dc3545; padding: 30px; background-color: #f8d7da; border-radius: 5px; max-width: 500px; margin: 50px auto; text-align: center; }
        .confirmation-area h3 { color: #dc3545; margin-top: 0; }
        .confirmation-area p { font-size: 1.1em; margin-bottom: 30px; }
        
        .delete-actions button { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-delete-confirm { background-color: #dc3545; color: white; margin-right: 15px; }
        .btn-cancel { background-color: #6c757d; color: white; text-decoration: none; padding: 10px 20px; }

        .page-description { margin-bottom: 20px; padding: 10px; background-color: #faebd7; border: 1px solid #f0ad4e; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Kasir">Dashboard Kasir</a>
            <a href="/Kasir/KelolaTransaksiPenjualan" class="active">Kelola transaksi penjualan</a>
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
                <h2 style="text-align: center;">Hapus Data Transaksi Penjualan</h2>
                
                <div class="page-description">
                    <p><strong>Deskripsi:</strong> Halaman ini digunakan untuk mengkonfirmasi penghapusan data transaksi secara permanen.</p>
                </div>

                <div class="confirmation-area">
                    <h3>PERINGATAN! Hapus Data Transaksi</h3>
                    <p>Apakah Anda yakin ingin menghapus data transaksi **ID: TRX-001** (Total Belanja: Rp 150.000) secara permanen?</p>
                    
                    <form action="/Kasir/KelolaTransaksiPenjualan" method="POST">
                        @csrf
                        <div class="delete-actions">
                            <button type="submit" class="btn-delete-confirm">Ya, Hapus Sekarang</button>
                            <a href="/Kasir/KelolaTransaksiPenjualan" class="btn-cancel">Batal / Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>