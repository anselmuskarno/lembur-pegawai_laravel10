<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Halaman Admin</title>
  <!-- Favicon-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

  <!-- Bootstrap Core Css -->
  <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Waves Effect Css -->
  <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- Morris Chart Css-->
  <link href="admin/plugins/morrisjs/morris.css" rel="stylesheet" />

  <!-- Custom Css -->
  <link href="admin/css/style.css" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Please wait...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->

  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid" style="background-image: url('admin/images/bgputih.jpg'); ">
      <div class="navbar-header">
        <a href="javascript:void(0);" style="color:green;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" style="color:green;" class="bars"></a>
        <a class="navbar-brand" href="index.html" style="color:green;">ADMIN - MALEA ENERGY HYDROPOWER </a>
      </div>

    </div>
  </nav>
  <!-- #Top Bar -->
  <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info">
        <div class="image">
          <img src="admin/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
          <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
          <div class="email">admin@malea.id</div>
          <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
              <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
              <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
              <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active">
            <a href="/adminPage">
              <i class="material-icons">home</i>
              <span>BERANDA</span>
            </a>
          </li>
          <li>
            <a href="/adminPegawai">
              <i class="material-icons">contacts</i>
              <span>PEGAWAI</span>
            </a>
          </li>
          <!-- <i class="material-icons">account_balance_wallet</i> -->
          <li>
            <a href="/adminLembur">
              <i class="material-icons">layers</i>
              <span>DATA LEMBUR</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- #Menu -->
      <!-- Footer -->
      <div class="legal">
        <div class="copyright">
          &copy; 2021 - 2023 <a href="javascript:void(0);">Admin - MALEA ENERGY HYDROPOWER</a>.
        </div>
        <div class="version">
          <b>Version: </b> 1.0.0
        </div>
      </div>
      <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="block-header">
        <h2>DASHBOARD</h2>
      </div>

      <!-- Widgets -->
      <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
              <i class="material-icons">playlist_add_check</i>
            </div>
            <div class="content">
              <div class="text">USER</div>
              <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
              <i class="material-icons">help</i>
            </div>
            <div class="content">
              <div class="text">ADMIN</div>
              <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
              <i class="material-icons">forum</i>
            </div>
            <div class="content">
              <div class="text">LEMBUR</div>
              <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
              <i class="material-icons">person_add</i>
            </div>
            <div class="content">
              <div class="text">UPAH</div>
              <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- #END# Widgets -->
      <!-- Basic Example -->

      <div class="">

        <div class="card">
          <div class="header bg-cyan">
            <h2>
              PROFIL APLIKASI <small>Malea</small>
            </h2>
            <ul class="header-dropdown m-r--5">
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">more_vert</i>
                </a>
                <ul class="dropdown-menu pull-right">
                  <li><a href="javascript:void(0);">Action</a></li>
                  <li><a href="javascript:void(0);">Another action</a></li>
                  <li><a href="javascript:void(0);">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="body">
            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Jquery Core Js -->
  <script src="admin/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>

  <!-- Select Plugin Js -->
  <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

  <!-- Slimscroll Plugin Js -->
  <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="admin/plugins/node-waves/waves.js"></script>

  <!-- Jquery CountTo Plugin Js -->
  <script src="admin/plugins/jquery-countto/jquery.countTo.js"></script>

  <!-- Morris Plugin Js -->
  <script src="admin/plugins/raphael/raphael.min.js"></script>
  <script src="admin/plugins/morrisjs/morris.js"></script>

  <!-- ChartJs -->
  <script src="admin/plugins/chartjs/Chart.bundle.js"></script>

  <!-- Flot Charts Plugin Js -->
  <script src="admin/plugins/flot-charts/jquery.flot.js"></script>
  <script src="admin/plugins/flot-charts/jquery.flot.resize.js"></script>
  <script src="admin/plugins/flot-charts/jquery.flot.pie.js"></script>
  <script src="admin/plugins/flot-charts/jquery.flot.categories.js"></script>
  <script src="admin/plugins/flot-charts/jquery.flot.time.js"></script>

  <!-- Sparkline Chart Plugin Js -->
  <script src="admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

  <!-- Custom Js -->
  <script src="admin/js/admin.js"></script>
  <script src="admin/js/pages/index.js"></script>

  <!-- Demo Js -->
  <script src="admin/js/demo.js"></script>
</body>

</html>