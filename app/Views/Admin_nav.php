<base href="<?php echo base_url("assets") ?>/">
<!-- Main Sidebar Container -->
<style>
  .nav-sidebar .nav-link.active {
    background-color: #1f2d3d;
    color: #ffffff;
  }

  .nav-sidebar .nav-link:hover {
    background-color: #343a40;
    color: #ffffff;
  }

  .nav-treeview>.nav-item>.nav-link {
    padding-left: 40px;
  }
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block">Informatik UIN Malang</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="<?php echo site_url('Home/home'); ?>" class="nav-link <?= (uri_string() == 'Home/home') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>Home</p>
          </a>
        </li>

        <li class="nav-item <?= (uri_string() == 'datajs/view' || uri_string() == 'datasepatu/view' || uri_string() == 'datasepatu/forminputumkm' || uri_string() == 'datakriteria/view' || uri_string() == 'databobot/view') ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= (uri_string() == 'datajs/view' || uri_string() == 'datasepatu/view' || uri_string() == 'datakriteria/view' || uri_string() == 'databobot/view') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Master Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?php echo site_url('datasepatu/view'); ?>" class="nav-link <?= (uri_string() == 'datasepatu/view') ? 'active' : '' ?>">
                <i class="fas fa-store"></i>
                <p>Data Sepatu</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url('datakriteria/view'); ?>" class="nav-link <?= (uri_string() == 'datakriteria/view') ? 'active' : '' ?>">
                <i class="fas fa-chart-bar"></i>
                <p>Data Kriteria</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url('datanilai/view'); ?>" class="nav-link <?= (uri_string() == 'datanilai/view') ? 'active' : '' ?>">
                <i class="fas fa-list"></i>
                <p>Nilai Alternatif</p>
              </a>
            </li>
            

          </ul>
          <li class="nav-item">
              <a href="<?php echo site_url('Home/formnormalisasi'); ?>" class="nav-link <?= (uri_string() == 'Home/formnormalisasi') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-edit"></i>
                <p>Normalisasi WP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('Home/formpreferensi'); ?>" class="nav-link <?= (uri_string() == 'Home/formpreferensi') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-edit"></i>
                <p>Hasil Preferensi WP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('Home/formrank'); ?>" class="nav-link <?= (uri_string() == 'Home/formrank') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-edit"></i>
                <p>Rank WP</p>
              </a>
            </li>
        </li>
      </ul>
    </nav>
  </div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">

  </div>
  <!-- /.content-header -->