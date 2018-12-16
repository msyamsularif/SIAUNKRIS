<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['nim'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $nim = ($_GET["nim"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM data_mahasiswa WHERE nim = '$nim'";
    $row = mysqli_query($conn, $query);
    // mengecek apakah query gagal
    if(!$row){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $row = mysqli_fetch_assoc($row);
    $nim = $row["nim"];
    $nama = $row["nama"];
    $email = $row["email"];
    $no_telp = $row["no_telp"];
    $prodi = $row["prodi"];
    $shift = $row["shift"];
    $status = $row["status"];
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form action="proses-edit.php" method="post">
        <input type="hidden" name="nim" value="<?php echo $nim; ?>">
        <fieldset>
        <legend>Edit Data Mahasiswa</legend>
          <p>
            <label for="nim">NIM : </label>
            <input type="text" name="nim" id="nim" value="<?php echo $nim ?>">
          </p>
          <p>
            <label for="nama">NAMA : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
          </p>
          <p>
            <label for="email">EMAIL : </label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>">
          </p>
          <p>
            <label for="no_telp">NO TELPON : </label>
            <input type="text" name="no_telp" id="no_telp" value="<?php echo $no_telp ?>">
          </p>
          <p>
            <label for="prodi">PRODI : </label>
            <input type="text" name="prodi" id="prodi" value="<?php echo $prodi ?>" readonly="">
          </p>
          <p>
            <label for="shift">SHIFT : </label>
            <input type="text" name="shift" id="shift" value="<?php echo $shift ?>">
          </p>
          <p>
            <label for="nama">STATUS : </label>
            <input type="text" name="status" id="status" value="<?php echo $status ?>">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>