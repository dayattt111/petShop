<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Dokter</title>
    <style>
        /* CSS Umum dan Sidebar Admin (Dari Template Anda) */
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
            max-width: 700px; 
            margin: 20px auto; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #2c3e50; }
        .form-group input:not([type="checkbox"]), 
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            border-color: #1abc9c;
            outline: none;
        }

        .form-actions { margin-top: 30px; text-align: right; }
        .form-actions button, .form-actions a { 
            padding: 10px 20px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            text-decoration: none; 
            font-weight: bold;
            transition: opacity 0.3s;
        }
        .btn-submit { background-color: #28a745; color: white; margin-right: 10px; }
        .btn-cancel { background-color: #6c757d; color: white; }
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
                <h2 style="margin-top: 0; text-align: center;">➕ Tambah Jadwal Baru (Janji Temu/Kerja)</h2>
                
                <div class="form-area">
                    <form action="/Admin/KelolaJadwalDokter" method="POST">
                        {{-- <input type="hidden" name="_token" value="SIMULASI_CSRF_TOKEN">  --}}
                        @csrf
                        <div class="form-group">
                            <label for="dokter">Dokter Penanggung Jawab</label>
                            <select id="dokter">
                                <option value="">Pilih Dokter</option>
                                <option>Dr. Budi</option>
                                <option>Dr. Citra</option>
                                <option>Dr. Dewi</option>
                            </select>
                        </div>

                        <div style="display: flex; gap: 20px;">
                            <div class="form-group" style="flex: 1;">
                                <label for="tanggal">Tanggal Jadwal</label>
                                <input type="date" id="tanggal">
                            </div>
                            <div class="form-group" style="flex: 1;">
                                <label for="waktu">Waktu/Jam Mulai</label>
                                <input type="time" id="waktu">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="klien">Nama Klien/Pasien (Jika Janji Temu)</label>
                            <input type="text" id="klien" placeholder="Contoh: Budi Susanto atau Janji Temu Reguler">
                        </div>

                        <div class="form-group">
                            <label for="layanan">Layanan yang Dipesan/Keluhan</label>
                            <input type="text" id="layanan" placeholder="Contoh: Vaksinasi Rutin, Kucing sakit">
                        </div>
                        
                        <div class="form-group">
                            <label for="status">Status Jadwal</label>
                            <select id="status">
                                <option>Terjadwal</option>
                                <option>Proses</option>
                                <option>Selesai</option>
                                <option>Batal</option>
                            </select>
                        </div>
                        
                        <div class="form-actions">
                            <a href="/Admin/KelolaJadwalDokter" class="btn-cancel">Batal</a>
                            <button type="submit" class="btn-submit">Simpan Jadwal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>