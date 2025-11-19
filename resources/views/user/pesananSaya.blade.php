<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya - PetShop</title>
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
            max-width: 1200px;
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
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 kolom */
            gap: 20px;
            width: 100%;
        }

        .product-card {
            display: block; /* Agar link memenuhi card */
            padding: 15px;
            border: 1px solid black;
            text-decoration: none;
            color: black;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            height: 150px;
        }

        .product-card h4 {
            margin-top: 0;
            margin-bottom: 5px;
        }

        .status {
            font-weight: bold;
            font-size: 14px;
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
            pesanan saya
        </h1>

        <div class="product-grid">
            
            <a href="#" class="product-card" style="background-color: #FFE4B5;">
                <h4>**Produk: Royal Canin Kitten**</h4>
                <p>Qty: 2 | Total: Rp 200.000</p>
                <div class="status" style="color: orange;">
                    Status: Diproses
                </div>
            </a>

            <a href="#" class="product-card" style="background-color: #AFEEEE;">
                <h4>**Produk: Bola Gigit Tahan Lama**</h4>
                <p>Qty: 1 | Total: Rp 55.000</p>
                <div class="status" style="color: green;">
                    Status: Terkirim
                </div>
            </a>
            
            <a href="#" class="product-card" style="background-color: #F0F8FF;">
                <h4>**Produk: Pasir Bentonite (Lavender)**</h4>
                <p>Qty: 3 | Total: Rp 180.000</p>
                <div class="status" style="color: red;">
                    Status: Menunggu Pembayaran
                </div>
            </a>

            <a href="#" class="product-card" style="background-color: #F5DEB3;">
                <h4>**Produk: Filter Akuarium**</h4>
                <p>Qty: 1 | Total: Rp 75.000</p>
                <div class="status" style="color: blue;">
                    Status: Selesai
                </div>
            </a>

        </div>
    </div>

</body>
</html>