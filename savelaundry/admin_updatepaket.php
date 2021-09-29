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
    <title>Admin: Update Harga Paket</title>

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
                <a href="admin.php" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="admin_updatepaket.php" class="list-group-item list-group-item-action active">Update Paket</a>
                <a href="admin_laporan.php" class="list-group-item list-group-item-action">Laporan</a>
            </div>

            
        </div>


        <div class="col-md-8">

            <div class="card mb-3">
                <div class="card-body">
                <h1>Update Paket</h1>
                </div>
            </div>

            <div class="card mb-3">
            <div class="accordion" id="accordionExample">

				<div class="card">
					<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Paket Reguler
						</button>
					</h5>
					</div>
				
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						
                        <form>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nama Paket</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama aket" value="Paket Reguler">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Harga Paket per kg</label>
								<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Harga" value="3000">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Lama Pengerjaan</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lama Pengerjaan" value="4 Hari">
							</div>
							
						</form>

					</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Paket Kilat
						</button>
					</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
				
				
						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nama Paket</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama aket" value="Paket Super Kilat">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Harga Paket per kg</label>
								<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Harga" value="12000">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Lama Pengerjaan</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lama Pengerjaan" value="6 Jam">
							</div>
							
						</form>
					</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Paket Super Kilat
						</button>
					</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
                    <form>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nama Paket</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama aket" value="Paket Kilat">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Harga Paket per kg</label>
								<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Harga" value="6000">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Lama Pengerjaan</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lama Pengerjaan" value="1 Hari">
							</div>
							
						</form>
					</div>
					</div>
				</div>
                <div class="card pt-3">
                    <button type="button" class="btn btn-success">Simpan perubahan</button>
                </div>
				</div>
            </div>
            
        </div>
    
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>