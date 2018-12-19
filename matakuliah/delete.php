<?php
// include database connection file
//include_once("../koneksi.php");
include '../koneksi.php';
// Get id from URL to delete that user
//$kode_matkul = $_GET['kode_matkul'];

// Delete user row from table based on given id
//$query = mysqli_query($conn, "DELETE FROM data_prodi WHERE kode_matkul=$kode_matkul");

// After delete redirect to Home, so that latest user list will be displayed.
//header("Location:index.php");

if( isset($_GET['kode_matkul']) ){

    // ambil id dari query string
    $kode_matkul = $_GET['kode_matkul'];

    // buat query hapus
    $query = "DELETE FROM mata_kuliah WHERE kode_matkul='$kode_matkul'";
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