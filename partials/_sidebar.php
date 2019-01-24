<?php
include("../koneksi.php");
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../public/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION['nama_user'];?></p>
                  <div>
                    <small class="designation text-muted"><?php echo $_SESSION['level'];?></small>
                    <span class="status-indicator online"></span>
                  </div>

                </div>
              </div>
              <!--<button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>-->
            </div>
          </li>
          <?php
            if($_SESSION['level'] == "1"){
            echo '       
          <li class="nav-item" >
            <a class="nav-link" href="../dashboard/index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-master" aria-expanded="false" aria-controls="ui-master">
              <i class="menu-icon mdi mdi-key-variant"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-master">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../prodi">Program Studi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../ruangan">Ruangan</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../mahasiswa">
              <i class="menu-icon mdi mdi-account-card-details"></i>
              <span class="menu-title">Mahasiswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-akademik" aria-expanded="false" aria-controls="ui-akademik">
              <i class="menu-icon mdi mdi-book-open-variant"></i>
              <span class="menu-title">Akademik</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-akademik">
              <ul class="nav flex-column sub-menu">
                <!--<li class="nav-item">
                  <a class="nav-link" href="#">Tahun Akademik</a>
                </li>-->
                <li class="nav-item">
                  <a class="nav-link" href="../matakuliah">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../jadwal">Jadwal kuliah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../krs">Kartu Rencana Studi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../khs">Kartu Hasil Studi</a>
                </li>
              </ul>
            </div>
          </li>';
            }
          
           else if($_SESSION['level'] == "4"){
            echo'<li class="nav-item" >
            <a class="nav-link" href="../dashboard/index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-akademik" aria-expanded="false" aria-controls="ui-akademik">
              <i class="menu-icon mdi mdi-book-open-variant"></i>
              <span class="menu-title">Akademik</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-akademik">
              <ul class="nav flex-column sub-menu">
                <!--<li class="nav-item">
                  <a class="nav-link" href="#">Tahun Akademik</a>
                </li>-->
                <li class="nav-item">
                  <a class="nav-link" href="../matakuliah">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../jadwal">Jadwal kuliah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../krs">Kartu Rencana Studi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../khs">Kartu Hasil Studi</a>
                </li>
              </ul>
            </div>
          </li>';
           }
          
          else if($_SESSION['level'] == "3"){
           echo'<li class="nav-item" >
            <a class="nav-link" href="../dashboard/index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="../daftar_mahasiswa">
              <i class="menu-icon mdi mdi-account-card-details"></i>
              <span class="menu-title">Daftar Mahasiswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../jadwal">
              <i class="menu-icon mdi mdi-book-open-variant"></i>
              <span class="menu-title">Jadwal Kuliah</span>
            </a>
          </li>'; 
          }
          
          else if($_SESSION['level'] == "2"){
           echo'<li class="nav-item" >
            <a class="nav-link" href="../dashboard/index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-master" aria-expanded="false" aria-controls="ui-master">
              <i class="menu-icon mdi mdi-key-variant"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-master">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../dosen">Data Dosen</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../mahasiswa">
              <i class="menu-icon mdi mdi-account-card-details"></i>
              <span class="menu-title">Mahasiswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../jadwal">
              <i class="menu-icon mdi mdi-book-open-variant"></i>
              <span class="menu-title">Jadwal Kuliah</span>
            </a>
          </li>'; 
          }
          else{
            header("location:../error-404.php");
          }
          ?>
        </ul>
      </nav>