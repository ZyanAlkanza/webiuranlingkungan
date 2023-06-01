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
    <link rel="stylesheet" href="css/adminDetail.css">

    <title>Detail Pembayaran</title>
  </head>
  <body>
    <div class="row">
        <div class="col-5  teks">
            <h1 class="judul">Detail Pembayaran</h1>

            <div class="isi">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Nama</li>
                    <li class="list-group-item">Zyan Mujadid Alkanza</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Alamat</li>
                    <li class="list-group-item">Puri Kencana Blok D7</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Pembayaran Atas Nama</li>
                    <li class="list-group-item">Zyan Alkanza</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Tgl. Pembayaran</li>
                    <li class="list-group-item">01/18/2022</li>
                </ul>
                 <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Jumlah Pembayaran</li>
                    <li class="list-group-item">200.000</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Pembayaran Bulan</li>
                    <li class="list-group-item">
                        <select id="inputState" class="form-control">
                            <option selected>Bulan...</option>
                                <option>...</option>
                        </select>
                    </li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Status</li>
                    <li class="list-group-item">
                        <select id="inputState" class="form-control">
                            <option selected>Pilih...</option>
                                <option>Lunas</option>
                                <option>Belum Bayar</option>
                        </select>
                    </li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Keterangan</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <textarea name="" id="" cols="52" rows="7" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptates dolor architecto, doloremque quisquam corrupti dignissimos repellat cupiditate. Accusantium quo, nihil delectus atque sint ipsa aspernatur recusandae ratione magnam.
                    </textarea>
                </ul>

                <a href="http://localhost/webiuranlingkungan/adminVerifikasi.php">
                    <button type="submit" class="btn kembali">Kembali</button>
                </a>

                <a href="http://localhost/webiuranlingkungan/adminVerifikasi.php">
                    <button type="submit" class="btn btn-primary verifikasi">Verifikasi</button>
                </a>

            </div>

        </div>

        <div class="col-7 gambar">
            <h1>Bukti Pembayaran</h1>
            <img src="assets/img/bukti.png" alt="">
        </div>
    </div>
    
  </body>
</html>
