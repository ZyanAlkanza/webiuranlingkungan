<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">

    <!-- CSS -->
    <link rel="stylesheet" href="css/adminData.css">

    <title>Data Pembayaran</title>
  </head>
  <body>
    <div class="row">
        <div class="col-2  navigasi">
            <h3>Iuran Lingkungan</h3>
            
            <a href="http://localhost/webiuranlingkungan/adminVerifikasi.php" class="menu">
                <img src="assets/img/verifikasi.png" alt=""> 
                <h1>Verifikasi Pembayaran</h1>
            </a>

            <a href="http://localhost/webiuranlingkungan/adminData.php" class="menu">
                <img src="assets/img/data.png" alt=""> 
                <h1>Data Pembayaran</h1>
            </a>

            <!-- <a href="http://localhost/webiuranlingkungan/userRiwayat.php" class="menu">
                <img src="assets/img/riwayat.png" alt=""> 
                <h1>Riwayat Pembayaran</h1>
            </a> -->

            <a href="http://localhost/webiuranlingkungan/index.php">
                <button type="button" class="btn btn-danger keluar">Keluar</button>
            </a>
        </div>

        <div class="col-10 konten">
            <div class="isi">

                <div class="sortir">
                    <h1 class="judul">Data Pembayaran</h1>
                    <a href="http://localhost/webiuran/adminTambah.php">
                        <button type="submit" class="btn">Cetak</button>
                    </a>
                </div>

                <ul class="list-group list-group-horizontal kolom">
                    <li class="list-group-item list-group-item-primary nomor">No</li>
                    <li class="list-group-item list-group-item-primary nama">Nama</li>
                    <li class="list-group-item list-group-item-primary alamat">Alamat</li>
                    <li class="list-group-item list-group-item-primary bulan">Pembayaran Bulan</li>
                    <li class="list-group-item list-group-item-primary tanggal">Tgl Pembayaran</li>
                    <li class="list-group-item list-group-item-primary jumlah">Jumlah Pembayaran</li>
                    <li class="list-group-item list-group-item-primary status">Status</li>
                </ul>

                <ul class="list-group list-group-horizontal baris">
                    <li class="list-group-item nomor">1</li>
                    <li class="list-group-item nama">Zyan Mujaddid Alkanza</li>
                    <li class="list-group-item alamat">Puri Kencana Blok D7</li>
                    <li class="list-group-item bulan">Januari</li>
                    <li class="list-group-item tanggal">01/18/2022</li>
                    <li class="list-group-item jumlah">200.000</li>
                    <li class="list-group-item status">Lunas</li>
                </ul>

            </div>     

        </div>
    </div>
            


    
  </body>
</html>
