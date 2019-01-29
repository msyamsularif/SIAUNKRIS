<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $id_nilai = $_POST["id_nilai"];
    $nim_nilai = $_POST["nim_nilai"];
    $kode_matkul_nilai = $_POST["kode_matkul_nilai"];
    $uts = $_POST["uts"];    
    $uas = $_POST["uas"];
    $tugas = $_POST["tugas"];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE nilai SET ";
  $query .= "kode_matkul_nilai = '$kode_matkul_nilai', nim_nilai = '$nim_nilai', ";
  $query .= "uts='$uts', ";
  $query .= "uas = '$uas', tugas= '$tugas'";
  $query .= "WHERE id_nilai = '$id_nilai'";

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