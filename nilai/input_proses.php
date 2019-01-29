<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $nim_nilai = $_POST["nim_nilai"];
    $kode_matkul_nilai = $_POST["kode_matkul_nilai"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];
    $tugas = $_POST["tugas"];

    // buat query
    $query = "INSERT INTO nilai VALUE ('', '$nim_nilai', '$kode_matkul_nilai', '$uts', '$uas', '$tugas')";
    $row = mysqli_query($conn, $query);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan jam=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan jam=gagal
        header('Location: index.php');
    }


} else {
    die("Akses dilarang...");
}

?>