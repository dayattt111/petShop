<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Transaksi Penjualan</title>
    <style>
        /* CSS yang sudah ada */
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
        
        /* Form Styling */
        .form-area { border: 1px solid black; padding: 30px; background-color: white; border-radius: 5px; max-width: 600px; margin: 20px auto; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input[type="text"], .form-group input[type="number"], .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-actions { margin-top: 20px; text-align: right; }
        .form-actions button { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-submit { background-color: #28a745; color: white; margin-right: 10px; }
        .btn-cancel { background-color: #6c757d; color: white; text-decoration: none; padding: 10px 20px; }

        .page-description { margin-bottom: 20px; padding: 10px; background-color: #e3f2fd; border: 1px solid #bbdefb; border-radius: 4px; }
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
                <h2 style="text-align: center;">Tambah Data Transaksi Penjualan</h2>
                
                <div class="page-description">
                    <p><strong>Deskripsi:</strong> Gunakan formulir ini untuk membuat entri transaksi penjualan baru. Pastikan semua data produk dan total pembayaran sudah benar sebelum disimpan.</p>
                </div>

                <div class="form-area">
                    <form action="/Kasir/KelolaTransaksiPenjualan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_transaksi">ID Transaksi (Otomatis)</label>
                            <input type="text" id="id_transaksi" value="TRX-004 (Otomatis)" disabled>
                        </div>
                        <div class="form-group">
                            <label for="produk">Pilih Produk</label>
                            <select id="produk">
                                <option>Makanan Kucing</option>
                                <option>Mainan Anjing</option>
                                <option>Vitamin</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="qty">Kuantitas</label>
                            <input type="number" id="qty" value="1" min="1">
                        </div>
                        <div class="form-group">
                            <label for="total">Total Belanja</label>
                            <input type="text" id="total" value="Rp 0,00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="kasir">Nama Kasir</label>
                            <input type="text" id="kasir" value="Ria" disabled>
                        </div>
                        
                        <div class="form-actions">
                            <a href="/Kasir/KelolaTransaksiPenjualan" class="btn-cancel">Batal</a>
                            <button type="submit" class="btn-submit">Simpan Transaksi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>