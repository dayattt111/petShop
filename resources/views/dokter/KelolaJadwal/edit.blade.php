<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Dokter</title>
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

        /* Form Styling */
        .form-area { 
            border: 1px solid #ffc107; /* Warna kuning edit */
            padding: 30px; 
            background-color: white; 
            border-radius: 5px; 
            max-width: 600px; 
            margin: 20px auto; 
        }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input[type="text"], 
        .form-group input[type="date"],
        .form-group input[type="time"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-actions { margin-top: 20px; text-align: right; }
        .form-actions button { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-submit { background-color: #ffc107; color: black; margin-right: 10px; }
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
                <h2 style="margin-top: 0; text-align: center;">✏️ Edit Jadwal Pemeriksaan/Perawatan</h2>
                
                <div class="form-area">
                    <form action="/Dokter/KelolaJadwal" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="_token" value="SIMULASI_CSRF_TOKEN"> 
                        <input type="hidden" name="id_jadwal" value="1">
                         --}}
                        <div class="form-group">
                            <label for="nama_user">Nama Klien / User</label>
                            <input type="text" id="nama_user" value="Andi" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Jadwal</label>
                            <input type="date" id="tanggal" value="2025-11-20" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu Jadwal</label>
                            <input type="time" id="waktu" value="09:00" required>
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan / Jenis Layanan</label>
                            <textarea id="keluhan" rows="3" required>Grooming</textarea>
                        </div>
                        <div class="form-group">
                            <label for="dokter">Dokter Penanggung Jawab</label>
                            <select id="dokter" required>
                                <option selected>Dokter Budi</option>
                                <option>Dokter Citra</option>
                            </select>
                        </div>
                        
                        <div class="form-actions">
                            <a href="/Dokter/KelolaJadwal" class="btn-cancel">Batal</a>
                            <button type="submit" class="btn-submit">Perbarui Jadwal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>