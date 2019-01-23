<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email_mahasiswa"];
    $no_telp = $_POST["no_telp"];
    $prodi = $_POST["prodi_mahasiswa"];
    $shift = $_POST["shift"];
    $status = $_POST["status_mahasiswa"];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE data_mahasiswa SET ";
  $query .= "nim = '$nim', nama = '$nama', ";
  $query .= "email_mahasiswa ='$email', ";
  $query .= "no_telp = '$no_telp', prodi_mahasiswa = '$prodi',shift = '$shift', status_mahasiswa = '$status' ";
  $query .= "WHERE nim = '$nim'";

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