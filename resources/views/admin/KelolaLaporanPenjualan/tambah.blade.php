<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi Penjualan</title>
    <style>
        /* CSS Umum dan Sidebar Admin */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background-color: #2c3e50; color: white; padding: 20px; box-sizing: border-box; } 
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #34495e; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #49637f; }
        .sidebar a.active { background-color: #1abc9c; } 
        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        .content { padding: 20px; }

        /* Form Styling */
        .form-area { 
            border: 1px solid #28a745; 
            padding: 30px; 
            background-color: white; 
            border-radius: 5px; 
            max-width: 800px; 
            margin: 20px auto; 
        }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input:not([type="checkbox"]), 
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        /* Tabel Detail Transaksi */
        .detail-table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .detail-table th, .detail-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .detail-table th { background-color: #f2f2f2; }

        .form-actions { margin-top: 20px; text-align: right; }
        .form-actions button, .form-actions a { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-weight: bold; }
        .btn-submit { background-color: #28a745; color: white; margin-right: 10px; }
        .btn-cancel { background-color: #6c757d; color: white; }
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
                <h2 style="margin-top: 0; text-align: center;">➕ Tambah Transaksi Penjualan Manual</h2>
                
                <div class="form-area">
                    <form action="/Admin/KelolaLaporanPenjualan" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="_token" value="SIMULASI_CSRF_TOKEN">  --}}
                        
                        <div style="display: flex; gap: 20px;">
                            <div style="flex: 1;">
                                <div class="form-group">
                                    <label for="id_transaksi">ID Transaksi (Otomatis)</label>
                                    <input type="text" id="id_transaksi" value="TRX-004 (SIMULASI)" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Transaksi</label>
                                    <input type="date" id="tanggal" >
                                </div>
                                <div class="form-group">
                                    <label for="kasir">Nama Kasir/Admin</label>
                                    <input type="text" id="kasir" value="Admin Utama" >
                                </div>
                                <div class="form-group">
                                    <label for="metode_bayar">Metode Pembayaran</label>
                                    <select id="metode_bayar" >
                                        <option value="">Pilih Metode</option>
                                        <option>Tunai</option>
                                        <option>QRIS</option>
                                        <option>Transfer Bank</option>
                                    </select>
                                </div>
                            </div>
                            <div style="flex: 1;">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan Tambahan</label>
                                    <textarea id="keterangan" rows="6" placeholder="Misalnya: Transaksi barang toko saja, tidak termasuk jasa perawatan."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="total_harga">Total Harga Transaksi</label>
                                    <input type="number" id="total_harga" placeholder="Masukkan total (Rp)" >
                                </div>
                            </div>
                        </div>

                        <h3>Detail Item Transaksi (Simulasi Multi-Item Input)</h3>
                        <table class="detail-table">
                            <thead>
                                <tr>
                                    <th>Item/Produk</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan (Rp)</th>
                                    <th>Subtotal (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" placeholder="Nama Produk/Layanan"></td>
                                    <td><input type="number" value="1" min="1" style="width: 60px;"></td>
                                    <td><input type="number" placeholder="100000"></td>
                                    <td><input type="text" disabled value="100000 (Otomatis)"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" placeholder="Nama Produk/Layanan"></td>
                                    <td><input type="number" value="1" min="1" style="width: 60px;"></td>
                                    <td><input type="number" placeholder="50000"></td>
                                    <td><input type="text" disabled value="50000 (Otomatis)"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" style="margin-top: 10px; padding: 5px 10px; border-radius: 4px; border: 1px solid #1abc9c;">+ Tambah Item</button>

                        <div class="form-actions">
                            <a href="/Admin/KelolaLaporanPenjualan" class="btn-cancel">Batal</a>
                            <button type="submit" class="btn-submit">Simpan Transaksi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>