<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email_mahasiswa"];
    $no_telp = $_POST["no_telp"];
    $prodi = $_POST["prodi_mahasiswa"];
    $shift = $_POST["shift"];
    $status = $_POST["status_mahasiswa"];

    // buat query
    $query = "INSERT INTO data_mahasiswa VALUE ('$nim', '$nama', '$email', '$no_telp', '$prodi', '$shift', '$status')";
    $row = mysqli_query($conn, $query);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: input.php');
    }


} else {
    die("Akses dilarang...");
}

?>