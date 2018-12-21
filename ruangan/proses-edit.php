<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $kode_ruangan = $_POST["kode_ruangan"];
    $nama_ruangan = $_POST["nama_ruangan"];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE ruangan SET ";
  $query .= "nama_ruangan = '$nama_ruangan'";
  $query .= "WHERE kode_ruangan = '$kode_ruangan'";

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