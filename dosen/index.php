<?php
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level'] == ""){
		header("location:../index.php?pesan=belum_login");
	}
	else if ($_SESSION['level'] == "1" || $_SESSION['level'] == "2") {
?>
<!DOCTYPE html>
<html lang="en">
<?php require "../koneksi.php"; ?>
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
              <!--
                <span class="d-block d-md-flex align-items-center">
                <p>Like what you see? Check out our premium version for more.<a href="../sistem/logout.php">LOGOUT</a></p>
                <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Download Free Version</a>
                <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
              -->
            </div>
          </div>
          <div class="row">
		  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 style="font-size: 20px" class="card-title">Data Dosen</h4>
                 <h5 class="card-description">
                 <button type="button" class="btn btn-primary"><a style="color:white" href="input.php">Tambah data</a></button>
                </h5>
				  <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
          <div class="row">

          <?php
					if($_SESSION['level'] == "1"){
						$sql = 'SELECT nip, nama, email_dosen, no_telp, gender, prodi, status_dosen, nama_prodi, kode FROM data_dosen
										INNER JOIN data_prodi ON prodi=kode';
					}
					else if($_SESSION['level'] == "2"){
						$sql = "SELECT nip, nama, email_dosen, no_telp, gender, prodi, status_dosen, nama_prodi, kode FROM data_dosen
										INNER JOIN data_prodi ON prodi=kode WHERE prodi='$_SESSION[prodi_user]'";
					}
          $query = mysqli_query($conn, $sql);

          if (!$query) {
            die('SQL Error: ' . mysqli_error($conn));
          }

          echo '<table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
					<thead>
					<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>E-Mail</th>
							<th>No Telp.</th>
							<th>Gender</th>
							<th>Prodi</th>
							<th>Status</th>
							<th>Action</th>
					</tr>
					</thead>
							<tbody>';
										
										while ($row = mysqli_fetch_array($query)) {
										echo "<tr>";
										echo "<td>".$row['nip']."</td>";
										echo "<td>".$row['nama']."</td>";
										echo "<td>".$row['email_dosen']."</td>";
										echo "<td>".$row['no_telp']."</td>";
										echo "<td>".$row['gender']."</td>";
										echo "<td>".$row['nama_prodi']."</td>";
										echo "<td>".$row['status_dosen']."</td>";
										echo "<td align='center'><a href='form-edit.php?nip=$row[nip]'>Edit</a> | <a href='delete.php?nip=$row[nip]'>Delete</a></td></tr>";     
										 }
										echo '
						</tbody>
						<tfoot>
							<tr>
								<th>NIP</th>
								<th>Nama</th>
								<th>E-Mail</th>
								<th>No Telp.</th>
								<th>Gender</th>
								<th>Prodi</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
					</tfoot>
					</table>';
					
					// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
										mysqli_free_result($query);
					
					// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
										mysqli_close($conn);
										?>
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
<?php
	}
	else{
		header("location:../error-404.php");
	}
?>
</html>