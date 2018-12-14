<?php

include ("../koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['kode']) ){
    header('Location: prodi/index.php');
}

//ambil id dari query string
$kode = $_GET['kode'];

// buat query untuk ambil row dari rowbase
$sql = "SELECT * FROM data_prodi WHERE kode=$kode";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

// jika row yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

        <input type="hidden" name="kode" value="<?php echo $row['kode'] ?>" />

        <p>
            <label for="kode">KODE: </label>
            <input type="text" name="kode" placeholder="nama lengkap" value="<?php echo $row['kode'] ?>" />
        </p>
        <p>
            <label for="no ijin">NO IJIN: </label>
            <textarea name="no_ijin"><?php echo $row['no_ijin'] ?></textarea>
        </p>
        <p>
            <label for="nama prodi">NAMA PRODI: </label>
            <textarea name="nama_prodi"><?php echo $row['nama_prodi'] ?></textarea>
        </p>
        <p>
            <label for="ketua prodi">KETUA PRODI: </label>
            <textarea name="ketua_prodi"><?php echo $row['ketua_prodi'] ?></textarea>
        </p>
        <p>
            <label for="email">EMAIL: </label>
            <textarea name="email"><?php echo $row['email'] ?></textarea>
        </p>
        <p>
            <label for="status">STATUS: </label>
            <textarea name="status"><?php echo $row['status'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>