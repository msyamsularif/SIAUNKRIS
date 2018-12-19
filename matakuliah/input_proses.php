<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $kode_matkul = $_POST["kode_matkul"];
    $nama_matkul = $_POST["nama_matkul"];
    $sks = $_POST["sks"];

    // buat query
    $query = "INSERT INTO mata_kuliah VALUE ('$kode_matkul', '$nama_matkul', '$sks')";
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