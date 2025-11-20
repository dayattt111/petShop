<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe Produk</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f5f7;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 25px;
            border-bottom: 1px solid #dcdcdc;
            background: white;
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

        /* PROFILE ICON */
        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
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

        /* MAIN CONTENT */
        .main-content {
            margin-top: 150px;
            padding: 30px 20px;
            display: flex;
            justify-content: center;
        }

        /* GRID PRODUK */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            width: 100%;
            max-width: 1180px;
        }

        .product-card {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
            text-decoration: none;
            color: black;
            border-radius: 10px;
            border: 1px solid #cccccc;
            background: white;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(0,0,0,0.07);
            transition: 0.25s ease;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.12);
            filter: brightness(1.05);
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

        <div class="profile">
            <img src="https://i.pravatar.cc/100" alt="Profil">
        </div>
    </header>

    <div class="main-content">
        <div class="product-grid">

            <a href="/User/pesananSaya" class="product-card" style="background-color:#FFC0CB;">Produk</a>
            <a href="/User/pesananSaya" class="product-card" style="background-color:#ADD8E6;">Produk</a>
            <a href="/User/pesananSaya" class="product-card" style="background-color:#90EE90;">Produk</a>
            <a href="/User/pesananSaya" class="product-card" style="background-color:#FFFF99;">Produk</a>
            <a href="/User/pesananSaya" class="product-card" style="background-color:#FF7F50;">Produk</a>
            <a href="/User/pesananSaya" class="product-card" style="background-color:#DDA0DD;">Produk</a>
            <a href="/User/pesananSaya" class="product-card" style="background-color:#AFEEEE;">Produk</a>
            <a href="/User/pesananSaya" class="product-card" style="background-color:#F08080;">Produk</a>

        </div>
    </div>

</body>
</html>
