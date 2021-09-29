<?php
include 'koneksidefine.php';
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
 header("location:index.php?Gagal-Masuk-Bos");
}

$masuk = mysqli_query($koneksi,"SELECT * FROM users WHERE id='3' ORDER BY id DESC");
$sql = "SELECT * FROM members WHERE id='0' ORDER BY id DESC";
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelanggan: Booking</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">
                    <?php while($row = mysqli_fetch_assoc($masuk)): ?>
                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/pelanggan.jpg" />                    
                    <h3><?php echo  $row["nama"] ?></h3>
                    <p><?php echo $row["alamat"] ?></p>
                    <p><?php echo $_SESSION["level"] ?></p>

                    <p><a href="keluar.php">Logout</a></p>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="list-group mt-3">
                <a href="pelanggan.php" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="pelanggan_booking.php" class="list-group-item list-group-item-action active">Booking</a>
                <a href="pelanggan_cek.php" class="list-group-item list-group-item-action">Cek Status</a>
                <a href="pelanggan_komplain.php" class="list-group-item list-group-item-action">Komplain</a>
            </div>

            
        </div>


        <div class="col-md-8">

          <div class="card mb-3">
                <div class="card-body">
                <h1>Booking</h1>
                </div>
            </div>

            <div class="card mb-3">
              <div class="card-header">
                Masukkan detil booking
              </div>
              <div class="card-body">
              <form>
              <div class="form-group">
							<label for="exampleFormControlSelect1">Paket</label>
							<select class="form-control" id="exampleFormControlSelect1">
							<option>Reguler</option>
							<option>Kilat</option>
							<option>Super Kilat</option>
							</select>
						</div>
            <div class="form-group">
							<label for="exampleFormControlInput1">Berat Pakaian</label>
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Berat">
						</div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Hari Booking</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="08XX-XXXX-XXXX">
  </div>

  <div class="form-group">
    <input type="submit" class="form-control btm btn-primary" id="exampleFormControlInput1" value="booking sekarang" >
  </div>

</form>
              </div>
            </div>

        </div>
    
    </div>
</div>

</body>
</html>