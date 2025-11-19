<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemeriksaan - PetShop</title>
    <style>
        /* Gaya dasar untuk meniru tata letak wireframe */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid black; /* Garis pembatas header */
            background-color: white;
        }

        .main-content {
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .page-title {
            text-align: center;
            font-size: 24px;
            margin: 20px 0 40px 0;
            text-transform: uppercase;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #555;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black; /* Border luar sesuai wireframe */
            background-color: white;
        }

        .data-table th, .data-table td {
            border-bottom: 1px solid black; /* Garis pemisah baris */
            padding: 12px;
            text-align: left;
        }

        .data-table th {
            background-color: #e0e0e0; /* Warna untuk header tabel */
            font-weight: bold;
            border-bottom: 2px solid black; /* Garis yang lebih tebal di bawah header */
        }
        
        /* Memberi warna berbeda pada baris data untuk visualisasi */
        .data-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Styling untuk baris yang bisa diklik (seperti link) */
        .data-table tr:not(:first-child):hover {
            background-color: #fffacd; /* Warna cerah saat di-hover */
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">
            Logo
        </div>
        <nav class="navbar">
            <a style="background-color: teal ; padding:10px; color: white;" href="/User">Home</a>
            <a style="background-color: rgb(0, 19, 128) ; padding:10px; color: white;" href="/User/pesananSaya">Pesanan Saya</a>
            <a style="background-color: rgb(77, 128, 0) ; padding:10px; color: white;" href="/User/dataPemeriksaan">Data Pemeriksaan</a>
        </nav>
        <div class="profile">
            Profil
        </div>
    </header>

    <div class="main-content">
        
        <a href="/User" class="back-button">
            **← Kembali ke Beranda**
        </a>

        <h1 class="page-title">
            Data pemeriksaan
        </h1>

        <table class="data-table">
            
            <thead>
                <tr>
                    <th>**#**</th>
                    <th>**Nama Hewan**</th>
                    <th>**Tanggal Cek**</th>
                    <th>**Keluhan Utama**</th>
                    <th>**Hasil Singkat**</th>
                </tr>
            </thead>
            
            <tbody>
                <tr style="background-color: #E6E6FA;">
                    <td>1</td>
                    <td>Miaw (Kucing)</td>
                    <td>20/11/2025</td>
                    <td>Batuk dan lemas</td>
                    <td>Perlu Vitamin (Ringan)</td>
                </tr>

                <tr style="background-color: #F0FFF0;">
                    <td>2</td>
                    <td>Buddy (Anjing)</td>
                    <td>15/11/2025</td>
                    <td>Ruam kulit parah</td>
                    <td>Alergi Makanan (Sedang)</td>
                </tr>
                
                <tr style="background-color: #FFF0F5;">
                    <td>3</td>
                    <td>Lola (Kelinci)</td>
                    <td>01/11/2025</td>
                    <td>Gigi terlalu panjang</td>
                    <td>Perlu Pemotongan Gigi</td>
                </tr>
                
                <tr style="background-color: #FFFACD;">
                    <td>4</td>
                    <td>Kenari (Burung)</td>
                    <td>25/10/2025</td>
                    <td>Tidak mau makan</td>
                    <td>Infeksi Ringan</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>