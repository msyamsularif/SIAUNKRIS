<?php
  session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level'] == ""){
		header("location:../index.php?pesan=belum_login");
	}
  // memanggil file koneksi.php untuk membuat koneksi
  include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_jadwal_ujian = ($_GET["id_jadwal_ujian"]);
    
    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = mysqli_query($conn, "SELECT * FROM jadwal_ujian WHERE id_jadwal_ujian='$id_jadwal_ujian'");
    if($query == false){
      die ("Terjadi Kesalahan : ". mysqli_error($conn));
    }
    while($row = mysqli_fetch_array($query)){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
    <?php require "../partials/_head.php"; ?>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="../public/css/style.css">

<!-- Plugin Data Tables -->
<script src="../public/datatables/jquery.min.js"></script>
<script src="../public/datatables/jquery.dataTables.min.js"></script>
<script src="../public/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Plugin Data Tables -->
<style>
  table{
    width:100%;
}
#example_filter{
    float:right;
}
#example_paginate{
    float:right;
}
label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;
   
}
</style>
<script>
  $(document).ready(function() {
    $('#example').DataTable(
        
         { 

      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );
</script>
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
      <?php require "../partials/_navbar.php"; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php require "../partials/_sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Like what you see? Check out our premium version for more.<a href="../sistem/logout.php">LOGOUT</a></p>
                <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Download Free Version</a>
                <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
          </div>
          <div class="row">
		  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data Jadwal Ujian</h4>
                  <br/>
                  <form class="form-sample" action="proses-edit.php" enctype="multipart/form-data" method="post">
                    <input name="id_jadwal_ujian" type="hidden" value="<?php echo $id_jadwal_ujian; ?>"/>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MATAKULIAH</label>
                          <div class="col-sm-9">
                            <select name="kode_matkul_ujian" class="form-control">
                            <?php
                              $query = mysqli_query($conn,"SELECT kode_matkul_ujian, kode_matkul, nama_matkul FROM jadwal_ujian INNER JOIN mata_kuliah ON kode_matkul_ujian=kode_matkul WHERE id_jadwal_ujian='$id_jadwal_ujian'");
                              if ($query == false){
                                die ("Terdapat Kesalahan : ". mysqli_error($conn));
                              }
                              while ($rows = mysqli_fetch_array($query)){
                                echo "<option value='$rows[kode_matkul_ujian]' selected>$rows[nama_matkul]</option>";
                              }
                              
                              $query = mysqli_query($conn, "SELECT kode_matkul_jadwal, nama_matkul, kode_matkul FROM jadwal
																														INNER JOIN mata_kuliah ON kode_matkul_jadwal=kode_matkul");
                              if($query == false){
                                die("Terdapat Kesalahan : ". mysqli_error($conn));
                              }
                              while($row1 = mysqli_fetch_array($query)){
                                if($row1["kode_matkul"] != $row["kode_matkul_ujian"])
                                {
                                  echo "<option value='$row1[kode_matkul_jadwal]'>$row1[nama_matkul]</option>";
                                }
                              }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NAMA DOSEN</label>
                          <div class="col-sm-9">
                            <select name="nip_ujian" class="form-control">
                            <?php
                              $query = mysqli_query($conn,"SELECT nip_ujian, nip, nama FROM jadwal_ujian INNER JOIN data_dosen ON nip_ujian=nip WHERE id_jadwal_ujian='$id_jadwal_ujian'");
                              if ($query == false){
                                die ("Terdapat Kesalahan : ". mysqli_error($conn));
                              }
                              while ($rows = mysqli_fetch_array($query)){
                                echo "<option value='$rows[nip_ujian]' selected>$rows[nama]</option>";
                              }
                              
                              $query = mysqli_query($conn, "SELECT nip_jadwal, nama, nip FROM jadwal
																														INNER JOIN data_dosen ON nip_jadwal=nip");
                              if($query == false){
                                die("Terdapat Kesalahan : ". mysqli_error($conn));
                              }
                              while($row1 = mysqli_fetch_array($query)){
                                if($row1["nip"] != $row["nip_ujian"])
                                {
                                  echo "<option value='$row1[nip_jadwal]'>$row1[nama]</option>";
                                }
                              }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">RUANGAN</label>
                          <div class="col-sm-9">
                            <select name="kode_ruangan_ujian" class="form-control">
                            <?php
                              $query = mysqli_query($conn,"SELECT kode_ruangan_ujian, kode_ruangan, nama_ruangan FROM jadwal_ujian INNER JOIN ruangan ON kode_ruangan_ujian=kode_ruangan WHERE id_jadwal_ujian='$id_jadwal_ujian'");
                              if ($query == false){
                                die ("Terdapat Kesalahan : ". mysqli_error($conn));
                              }
                              while ($rows = mysqli_fetch_array($query)){
                                echo "<option value='$rows[kode_ruangan_ujian]' selected>$rows[nama_ruangan]</option>";
                              }
                              
                              $query = mysqli_query($conn, "SELECT * FROM ruangan");
                              if($query == false){
                                die("Terdapat Kesalahan : ". mysqli_error($conn));
                              }
                              while($row1 = mysqli_fetch_array($query)){
                                if($row1["kode_ruangan"] != $row["kode_ruangan_ujian"])
                                {
                                  echo "<option value='$row1[kode_ruangan]'>$row1[nama_ruangan]</option>";
                                }
                              }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">TANGGAL</label>
                          <div class="col-sm-9">
                            <input type="date" name="tanggal_ujian" class="form-control" value="<?php echo $row['tanggal_ujian']; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">JAM</label>
                          <div class="col-sm-9">
                            <input type="text" name="jam_ujian" class="form-control" value="<?php echo $row['jam_ujian']; ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="row">
                      <div class="col-sm-6">
                        <input type="submit" class="btn btn-success btn-rounded btn-fw" name="edit" value="Update">
                      </div>
                      <div class="col-sm-6">
                      <a href="index.php" class="btn btn-danger btn-rounded btn-fw">
													<span>
														Batal
													</span>
											</a>
                      </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
              </div>
            </div>
			<!-- Data Table -->
		  </div>
			
			<!-- Widget End -->
          <div class="row">
            
          </div>
          <div class="row">
			  <!--Visitor Begin-->
			  <!--Visitor End-->
          </div>
          <div class="row">
            <!-- Row -->
          </div>
          <div class="row">
            
          </div>
        </div>
          <?php } ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require "../partials/_fotter.php"; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../public/js/off-canvas.js"></script>
  <script src="../public/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../public/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>