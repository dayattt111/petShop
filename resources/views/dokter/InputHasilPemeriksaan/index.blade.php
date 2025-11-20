<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Hasil Perawatan/Pemeriksaan</title>
    <style>
        /* CSS Umum */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        
        /* Sidebar Dokter */
        .sidebar { width: 200px; background-color: #004d40; color: white; padding: 20px; box-sizing: border-box; } 
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #00695c; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #00796b; }
        .sidebar a.active { background-color: #388e3c; } 

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; }

        /* Form Styling (Sesuai Wireframe) */
        .form-area { 
            border: 1px solid #004d40; 
            padding: 30px; 
            background-color: white; 
            border-radius: 5px; 
            max-width: 800px; 
            margin: 20px auto; 
        }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input[type="text"], .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }
        .form-actions { margin-top: 20px; text-align: right; }
        .form-actions button { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-submit { background-color: #28a745; color: white; margin-right: 10px; }
        .btn-cancel { background-color: #6c757d; color: white; text-decoration: none; padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Dokter">Dashboard Dokter</a>
            <a href="/Dokter/KelolaJadwal">Kelola Jadwal</a>
            <a href="/Dokter/InputHasilPemeriksaan" class="active">Input Hasil Pemeriksaan</a>
        </div>

        <div class="main-container">
            <header class="header">
                <div>Dashboard Dokter</div>
                <div class="profile">
                    Profil Dokter
                    <a href="/">Logout</a>
                </div>
            </header>

            <div class="content">
                <h2 style="margin-top: 0; text-align: center;">Input Hasil Perawatan / Pemeriksaan</h2>
                
                <div class="form-area">
                    <form action="/Dokter" method="POST">
                        @csrf
                        <h3>Data Pemeriksaan (Pasien: Budi / ID Jadwal: 2)</h3>
                        <hr>
                        <div class="form-group">
                            <label for="pasien">Nama Pasien / Klien</label>
                            <input type="text" id="pasien" value="Budi" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Pemeriksaan</label>
                            <input type="text" id="tanggal" value="20/11/2025" disabled>
                        </div>
                        
                        <div class="form-group">
                            <label for="diagnosa">Diagnosa / Tindakan</label>
                            <textarea id="diagnosa" rows="3" placeholder="Masukkan diagnosa atau tindakan yang telah dilakukan..." required>Vaksinasi distemper dan parvo virus. Anjing dalam kondisi sehat.</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="obat">Resep Obat / Rekomendasi</label>
                            <textarea id="obat" rows="3" placeholder="Masukkan resep obat, vitamin, atau rekomendasi perawatan lanjutan..." required>Diberi resep suplemen nafsu makan. Jadwal vaksinasi ulang 6 bulan lagi.</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="biaya">Biaya Tambahan (Opsional)</label>
                            <input type="number" id="biaya" value="0" min="0">
                        </div>
                        
                        <div class="form-actions">
                            <a href="/Dokter" class="btn-cancel">Batal</a>
                            <button type="submit" class="btn-submit">Simpan Hasil (Create/Update)</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>