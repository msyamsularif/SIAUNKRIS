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
		<h2><u>KARTU RENCANA STUDI</u></h2>
	</center></br></br>
	<?php
		$sql = "SELECT id_jadwal, kode_matkul_jadwal, nip_jadwal, kode_ruangan_jadwal, kode_prodi, hari, jam, kode_matkul_krs, id, sks,
						kode_matkul, nama_matkul,nip, nama, kode_ruangan, nama_ruangan, kode, nama_prodi,nama_krs,nim_krs FROM jadwal
						INNER JOIN mata_kuliah ON kode_matkul_jadwal=kode_matkul
						INNER JOIN krs ON kode_matkul_jadwal=kode_matkul_krs
						INNER JOIN data_dosen ON nip_jadwal=nip
						INNER JOIN ruangan ON kode_ruangan_jadwal=kode_ruangan
						INNER JOIN data_prodi ON kode_prodi=kode WHERE nama_krs='$_SESSION[nama_user]'";
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
	?>
	<h4>NIM  : <?php echo $_SESSION['nip_user']; ?></h4>
	</br>
	<h4>Nama : <?php echo $_SESSION['nama_user'];?></h4>
	</br>
	<h4>Jurusan : <?php echo $prodi[$prodiuser];?></h4>
	</br></br>
	<center>
	<?php		
		echo '<table class="isi" border="2px">
					<thead>
					<tr>
						<th width="50px">NO</th>
						<th width="100px">Kode Matkul</th>
						<th width="150px">Nama Matkul</th>
						<th width="150px">Nama Dosen</th>
						<th width="50px">Hari</th>
						<th width="100px">Jam</th>
						<th width="50px">SKS</th>
					</tr>
					</thead>
					<tbody>';
					$no=1;
					$total=0;
					while ($row = mysqli_fetch_array($query)) {
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$row['kode_matkul_krs']."</td>";
						echo "<td>".$row['nama_matkul']."</td>";
						echo "<td>".$row['nama']."</td>";
						echo "<td>".$row['hari']."</td>";
						echo "<td>".$row['jam']."</td>";
						echo "<td>".$row['sks']."</td>";
						$no++;
						$total += $row['sks'];
						}
						echo '
						<tr>
							<td colspan="6" align="center" style="border: solid;">TOTAL SKS </td>
								<td style="border: solid;" colspan="2" >' . number_format($total, 0, ',', '.') . '</td>
							</tr>
						</tbody>
					</table>';
				// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
				mysqli_free_result($query);
				
				// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
				mysqli_close($conn);
		?>
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