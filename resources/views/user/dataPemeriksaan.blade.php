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

        /* TABLE STYLE */
        .table-wrapper {
            width: 100%;
            max-width: 1180px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #cccccc;
            box-shadow: 0 3px 10px rgba(0,0,0,0.07);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }

        table thead {
            background: #2563eb;
            color: white;
        }

        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        table tr:hover {
            background-color: #f6faff;
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
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Makanan Kucing Premium</td>
                        <td>Makanan</td>
                        <td>Rp 45.000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Shampoo Anjing</td>
                        <td>Perawatan</td>
                        <td>Rp 30.000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kandang Besi 120cm</td>
                        <td>Aksesoris</td>
                        <td>Rp 350.000</td>
                        <td>Habis</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Vitamin Hewan</td>
                        <td>Kesehatan</td>
                        <td>Rp 20.000</td>
                        <td>Tersedia</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
