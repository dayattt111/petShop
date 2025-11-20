<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dokter</title>
    <style>
        /* CSS Umum */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        
        /* Sidebar Dokter */
        .sidebar { width: 200px; background-color: #004d40; color: white; padding: 20px; box-sizing: border-box; } /* Warna Hijau Tua */
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #00695c; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #00796b; }
        .sidebar a.active { background-color: #388e3c; } /* Hijau yang berbeda */

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; }
        
        /* Card Styling (Sesuai Wireframe) */
        .top-info { 
            border: 1px solid #ccc; 
            padding: 20px; 
            margin-bottom: 20px; 
            background-color: white;
            min-height: 80px;
        }
        .summary-cards { 
            display: flex; 
            gap: 20px; 
            margin-bottom: 20px; 
        }
        .card { 
            border: 1px solid #004d40; 
            padding: 20px; 
            background-color: #e0f2f1; /* Hijau muda */
            flex: 1; 
            border-radius: 5px; 
            min-height: 100px; 
            text-align: center;
        }
        .card h4 { margin-top: 0; color: #004d40; }
        .card p { font-size: 1.5em; font-weight: bold; margin: 5px 0 0 0; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Dokter" class="active">Dashboard Dokter</a>
            <a href="/Dokter/KelolaJadwal">Kelola Jadwal</a>
            <a href="/Dokter/InputHasilPemeriksaan">Input Hasil Pemeriksaan</a>
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
                <h2 style="margin-top: 0;">Selamat Datang, Dokter!</h2>

                <div class="top-info">
                    <h3>Ringkasan Tugas Anda Hari Ini</h3>
                    <p>Lihat jadwal, input hasil pemeriksaan, dan kelola semua data perawatan hewan.</p>
                </div>

                <div class="summary-cards">
                    <div class="card">
                        <h4>Pasien Baru</h4>
                        <p>3</p>
                    </div>
                    <div class="card">
                        <h4>Hari Ini</h4>
                        <p>5 Jadwal</p>
                    </div>
                    <div class="card">
                        <h4>Total Pemeriksaan</h4>
                        <p>157</p>
                    </div>
                </div>

                <div style="border: 1px solid #ccc; padding: 20px; background-color: white; border-radius: 5px;">
                    <h3>Jadwal Mendatang (Cepat)</h3>
                    <p>Pukul 09:00 - Pasien: Budi (Grooming)</p>
                    <p>Pukul 10:30 - Pasien: Citra (Vaksin)</p>
                    <a href="/Dokter/KelolaJadwal">Lihat Semua Jadwal &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>