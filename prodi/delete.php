<?php
// include database connection file
include_once("../koneksi.php");

// Get id from URL to delete that user
$kode = $_GET['kode'];

// Delete user row from table based on given id
$query = mysqli_query($conn, "DELETE FROM data_prodi WHERE kode=$kode");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>