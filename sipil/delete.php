<?php
// include database connection file
//include_once("../koneksi.php");
include '../koneksi.php';
// Get id from URL to delete that user
//$nim = $_GET['nim'];

// Delete user row from table based on given id
//$query = mysqli_query($conn, "DELETE FROM data_prodi WHERE nim=$nim");

// After delete redirect to Home, so that latest user list will be displayed.
//header("Location:index.php");

if( isset($_GET['nim']) ){

    // ambil id dari query string
    $nim = $_GET['nim'];

    // buat query hapus
    $query = "DELETE FROM data_mahasiswa WHERE nim='$nim'";
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