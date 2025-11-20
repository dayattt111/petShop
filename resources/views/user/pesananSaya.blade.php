<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya - PetShop</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 25px;
            border-bottom: 1px solid #dcdcdc;
            background-color: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .logo {
            font-size: 22px;
            font-weight: 800;
            color: #2563eb;
            letter-spacing: 0.5px;
        }

        .navbar a {
            margin: 0 8px;
            text-decoration: none;
            font-size: 14px;
            padding: 10px 14px;
            border-radius: 6px;
            transition: 0.2s;
        }

        .navbar a:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* PROFILE */
        .profile {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
            transition: 0.2s;
        }

        .profile img:hover {
            border-color: #2563eb;
            transform: scale(1.05);
        }

        /* CONTENT */
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
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: 0.2s;
        }
        .back-button:hover {
            opacity: 0.9;
            transform: translateX(-3px);
        }

        /* GRID */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            width: 100%;
        }

        .product-card {
            display: block;
            padding: 15px;
            border: 1px solid #cfcfcf;
            background: white;
            text-decoration: none;
            color: black;
            box-shadow: 0 3px 8px rgba(0,0,0,0.08);
            border-radius: 8px;
            transition: 0.25s ease;
            height: 150px;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.12);
        }

        .product-card h4 {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 15px;
            font-weight: 700;
        }

        .status {
            font-weight: bold;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>

</head>
<body>

    <header class="header">
        <div class="logo">XPetShop</div>

        <nav class="navbar">
            <a style="background-color: teal; color: white;" href="/User">Home</a>
            <a style="background-color: rgb(0, 19, 128); color: white;" href="/User/pesananSaya">Pesanan Saya</a>
            <a style="background-color: rgb(77, 128, 0); color: white;" href="/User/dataPemeriksaan">Data Pemeriksaan</a>
        </nav>

        <div class="profile" onclick="window.location='/'">
            <img src="https://i.pravatar.cc/100" alt="Profil">
        </div>
    </header>

    <div class="main-content">
        
        <a href="/User" class="back-button">
            ← Kembali ke Beranda
        </a>

        <h1 class="page-title">Pesanan Saya</h1>

        <div class="product-grid">

            <a href="#" class="product-card" style="background-color: #FFE4B5;">
                <h4>Produk: Royal Canin Kitten</h4>
                <p>Qty: 2 | Total: Rp 200.000</p>
                <div class="status" style="color: orange;">Status: Diproses</div>
            </a>

            <a href="#" class="product-card" style="background-color: #AFEEEE;">
                <h4>Produk: Bola Gigit Tahan Lama</h4>
                <p>Qty: 1 | Total: Rp 55.000</p>
                <div class="status" style="color: green;">Status: Terkirim</div>
            </a>

            <a href="#" class="product-card" style="background-color: #F0F8FF;">
                <h4>Produk: Pasir Bentonite (Lavender)</h4>
                <p>Qty: 3 | Total: Rp 180.000</p>
                <div class="status" style="color: red;">Status: Menunggu Pembayaran</div>
            </a>

            <a href="#" class="product-card" style="background-color: #F5DEB3;">
                <h4>Produk: Filter Akuarium</h4>
                <p>Qty: 1 | Total: Rp 75.000</p>
                <div class="status" style="color: blue;">Status: Selesai</div>
            </a>

        </div>
    </div>

</body>
</html>
