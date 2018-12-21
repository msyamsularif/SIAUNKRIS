<?php
// include database connection file
//include_once("../koneksi.php");
include '../koneksi.php';
// Get id from URL to delete that user
//$kode_ruangan = $_GET['kode_ruangan'];

// Delete user row from table based on given id
//$query = mysqli_query($conn, "DELETE FROM data_prodi WHERE kode_ruangan=$kode_ruangan");

// After delete redirect to Home, so that latest user list will be displayed.
//header("Location:index.php");

if( isset($_GET['kode_ruangan']) ){

    // ambil id dari query string
    $kode_ruangan = $_GET['kode_ruangan'];

    // buat query hapus
    $query = "DELETE FROM ruangan WHERE kode_ruangan='$kode_ruangan'";
    $row = mysqli_query($conn, $query);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location:index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>