<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../public/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php isset($_SESSION['nama_user']); ?></p>
                  <div>
                    <small class="designation text-muted">STATUS</small>
                    <span class="status-indicator online"></span>
                  </div>

                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item <?php if ($page == "dashboard") echo "active"; ?>" >
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
                <li class="nav-item <?php if ($page == "prodi") echo "active"; ?>">
                  <a class="nav-link" href="../prodi">Program Studi</a>
                </li>
                <li class="nav-item <?php if ($page == "dosen") echo "active"; ?>">
                  <a class="nav-link" href="../dosen">Data Dosen</a>
                </li>
                <li class="nav-item <?php if ($page == "gradenilai") echo "active"; ?>">
                  <a class="nav-link" href="#">Grade Nilai</a>
                </li>
                <li class="nav-item <?php if ($page == "tahunangkatan") echo "active"; ?>">
                  <a class="nav-link" href="#">Tahun Angkatan</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item <?php if ($page == "mahasiswa") echo "active"; ?>">
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
                <li class="nav-item <?php if ($page == "tahunakademik") echo "active"; ?>">
                  <a class="nav-link" href="#">Tahun Akademik</a>
                </li>
                <li class="nav-item <?php if ($page == "matakuliah") echo "active"; ?>">
                  <a class="nav-link" href="#">Mata Kuliah</a>
                </li>
                <li class="nav-item <?php if ($page == "jadwalkuliah") echo "active"; ?>">
                  <a class="nav-link" href="#">Jadwal kuliah</a>
                </li>
                <li class="nav-item <?php if ($page == "krs") echo "active"; ?>">
                  <a class="nav-link" href="#">Kartu Rencana Studi</a>
                </li>
                <li class="nav-item <?php if ($page == "khs") echo "active"; ?>">
                  <a class="nav-link" href="#">Kartu Hasil Studi</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-keuangan" aria-expanded="false" aria-controls="ui-keuangan">
              <i class="menu-icon mdi mdi-square-inc-cash"></i>
              <span class="menu-title">Keuangan</span>
              <i class="menu-arrow"></i>
            </a>
          <li class="nav-item <?php if ($page == "penggunasistem") echo "active"; ?>">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-account-settings-variant"></i>
              <span class="menu-title">Pengguna Sistem</span>
            </a>
          </li>
          <li class="nav-item <?php if ($page == "pengaturan") echo "active"; ?>">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-wrench"></i>
              <span class="menu-title">Pengaturan</span>
            </a>
          </li>
          <li class="nav-item <?php if ($page == "team") echo "active"; ?>">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-worker"></i>
              <span class="menu-title">Team Pembuat</span>
            </a>
          </li>
        </ul>
      </nav>