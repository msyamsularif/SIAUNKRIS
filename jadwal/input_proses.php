<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $kode_matkul_jadwal = $_POST["kode_matkul_jadwal"];
    $nip_jadwal = $_POST["nip_jadwal"];
    $kode_ruangan_jadwal = $_POST["kode_ruangan_jadwal"];    
    $kode_prodi = $_POST["kode_prodi"];
    $hari = $_POST["hari"];
    $jam = $_POST["jam"];

    // buat query
    $query = "INSERT INTO jadwal VALUE ('$kode_matkul_jadwal', '$nip_jadwal', '$kode_ruangan_jadwal', '$kode_prodi', '$hari', '$jam')";
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