<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_telp = $_POST["no_telp"];
    $prodi = $_POST["prodi"];
    $gender = $_POST["gender"];
    $matkul = $_POST["matkul"];
    $status = $_POST["status"];

    // buat query
    $query = "INSERT INTO data_dosen VALUE ('$nip', '$nama', '$email', '$no_telp', '$prodi','$gender','$matkul','$status')";
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