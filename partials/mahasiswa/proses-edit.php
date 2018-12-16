<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $kode = $_POST["kode"];
    $no_ijin = $_POST["no_ijin"];
    $nama_prodi = $_POST["nama_prodi"];
    $ketua_prodi = $_POST["ketua_prodi"];
    $email = $_POST["email"];
    $status = $_POST["status"];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE data_prodi SET ";
  $query .= "kode = '$kode', no_ijin = '$no_ijin', ";
  $query .= "nama_prodi='$nama_prodi', ";
  $query .= "ketua_prodi = '$ketua_prodi', email= '$email', status= '$status' ";
  $query .= "WHERE kode = '$kode'";

  $row = mysqli_query($conn, $query);

  //periksa hasil query apakah ada error
  if(!$row) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");

?>