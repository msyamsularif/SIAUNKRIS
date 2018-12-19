<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $kode_matkul = $_POST["kode_matkul"];
    $nama_matkul = $_POST["nama_matkul"];
    $sks = $_POST["sks"];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE mata_kuliah SET ";
  $query .= "nama_matkul = '$nama_matkul', sks ='$sks' ";
  $query .= "WHERE kode_matkul = '$kode_matkul'";

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