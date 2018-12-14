<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['kode'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $kode = ($_GET["kode"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM data_prodi WHERE kode='$kode'";
    $row = mysqli_query($conn, $query);
    // mengecek apakah query gagal
    if(!$row){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $row = mysqli_fetch_assoc($row);
    $kode = $row["kode"];
    $no_ijin = $row["no_ijin"];
    $nama_prodi = $row["nama_prodi"];
    $ketua_prodi = $row["ketua_prodi"];
    $email = $row["email"];
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
        <input type="hidden" name="kode" value="<?php echo $kode; ?>">
        <fieldset>
        <legend>Edit Data Mahasiswa</legend>
          <p>
            <label for="nim">KODE : </label>
            <input type="text" name="kode" id="kode" value="<?php echo $kode ?>">
          </p>
          <p>
            <label for="nama">NO IJIN : </label>
            <input type="text" name="no_ijin" id="no_ijin" value="<?php echo $no_ijin ?>">
          </p>
          <p>
            <label for="nama">NAMA PRODI : </label>
            <input type="text" name="nama_prodi" id="nama_prodi" value="<?php echo $nama_prodi ?>">
          </p>
          <p>
            <label for="nama">KETUA PRODI : </label>
            <input type="text" name="ketua_prodi" id="ketua_prodi" value="<?php echo $ketua_prodi ?>">
          </p>
          <p>
            <label for="nama">EMAIL : </label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>">
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