<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Struk Transaksi</title>
    <style>
        /* Gaya CSS dari file sebelumnya */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 200px; background-color: #333; color: white; padding: 20px; box-sizing: border-box; }
        .sidebar a { display: block; padding: 10px; margin-bottom: 5px; text-decoration: none; color: white; background-color: #444; border-radius: 4px; transition: background-color 0.3s; }
        .sidebar a:hover { background-color: #555; }
        .sidebar a.active { background-color: #007bff; }

        .main-container { flex-grow: 1; display: flex; flex-direction: column; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 1px solid black; background-color: white; }
        .header .profile a { text-decoration: none; color: white; background-color: #dc3545; padding: 5px 10px; border-radius: 4px; margin-left: 10px; }
        .header .profile { font-weight: bold; }
        
        .content { padding: 20px; text-align: center; }
        
        /* Gaya Struk */
        .struk-container {
            width: 350px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border: 1px dashed #333;
            text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .struk-header, .struk-footer {
            text-align: center;
            margin-bottom: 10px;
            border-bottom: 1px dashed #aaa;
            padding-bottom: 5px;
        }
        .struk-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            font-size: 0.95em;
        }
        .struk-item .item-total, .struk-summary strong {
            font-weight: bold;
        }
        .struk-summary {
            border-top: 1px dashed #aaa;
            padding-top: 10px;
            margin-top: 10px;
        }
        .struk-thankyou {
            margin-top: 15px;
            text-align: center;
            font-style: italic;
            font-size: 0.9em;
        }

        /* Tombol Cetak */
        .print-button-area {
            margin-top: 20px;
            text-align: center;
        }
        .btn-print {
            padding: 10px 25px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.1em;
        }
        .btn-print:hover {
            background-color: #0056b3;
        }

        /* Print Media Query: Menyembunyikan elemen non-struk saat dicetak */
        @media print {
            .wrapper { display: block; }
            .sidebar, .header, .print-button-area, .content h2 { 
                display: none !important; 
            }
            .content { padding: 0; }
            .struk-container {
                width: 100%;
                border: none;
                box-shadow: none;
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a style="font-size: 20px" href="/Kasir">Dashboard Kasir</a>
            <a href="/Kasir/KelolaTransaksiPenjualan">Kelola transaksi penjualan</a>
            <a href="/Kasir/KelolaTransaksiPelayanan">Kelola transaksi layanan perawatan</a>
            <a href="/Kasir/CetakStruk" class="active">Cetak struk</a>
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
                <h2>Pratinjau Struk & Cetak</h2>
                
                <div class="struk-container" id="print-area">
                    <div class="struk-header">
                        <h3>PET CARE CENTER</h3>
                        <p style="margin: 5px 0; font-size: 0.8em;">Jl. Kesehatan Hewan No. 123, Kota Makmur</p>
                        <p style="margin: 0; font-size: 0.8em;">Telp: (021) 123456</p>
                    </div>
                    
                    <p style="margin: 15px 0 5px 0; font-size: 0.9em;">
                        TRX ID: **TRX-001** / **LYN-001** <br>
                        Tanggal: 20/11/2025 09:30 WIB <br>
                        Kasir: Ria
                    </p>
                    <div style="border-top: 1px dashed #aaa; margin: 5px 0;"></div>

                    <h4>ITEM PENJUALAN</h4>
                    <div class="struk-item">
                        <span class="item-desc">Mainan Anjing (3 @ 15.000)</span>
                        <span class="item-total">45.000</span>
                    </div>
                    <div class="struk-item">
                        <span class="item-desc">Makanan Kucing (1 @ 150.000)</span>
                        <span class="item-total">150.000</span>
                    </div>
                    <div style="border-top: 1px dashed #aaa; margin: 10px 0;"></div>

                    <h4>LAYANAN PERAWATAN</h4>
                    <div class="struk-item">
                        <span class="item-desc">Grooming Kucing (Klien: Andi)</span>
                        <span class="item-total">120.000</span>
                    </div>
                    <div style="border-top: 1px dashed #aaa; margin: 10px 0;"></div>

                    <div class="struk-summary">
                        <div class="struk-item">
                            <span>Subtotal:</span>
                            <span>Rp 315.000</span>
                        </div>
                        <div class="struk-item">
                            <span>Diskon:</span>
                            <span>Rp 0</span>
                        </div>
                        <div class="struk-item">
                            <strong>TOTAL HARGA:</strong>
                            <strong>Rp 315.000</strong>
                        </div>
                        <div class="struk-item" style="margin-top: 10px;">
                            <span>Bayar:</span>
                            <span>Rp 350.000</span>
                        </div>
                        <div class="struk-item">
                            <span>Kembalian:</span>
                            <span>Rp 35.000</span>
                        </div>
                    </div>

                    <div class="struk-thankyou">
                        Terima kasih telah menggunakan jasa kami!
                    </div>
                </div>

                <div class="print-button-area">
                    <form id="printForm" action="/Kasir/CetakStruk" method="POST">
                        @csrf
                        <button type="submit" class="btn-print">
                            <i class="fas fa-print"></i> Cetak Struk Ini
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>