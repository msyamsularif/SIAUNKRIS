<?php
  session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level'] == ""){
		header("location:../index.php?pesan=belum_login");
	}
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
                  <h4 class="card-title">Input Data Prodi</h4>
                  <form class="form-sample" action="proses-edit.php" method="post">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">KODE</label>
                          <div class="col-sm-9">
                            <input type="text" name="kode" class="form-control" value="<?php echo $kode; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NO IJIN</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_ijin" class="form-control" value="<?php echo $no_ijin; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NAMA PRODI</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_prodi" class="form-control" value="<?php echo $nama_prodi; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">KETUA PRODI</label>
                          <div class="col-sm-9">
                            <input type="text" name="ketua_prodi" class="form-control" value="<?php echo $ketua_prodi; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">EMAIL</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <?php $status = $row['status']; ?>
                          <div class="col-sm-4">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="status" value="Aktif" <?php echo ($status == 'Aktif') ? "checked": "" ?>> Aktif
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="status" value="Non Active" <?php echo ($status == 'Non Active') ? "checked": "" ?>> Non Active
                              </label>
                            </div>
                          </div>
                        </div>
                        <br>
                      </div>
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