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
    <title>Petugas: Daftar Booking</title>

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
    <a href="petugas.php" class="list-group-item list-group-item-action">Dashboard</a>
    <a href="petugas_booking.php" class="list-group-item list-group-item-action active">Daftar Booking</a>
    <a href="petugas_update.php" class="list-group-item list-group-item-action">Update Status</a>
    <a href="petugas_komplain.php" class="list-group-item list-group-item-action">Komplain</a>
</div>


</div>


        <div class="col-md-8">

            <div class="card mb-3">
                <div class="card-body">
                <h1>Daftar Booking Laundry</h1>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                <table class="table table-hover">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Pelanggan</th>
						<th scope="col">Paket Diambil</th>
						<th scope="col">Berat Pakaian</th>
						<th scope="col">Hari yang dibooking</th>
						<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						    <th scope="row">1</th>
						        <td><a href="#">Asep Sukendar</a></td>
						        <td>Reguler</td>
						        <td>50 Kg</td>
						        <td>Minggu, 19 Mei 2019</td>
						        <td>
									<button href="#" type="button" class="btn btn-success  ">Proses</button>
									<button href="#" type="button" class="btn btn-danger  ">Hapus</button>
								</td>
						</tr>
						<tr>
						    <th scope="row">2</th>
						        <td><a href="#">Marquees Brownlee</a></td>
						        <td>Super Kilat</td>
						        <td>7 Kg</td>
						        <td>Senin, 27 Mei 2019</td>
						        <td>
									<button href="#" type="button" class="btn btn-success  ">Proses</button>
									<button href="#" type="button" class="btn btn-danger  ">Hapus</button>
								</td>
						</tr>
						<tr>
						    <th scope="row">3</th>
						        <td><a href="#">Gatotkaca</a></td>
						        <td>Kilat</td>
						        <td>18 Kg</td>
						        <td>Kamis, 23 Mei 2019</td>
						        <td>
									<button href="#" type="button" class="btn btn-success  ">Proses</button>
									<button href="#" type="button" class="btn btn-danger  ">Hapus</button>
								</td>
						</tr>
                        <tr>
						    <th scope="row">4</th>
						        <td><a href="#">Juragan Tratak Boyolali</a></td>
						        <td>Super Kilat</td>
						        <td>700 Kg</td>
						        <td>Selasa, 14 Mei 2019</td>
						        <td>
									<button href="#" type="button" class="btn btn-success  ">Proses</button>
									<button href="#" type="button" class="btn btn-danger  ">Hapus</button>
								</td>
						</tr>
					</tbody>
					</table>
					
                </div>
            </div>
        </div>
    
    </div>
</div>

</body>
</html>