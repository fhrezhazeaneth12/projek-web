<?php
include 'koneksidefine.php';
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
 header("location:index.php?Gagal-Masuk-Bos");
}

$masuk = mysqli_query($koneksi,"SELECT * FROM users WHERE id='1' ORDER BY id DESC");
$sql = "SELECT * FROM members WHERE id='0' ORDER BY id DESC";
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin: Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">
                    <?php while($row = mysqli_fetch_assoc($masuk)): ?>
                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/admin.jpg" />                    
                    <h3><?php echo  $row["nama"] ?></h3>
                    <p><?php echo $row["alamat"] ?></p>
                    <p><?php echo $_SESSION["level"] ?></p>

                    <p><a href="keluar.php">Logout</a></p>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="list-group mt-3">
                <a href="admin.php" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="admin_updatepaket.php" class="list-group-item list-group-item-action">Update Paket</a>
                <a href="admin_laporan.php" class="list-group-item list-group-item-action">Laporan</a>
            </div>

            
        </div>


        <div class="col-md-8">

          <div class="card mb-3">
                <div class="card-body">
                <h1>Dashboard</h1>
                </div>
            </div>

            <ul class="list-group list-group-horizontal">
              <li class="list-group-item"><b>Paket Reguler</b><br> 3000/Kg</li>
              <li class="list-group-item"><b>Paket Kilat</b><br> 6000/Kg</li>
              <li class="list-group-item"><b>Paket Super Kilat</b><br> 12000/Kg</li>
              <a href="admin_updatepaket.php" type="button" class="btn btn-primary mb-5">Lihat lebih banyak >></a>
            </ul>
            

            <div class="card mb-3">
                <div class="card-body">
                <table class="table table-hover">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Pelanggan</th>
						<th scope="col">Paket Diambil</th>
						<th scope="col">Berat Pakaian</th>
						<th scope="col">Status Pelayanan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						    <th scope="row">1</th>
						        <td>Basuki Bastira</td>
						        <td>Reguler</td>
						        <td>5 Kg</td>
						        <td>Selesai</td>
						</tr>
						<tr>
						    <th scope="row">2</th>
						        <td>Steve Jobs</td>
						        <td>Super Kilat</td>
						        <td>17 Kg</td>
						        <td>Telah Diambil</td>
						</tr>
						
					</tbody>
					</table>
                </div>
                <a href="admin_laporan.php" type="button" class="btn btn-primary mb-5">Lihat lebih banyak >></a>
            </div>

        </div>

         
        </div>
    
    </div>
</div>

</body>
</html>