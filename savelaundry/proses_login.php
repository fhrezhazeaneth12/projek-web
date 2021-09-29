<?php
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksidefine.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$masuk = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($masuk);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
    $data = mysqli_fetch_assoc($masuk);
 
    // cek jika user login sebagai admin
    if($data['level']=="admin"){
 
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin.php");
 
    // cek jika user login sebagai pegawai
}else if($data['level']=="petugas"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        // alihkan ke halaman dashboard operator
        header("location:petugas.php");
 
}else if($data['level']=="pelanggan"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "pelanggan";
    // alihkan ke halaman dashboard operator
    header("location:pelanggan.php");
}

}else{
    header("location:index.php?pesan=gagal");
}
 
?>