<?php
include 'koneksidefine.php';
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
 header("location:index.php?Gagal-Masuk-Bos");
}

$masuk = mysqli_query($koneksi,"SELECT * FROM users WHERE id='2' ORDER BY id DESC");
$sql = "SELECT * FROM members WHERE id='0' ORDER BY id DESC";
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petugas: Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">
                    <?php while($row = mysqli_fetch_assoc($masuk)): ?>
                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/petugas.jpg" />                    
                    <h3><?php echo  $row["nama"] ?></h3>
                    <p><?php echo $row["alamat"] ?></p>
                    <p><?php echo $_SESSION["level"] ?></p>

                    <p><a href="keluar.php">Logout</a></p>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="list-group mt-3">
                <a href="petugas.php" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="petugas_booking.php" class="list-group-item list-group-item-action">Daftar Booking</a>
                <a href="petugas_update.php" class="list-group-item list-group-item-action">Update Status</a>
                <a href="petugas_komplain.php" class="list-group-item list-group-item-action">Komplain</a>
            </div>

            
        </div>


        <div class="col-md-8">

          <div class="card mb-3">
                <div class="card-body">
                <h1>Dashboard</h1>
                </div>
            </div>

            <div class="card mb-3">
              <div class="card-header">
                #1
              </div>
              <div class="card-body">
                <h5 class="card-title">Tambah Data</h5>
                <p class="card-text">Tambahkan data baru</p>
                <a href="petugas_tambahdata.php" class="btn btn-primary">+ Tambah</a>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header">
                #2
              </div>
              <div class="card-body">
                <h5 class="card-title">Booking</h5>
                <p class="card-text"><b>4</b> item baru</p>
                <a href="petugas_booking.php" class="btn btn-primary">Tampilkan</a>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header">
                #3
              </div>
              <div class="card-body">
                <h5 class="card-title">Komplain</h5>
                <p class="card-text"><b>4</b> item baru</p>
                <a href="petugas_komplain.php" class="btn btn-primary">Tampilkan</a>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header">
                #4
              </div>
              <div class="card-body">
                <h5 class="card-title">Booking</h5>
                <p class="card-text"><b>4</b> item baru</p>
                <a href="petugas_booking.php" class="btn btn-primary">Tampilkan</a>
              </div>
            </div>

        </div>
    
    </div>
</div>

</body>
</html>