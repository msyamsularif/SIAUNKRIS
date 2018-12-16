<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $kode = $_POST["kode"];
    $no_ijin = $_POST["no_ijin"];
    $nama_prodi = $_POST["nama_prodi"];
    $ketua_prodi = $_POST["ketua_prodi"];
    $email = $_POST["email"];
    $status = $_POST["status"];

    // buat query
    $query = "INSERT INTO data_prodi VALUE ('$kode', '$no_ijin', '$nama_prodi', '$ketua_prodi', '$email', '$status')";
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