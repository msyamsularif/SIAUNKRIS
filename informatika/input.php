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
            <label for="nim">NIM : </label>
            <input type="text" name="nim" id="nim">
          </p>
          <p>
            <label for="nama">NAMA : </label>
            <input type="text" name="nama" id="nama">
          </p>
          <p>
            <label for="email">EMAIL : </label>
            <input type="text" name="email" id="email">
          </p>
          <p>
            <label for="no_telp">NO TELPON : </label>
            <input type="text" name="no_telp" id="no_telp">
          </p>
          <p>
            <label for="prodi">PRODI : </label>
            <input type="text" name="prodi" id="prodi" value="Informatika" readonly="">
          </p>
          <p>
            <label for="shift">SHIFT : </label>
            <input type="text" name="shift" id="shift">
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