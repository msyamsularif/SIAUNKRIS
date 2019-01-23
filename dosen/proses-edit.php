<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $email = $_POST["email_dosen"];
    $no_telp = $_POST["no_telp"];
    $gender = $_POST["gender"];
    $prodi = $_POST["prodi"];
    $status = $_POST["status_dosen"];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE data_dosen SET ";
  $query .= "nip = '$nip', nama = '$nama', ";
  $query .= "email_dosen='$email', ";
  $query .= "no_telp = '$no_telp', gender= '$gender', prodi ='$prodi', status_dosen= '$status' ";
  $query .= "WHERE nip = '$nip'";

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