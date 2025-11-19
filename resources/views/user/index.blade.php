<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe Produk</title>
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
            display: flex;
            justify-content: center;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 kolom */
            gap: 20px;
            width: 100%;
            max-width: 1200px; /* Batasan lebar untuk grid */
        }

        .product-card {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px; /* Tinggi card */
            border: 1px solid black;
            text-decoration: none; /* Hilangkan garis bawah link */
            color: black;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-card:hover {
            opacity: 0.8; /* Efek hover sederhana */
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">
            **Logo**
        </div>
        <nav class="navbar">
            **Navbar**
        </nav>
        <div class="profile">
            **Profil**
        </div>
    </header>

    <div class="main-content">
        <div class="product-grid">
            
            <a href="/User/pesananSaya" class="product-card" style="background-color: #FFC0CB;">
                **Produk**
            </a>

            <a href="/User/pesananSaya" class="product-card" style="background-color: #ADD8E6;">
                **Produk**
            </a>
            
            <a href="/User/pesananSaya" class="product-card" style="background-color: #90EE90;">
                **Produk**
            </a>

            <a href="/User/pesananSaya" class="product-card" style="background-color: #FFFF99;">
                **Produk**
            </a>

            <a href="/User/pesananSaya" class="product-card" style="background-color: #FF7F50;">
                **Produk**
            </a>

            <a href="/User/pesananSaya" class="product-card" style="background-color: #DDA0DD;">
                **Produk**
            </a>

            <a href="/User/pesananSaya" class="product-card" style="background-color: #AFEEEE;">
                **Produk**
            </a>

            <a href="/User/pesananSaya" class="product-card" style="background-color: #F08080;">
                **Produk**
            </a>

        </div>
    </div>

</body>
</html>