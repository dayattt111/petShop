<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal Dokter</title>
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

        /* CRUD Buttons */
        .crud-buttons { margin-bottom: 15px; }
        .crud-buttons a { text-decoration: none; padding: 8px 15px; margin-right: 10px; border-radius: 4px; color: white; font-weight: bold; }
        #add { background-color: #28a745; } /* Create */
        
        /* Tabel Styling */
        .data-table { width: 100%; border-collapse: collapse; border: 1px solid black; background-color: white; }
        .data-table th, .data-table td { border-bottom: 1px solid black; padding: 10px; text-align: left; }
        .data-table th { background-color: #c8e6c9; border-bottom: 2px solid #004d40; color: #004d40; } /* Header Hijau Muda */
        .data-table tr:hover { background-color: #e8f5e9; } 
        .data-table td:last-child { text-align: center; } 
        
        /* Aksi Buttons di dalam Tabel */
        .action-btn { padding: 5px 10px; margin: 0 3px; border-radius: 4px; text-decoration: none; color: white; font-size: 12px; }
        .action-btn.edit { background-color: #ffc107; color: black; } 
        .action-btn.delete { background-color: #dc3545; } 
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
                <h2 style="margin-top: 0;">Kelola Jadwal Perawatan/Pemeriksaan</h2>
                
                <div class="crud-buttons">
                    <a href="/Dokter/KelolaJadwal/tambah" id="add">➕ Tambah Jadwal (Create)</a>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama User</th>
                            <th>Tanggal</th>
                            <th>Keluhan / Layanan</th>
                            <th>Aksi (CRUD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andi</td>
                            <td>20/11/2025 (09:00)</td>
                            <td>Grooming</td>
                            <td>
                                <a href="/Dokter/KelolaJadwal/edit" class="action-btn edit">Edit</a>
                                <a href="/Dokter/KelolaJadwal/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Budi</td>
                            <td>20/11/2025 (10:30)</td>
                            <td>Vaksinasi Rutin</td>
                            <td>
                                <a href="/Dokter/KelolaJadwal/edit" class="action-btn edit">Edit</a>
                                <a href="/Dokter/KelolaJadwal/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Citra</td>
                            <td>21/11/2025 (13:00)</td>
                            <td>Kaki pincang</td>
                            <td>
                                <a href="/Dokter/KelolaJadwal/edit" class="action-btn edit">Edit</a>
                                <a href="/Dokter/KelolaJadwal/hapus" class="action-btn delete">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>