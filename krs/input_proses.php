<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    $id = $_POST["id"];
    $kode_matkul_krs = $_POST["kode_matkul_krs"];
    $banyak= count($kode_matkul_krs);

    // buat query
    for($i=0; $i<$banyak; $i++){

		$query = "INSERT INTO krs VALUE ('','$kode_matkul_krs[$i]')";
        $row = mysqli_query($conn, $query);

			if($query){

				header("location:index.php");

			} else{

				header("location:index.php");

			}	
		}

} else {
    die("Akses dilarang...");
}

?>