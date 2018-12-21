<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $kode_matkul = $_POST["kode_ruangan"];
    $nama_matkul = $_POST["nama_ruangan"];

    // buat query
    $query = "INSERT INTO ruangan VALUE ('$kode_matkul', '$nama_matkul')";
    $row = mysqli_query($conn, $query);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php');
    }


} else {
    die("Akses dilarang...");
}

?>