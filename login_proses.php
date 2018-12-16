<?php
session_start();

include "koneksi.php";
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    
                    
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['nama'] = $row['nama'];
        
        if($row['level'] == "admin")
        {
            
            header("Location:dashboard/index.php");
        }
        else if($row['level'] == "dosen")
        {
            
            header("Location:dashboard/index.php");
        }
        else if($row['level'] == "prodi")
        {
            
            header("Location:dashboard/index.php");
        }
        else if($row['level'] == "mahasiswa")
        {
            
            header("Location:dashboard/index.php");
        }
        else
        {
            header("location:index.php?pesan=belum_login");
            //$error = "Failed Login";
        }
    }
    if (!isset($_SESSION['level']))
    {
        header("location:index.php?pesan=gagal");
        //echo "<script> alert('ANDA BELUM TERDAFTAR !');document.location.href='index.php'</script>";
    }
}           
?>