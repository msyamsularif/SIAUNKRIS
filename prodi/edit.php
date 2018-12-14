<?php
// include database connection file
include_once("../koneksi.php");

// Check if form is submitted for prodi update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $kode = $_POST['kode'];
    $no_ijin=$_POST['no_ijin'];
    $nama_prodi=$_POST['nama_prodi'];
    $ketua_prodi=$_POST['ketua_prodi'];
    $email=$_POST['email'];
    $status=$_POST['status'];

    // update prodi data
    $query = mysqli_query($conn, "UPDATE data_prodi SET no_ijin='$no_ijin', nama_prodi='$nama_prodi', ketua_prodi='$ketua_prodi', email='$email', status='$status' WHERE kode=$kode");

    // Redirect to homepage to display updated prodi in list
    header("Location: prodi/index.php");
}
?>
<?php
// Display selected prodi data based on kode
// Getting kode from url
$kode = $_GET['kode'];

// Fetech prodi data based on kode
$sql = "SELECT * FROM data_prodi WHERE kode=$kode";
$query = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($query))
{
    $kode = $row['kode'];
    $no_ijin = $row['no_ijin'];
    $nama_prodi = $row['nama_prodi'];
    $ketua_prodi = $row['ketua_prodi'];
    $email = $row['email'];
    $status = $row['status'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>No_ijin</td>
                <td><input type="text" name="no_ijin" value=<?php echo $no_ijin;?>></td>
            </tr>
            <tr> 
                <td>Nama Prodi</td>
                <td><input type="text" name="nama_prodi" value=<?php echo $nama_prodi;?>></td>
            </tr>
            <tr> 
                <td>Ketua Prodi</td>
                <td><input type="text" name="ketua_prodi" value=<?php echo $ketua_prodi;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td><input type="hkodeden" name="kode" value=<?php echo $_GET['kode'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>