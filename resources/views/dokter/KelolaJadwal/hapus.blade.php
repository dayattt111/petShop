<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Jadwal Dokter</title>
    <style>
        /* Gaya CSS Umum dari blade sebelumnya */
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

        /* Delete Confirmation Styling */
        .confirmation-area { 
            border: 1px solid #dc3545; 
            padding: 30px; 
            background-color: #f8d7da; 
            border-radius: 5px; 
            max-width: 500px; 
            margin: 50px auto; 
            text-align: center; 
        }
        .confirmation-area h3 { color: #dc3545; margin-top: 0; }
        .confirmation-area p { font-size: 1.1em; margin-bottom: 30px; }
        
        .delete-actions button { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-delete-confirm { background-color: #dc3545; color: white; margin-right: 15px; }
        .btn-cancel { background-color: #6c757d; color: white; text-decoration: none; padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Dokter">Dashboard Dokter</a>
            <a href="/Dokter/KelolaJadwal" class="active">Kelola Jadwal</a>
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
                <h2 style="margin-top: 0; text-align: center;">🗑️ Hapus Jadwal Pemeriksaan/Perawatan</h2>
                
                <div class="confirmation-area">
                    <h3>PERINGATAN! Batalkan Jadwal</h3>
                    <p>Anda akan menghapus jadwal **Andi (Grooming)** pada tanggal **20/11/2025 pukul 09:00**. Aksi ini tidak dapat dibatalkan!</p>
                    
                    <form action="/Dokter/KelolaJadwal" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="_token" value="SIMULASI_CSRF_TOKEN"> 
                        <input type="hidden" name="id_jadwal" value="1">
                         --}}
                        <div class="delete-actions">
                            <button type="submit" class="btn-delete-confirm">Ya, Hapus Jadwal</button>
                            <a href="/Dokter/KelolaJadwal" class="btn-cancel">Batal / Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>