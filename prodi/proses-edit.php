<?php

include("../koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $kode = $_POST['kode'];
    $no_ijin=$_POST['no_ijin'];
    $nama_prodi=$_POST['nama_prodi'];
    $ketua_prodi=$_POST['ketua_prodi'];
    $email=$_POST['email'];
    $status=$_POST['status'];


    // buat query update
    $sql = "UPDATE data_prodi SET no_ijin='$no_ijin', nama_prodi='$nama_prodi', ketua_prodi='$ketua_prodi', email='$email', status='$status' WHERE kode=$kode";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: prodi/index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>