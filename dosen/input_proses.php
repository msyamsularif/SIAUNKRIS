<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $email = $_POST["email_dosen"];
    $no_telp = $_POST["no_telp"];
    $gender = $_POST["gender"];
    $prodi = $_POST["prodi"];
    $status = $_POST["status_dosen"];

    // buat query
    $query = "INSERT INTO data_dosen VALUE ('$nip', '$nama', '$email', '$no_telp',' $gender', '$prodi', '$status')";
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