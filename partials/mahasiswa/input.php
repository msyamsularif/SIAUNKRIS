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
    <h1>Input Data</h1>
    <div class="container">
      <form action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Prodi</legend>
          <p>
            <label for="nim">KODE : </label>
            <input type="text" name="kode" id="kode">
          </p>
          <p>
            <label for="nama">NO IJIN : </label>
            <input type="text" name="no_ijin" id="no_ijin">
          </p>
          <p>
            <label for="nama">NAMA PRODI : </label>
            <input type="text" name="nama_prodi" id="nama_prodi">
          </p>
          <p>
            <label for="nama">KETUA PRODI : </label>
            <input type="text" name="ketua_prodi" id="ketua_prodi">
          </p>
          <p>
            <label for="nama">EMAIL : </label>
            <input type="text" name="email" id="email">
          </p>
          <p>
            <label for="nama">STATUS : </label>
            <input type="text" name="status" id="status">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>