<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("../koneksi.php");

  // membuat variabel untuk menampung data dari form edit
    $id_jadwal_ujian = $_POST["id_jadwal_ujian"];
    $kode_matkul_ujian = $_POST["kode_matkul_ujian"];
    $nip_ujian = $_POST["nip_ujian"];
    $kode_ruangan_ujian = $_POST["kode_ruangan_ujian"];
    $tanggal_ujian = $_POST["tanggal_ujian"];
    $jam_ujian = $_POST["jam_ujian"];    

  //buat dan jalankan query UPDATE
  $query  = "UPDATE jadwal_ujian SET ";
  $query .= "kode_matkul_ujian = '$kode_matkul_ujian', nip_ujian = '$nip_ujian', ";
  $query .= "kode_ruangan_ujian='$kode_ruangan_ujian', ";
  $query .= "tanggal_ujian = '$tanggal_ujian', jam_ujian= '$jam_ujian' ";
  $query .= "WHERE id_jadwal_ujian = '$id_jadwal_ujian'";

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