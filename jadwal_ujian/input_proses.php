<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $kode_matkul_ujian = $_POST["kode_matkul_ujian"];
    $nip_ujian = $_POST["nip_ujian"];
    $kode_ruangan_ujian = $_POST["kode_ruangan_ujian"];
    $tanggal_ujian = $_POST["tanggal_ujian"];
    $jam_ujian = $_POST["jam_ujian"];    

    // buat query
    $query = "INSERT INTO jadwal_ujian VALUE ('','$kode_matkul_ujian', '$nip_ujian', '$kode_ruangan_ujian', '$tanggal_ujian', '$jam_ujian')";
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
