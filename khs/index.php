<?php
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level'] == ""){
		header("location:../index.php?pesan=belum_login");
	}
	else if ($_SESSION['level'] == "1" || $_SESSION['level'] == "4") {
?>
<!DOCTYPE html>
<html lang="en">
<?php require "../koneksi.php"; ?>
	<head>
		<!-- Required meta tags -->
		<?php require "../partials/_head.php"; ?>
		<link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
		<link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
		<style>
			body{
				width: 100%;
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
			}
			.foto .gambar_unkris{
				width: 100px;
				height: 100px;
			}
			.foto .gambar_teknik{
				width: 70px;
				height: 70px;
			}
			h4{
				margin-top: 0;
				line-height: 0
			}
			h2{
				line-height: 10px;
			}
			.isi{
				border: 1px;
			}
			.isi{
				border-color: black;
				border: 3px solid black;
				border-radius: 5px;
				text-align: center;
			}
			footer{
				margin-top: 100px;
			}
			table{
				margin: 0;
			}
		</style>
	</head>
	<!--onload="window.print();"-->
	<body onload="window.print();">
	<center>
		<table width="100%">
			<tr>
				<th class="foto">
					<img class="gambar_unkris" src="../public/images/unkris.png">
				</th>
				<th width="70%">
					<h2>Universitas Krisnadwipayana</h2>
					<h2>Fakultas Teknik</h2>
				</th>
				<th class="foto">
					<img class="gambar_teknik" src="../public/images/Teknik.png">
				</th>
			</tr>
		</table>
		<p>Jalan Raya Jatiwaringin, RT. 03 / RW. 04, Jatiwaringin, Pondok Gede,</p>
		<p>Jaticempaka, Pondokgede, Kota Bks, Jawa Barat 13077</p>
		<hr/></br>
		<h2><u>KARTU HASIL STUDI</u></h2>
	</center></br></br>
	<?php
		$sql = "SELECT id_jadwal, kode_matkul_jadwal, nip_jadwal, kode_ruangan_jadwal, kode_prodi, hari, jam, kode_matkul_krs, id, sks,
														kode_matkul, nama_matkul,nip, nama, kode_ruangan, nama_ruangan, kode, nama_prodi, nama_krs, uts, uas, tugas, kode_matkul_nilai, id_nilai FROM jadwal
														INNER JOIN mata_kuliah ON kode_matkul_jadwal=kode_matkul
														INNER JOIN krs ON kode_matkul_jadwal=kode_matkul_krs
														INNER JOIN data_dosen ON nip_jadwal=nip
														INNER JOIN ruangan ON kode_ruangan_jadwal=kode_ruangan
														INNER JOIN data_prodi ON kode_prodi=kode
														INNER JOIN users ON nip_jadwal=nip_user
														INNER JOIN nilai ON kode_matkul_jadwal=kode_matkul_nilai
														WHERE nim_nilai='$_SESSION[nip_user]'";
					$query = mysqli_query($conn, $sql);
          if (!$query) {
            die('SQL Error: ' . mysqli_error($conn));
          }
					$prodiuser = $_SESSION["prodi_user"];
					$prodi = array(
									 'KP-TIF' => 'Informatika',
									 'KP-TI' => 'Industri',
									 'KP-TE' => 'Elektro',
									 'KP-TS' => 'Sipil',
									 'KP-TA' => 'Arsitek',
									 'KP-TM' => 'Mesin',
									 'KP-TP' => 'Perencanaan Wilayah & Kota'
									 );
		
					$rows = mysqli_fetch_assoc($query);
					$uts = $rows["uts"];
					$uas = $rows["uas"];
					$tugas = $rows["tugas"];
					$hasil=(0.3*$tugas)+(0.3*$uts)+(0.4*$uas);
					
					if ($hasil>=85)
					$j=("A") and $i=("LULUS");
					else
					if ($hasil>=80)
					$j=("A-") and $i=("LULUS");
					else
					if ($hasil>=75)
					$j=("B+") and $i=("LULUS");
					else
					if ($hasil>=70)
					$j=("B") and $i=("LULUS");
					else
					if ($hasil>=65)
					$j=("B-") and $i=("LULUS");
					else
					if ($hasil>=60)
					$j=("C") and $i=("LULUS");
					else
					if ($hasil>=55)
					$j=("D") and $i=("TIDAK LULUS");
					else
					if ($hasil>100)
					$j=("") and $i=("NILAI SALAH");
					else
					$j=("E") and $i=("TIDAK LULUS");
					
		?>
		<h4>NIM  : <?php echo $_SESSION['nip_user']; ?></h4>
		</br>
		<h4>Nama : <?php echo $_SESSION['nama_user'];?></h4>
		</br>
		<h4>Jurusan : <?php echo $prodi[$prodiuser];?></h4>
		</br></br>
		<center>
		<?php		
		echo '<table border="1px" class="isi" width="98%">
            <thead>
            <tr>
                <th rowspan="2" width="50px" class="text-center">NO</th>
								<th rowspan="2" width="150px" class="text-center">Kode Matkul</th>
								<th rowspan="2" width="150px" class="text-center">Nama Mahasiswa</th>
								<th rowspan="2" width="150px" class="text-center">Nama Matkul</th>
								<th rowspan="2" width="50px" class="text-center">SKS</th>
								<th rowspan="2" width="150px"class="text-center">Nama Dosen</th>
								<th colspan="3" class="text-center">Nilai</th>
            </tr>
						<tr>
							<th width="50px">UTS</th>
							<th width="50px">UAS</th>
							<th width="50px">TUGAS</th>
						</tr>
            </thead>
                <tbody>';
									 $no=1;
											 while ($row = mysqli_fetch_array($query)) {
													echo "<tr>";
													echo "<td>".$no."</td>";
													echo "<td>".$row['kode_matkul_krs']."</td>";
													echo "<td>".$row['nama_krs']."</td>";
													echo "<td>".$row['nama_matkul']."</td>";
													echo "<td>".$row['sks']."</td>";
													echo "<td>".$row['nama']."</td>";
													echo "<td>".$row['uts']."</td>";
													echo "<td>".$row['uas']."</td>";
													echo "<td>".$row['tugas']."</td>";
												$no++;
												}
              echo '
              </tbody>
              <tfoot>
                <tr>
									<th class="text-center">NO</th>
									<th class="text-center">Kode Matkul</th>
									<th class="text-center">Nama Mahasiswa</th>
									<th class="text-center">Nama Matkul</th>
									<th class="text-center">SKS</th>
									<th class="text-center">Nama Dosen</th>
									<th colspan="3" class="text-center">Nilai</th>
                </tr>
            </tfoot>
            </table>';
					?>
					<div class="container" style="margin-top: 30px; position: sticky;">
						<h4>Nilai Akhir  : <?php echo $hasil; ?></h4>
						</br>
						<h4>Grade : <?php echo $j;?></h4>
						</br>
						<h4>Keterangan : <?php echo $i;?></h4>
					</div>
		</center>
	<footer>
		<table width="100%">
			<tr>
				<th width="50%">Mengetahui</th>
				<th width="50%">Mengetahui</th>
			</tr>
			<tr>
				<th width="50%">Dosen Pembimbing</th>
				<th width="50%">Mahasiswa</th>
			</tr>
		</table>
	</footer>
	<!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
	</body>
<?php
	}
	else{
		header("location:../error-404.php");
	}
?>
</html>