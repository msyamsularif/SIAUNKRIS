<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $kode_matkul_jadwal = $_POST["kode_matkul_jadwal"];
    $nip_jadwal = $_POST["nip_jadwal"];
    $kode_ruangan_jadwal = $_POST["kode_ruangan_jadwal"];    
    $kode_prodi = $_POST["kode_prodi"];
    $hari = $_POST["hari"];
    $jam = $_POST["jam"];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE jadwal SET ";
  $query .= "kode_matkul_jadwal = '$kode_matkul_jadwal', nip_jadwal = '$nip_jadwal', ";
  $query .= "kode_ruangan_jadwal='$kode_ruangan_jadwal', ";
  $query .= "kode_prodi = '$kode_prodi', hari= '$hari', jam= '$jam' ";
  $query .= "WHERE id_jadwal = '$id_jadwal'";

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