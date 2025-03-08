<?php
session_start();
include("../koneksi.php");

if (!isset($_SESSION['USER'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        #sidebar-wrapper {
            height: 100vh;
            width: 220px;
            background: linear-gradient(180deg, #232526, #414345);
            box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.3);
            position: fixed;
            top: 0;
            left: 0;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .list-group {
            width: 100%;
            padding: 0;
        }

        .list-group-item {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 90%;
            margin: 10px auto;
            padding: 12px;
            border-radius: 25px;
            background: rgba(100, 100, 100, 0.3);
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: all 0.3s ease-in-out;
            border: none;
            cursor: pointer;
        }

        .list-group-item:hover {
            background: linear-gradient(90deg, #4b6cb7, #182848) !important;
            color: #f1c40f !important;
            box-shadow: 0px 0px 10px rgba(241, 196, 15, 0.5);
            transform: scale(1.05);
        }

        .logout-btn {
            background: linear-gradient(90deg, #c0392b, #e74c3c);
        }

        .logout-btn:hover {
            background: linear-gradient(90deg, #e74c3c, #ff5e57) !important;
            box-shadow: 0px 0px 15px rgba(231, 76, 60, 0.7);
        }

        .content-layer {
            position: absolute;
            top: 0;
            left: 220px;
            width: calc(100% - 220px);
            height: 100vh;
            padding: 40px;
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: rgba(50, 50, 50, 0.8);
            border-radius: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .content-layer.active {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <script>
        function showContent(id) {
            document.querySelectorAll('.content-layer').forEach(layer => {
                layer.classList.remove('active');
            });
            document.getElementById(id).classList.add('active');
        }
    </script>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <div id="sidebar-wrapper">
            <div class="list-group">
                <a class="list-group-item" onclick="showContent('dashboard')">Dashboard</a>
                <a class="list-group-item" onclick="showContent('barang')">Daftar Barang</a>
                <a class="list-group-item" onclick="showContent('harga')">Daftar Harga</a>
                <a class="list-group-item" onclick="showContent('stok')">Stok Barang</a>
                <a class="list-group-item" onclick="showContent('laporan')">Laporan</a>
                <a href="../logout.php" class="list-group-item logout-btn" onclick="return confirm('Apakah Anda yakin ingin keluar?')">Logout</a>
            </div>
        </div>
    </div>
    
    <div id="dashboard" class="content-layer active">
        <h2>Selamat Datang di Dashboard</h2>
        <p>Ini adalah tampilan dashboard setelah tombol dashboard ditekan.</p>
    </div>
    <div id="barang" class="content-layer">
        <h2>Daftar Barang</h2>
        <p>Halaman ini menampilkan daftar barang yang tersedia.</p>
    </div>
    <div id="harga" class="content-layer">
        <h2>Daftar Harga</h2>
        <p>Halaman ini menampilkan daftar harga barang.</p>
    </div>
    <div id="stok" class="content-layer">
        <h2>Stok Barang</h2>
        <p>Halaman ini menampilkan stok barang yang tersedia.</p>
    </div>
    <div id="laporan" class="content-layer">
        <h2>Laporan</h2>
        <p>Halaman ini menampilkan laporan transaksi.</p>
    </div>
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
</body>
</html>
