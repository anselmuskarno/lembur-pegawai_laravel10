<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> ADMIN - SDN 3 Toraja Utara </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/handayani.png">

  <link href="admin/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

  <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">

  <link rel="stylesheet" href="admin/assets/css/fullcalendar.min.css">

  <link rel="stylesheet" href="admin/assets/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">

  <link rel="stylesheet" href="admin/assets/css/style.css">
  <!--[if lt IE 9]>
		<script src="admin/assets/js/html5shiv.min.js"></script>
		<script src="admin/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

  <div class="main-wrapper">

    <div class="header-outer">
      <div class="header">
        <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
        <a id="toggle_btn" class="float-left" href="javascript:void(0);">
          <img src="admin/assets/img/sidebar/icon-21.png" alt="">
        </a>

        <ul class="nav float-left">
          <li>
            <div class="top-nav-search">
              <a href="javascript:void(0);" class="responsive-search">
                <i class="fa fa-search"></i>
              </a>
              <form action="search.html">
                <input class="form-control" type="text" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </li>
          <li>
            <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img src="admin/assets/img/logo1.png" alt="" width="30" height="30"></a>
          </li>
        </ul>

        <ul class="nav user-menu float-right">
          <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <img src="admin/assets/img/sidebar/icon-22.png" alt="">
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span>Notifications</span>
              </div>
              <div class="drop-scroll">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media">
                        <span class="avatar">
                          <img alt="John Doe" src="admin/assets/img/user-06.jpg" class="img-fluid rounded-circle">
                        </span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">John Doe</span> is
                            now following you </p>
                          <p class="noti-time"><span class="notification-time">4 mins
                              ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media">
                        <span class="avatar">T</span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Tarah
                              Shropshire</span> sent you a message.</p>
                          <p class="noti-time"><span class="notification-time">6 mins
                              ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media">
                        <span class="avatar">L</span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Misty Tison</span>
                            like your photo.</p>
                          <p class="noti-time"><span class="notification-time">8 mins
                              ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media">
                        <span class="avatar">G</span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Rolland
                              Webber</span> booking appoinment for meeting.</p>
                          <p class="noti-time"><span class="notification-time">12 mins
                              ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media">
                        <span class="avatar">T</span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Bernardo
                              Galaviz</span> like your photo.</p>
                          <p class="noti-time"><span class="notification-time">2 days
                              ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="activities.html">View all Notifications</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-sm-block">
            <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="admin/assets/img/sidebar/icon-23.png" alt=""> </a>
          </li>
          <li class="nav-item dropdown has-arrow">
            <a href="#" class=" nav-link user-link" data-toggle="dropdown">
              <span class="user-img"><img class="rounded-circle" src="admin/assets/img/user-06.jpg" width="30" alt="Admin">
                <span class="status online"></span></span>
              <span>Admin</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
        </ul>
        <div class="dropdown mobile-user-menu float-right">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>


    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <div class="header-left">
            <a href="/halamanAdmin" class="logo">
              <img src="smartedu-master\images\lainnya\handayani.png" width="40" height="40" alt="">
              <span class="text-uppercase">SDN 3 TORUT</span>
            </a>
          </div>
          <ul class="sidebar-ul">
            <li class="menu-title">Menu</li>
            <li class="active">
              <a href="/halamanAdmin"><img src="admin/assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
            </li>
            <li class="">
              <a href="/guruAdmin"><img src="admin/assets/img/sidebar/icon-2.png" alt="icon"> <span> Guru</span>
              </a>
            </li>
            <li class="">
              <a href="/siswa"><img src="admin/assets/img/sidebar/icon-3.png" alt="icon"> <span> Siswa</span>
              </a>
            </li>
            <li>
              <a href="/beritaAdmin"><img src="admin/assets/img/sidebar/icon-6.png" alt="icon">
                <span>Berita/Blog</span></a>
            </li>
            <li>
              <a href="/pengumumanAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Pengumuman</span></a>
            </li>
            <li>
              <a href="/agendaAdmin"><img src="admin/assets/img/sidebar/icon-9.png" alt="icon"><span>
                  Agenda</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="page-wrapper">
      <div class="content container-fluid">

        <div class="page-header">
          <div class="row">
            <div class="col-md-6">
              <h3 class="page-title mb-0">Dashboard</h3>
            </div>
            <div class="col-md-6">
              <ul class="breadcrumb mb-0 p-0 float-right">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item"><span>Dashboard</span></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <span class="float-left"><img src="admin/assets/img/dash/dash-1.png" alt="" width="80"></span>
              <div class="dash-widget-info text-right">
                <span>Admin</span>
                <h3> {{ $admin }} </h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <span class="float-left"><img src="admin/assets/img/dash/dash-1.png" alt="" width="80"></span>
              <div class="dash-widget-info text-right">
                <span>Siswa</span>
                <h3> {{ $siswa }} </h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <div class="dash-widget-info text-left d-inline-block">
                <span>Guru</span>
                <h3>{{ $guru }}</h3>
              </div>
              <span class="float-right"><img src="admin/assets/img/dash/dash-2.png" width="80" alt=""></span>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <span class="float-left"><img src="admin/assets/img/dash/dash-3.png" alt="" width="80"></span>
              <div class="dash-widget-info text-right">
                <span>Berita</span>
                <h3>{{ $berita }}</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <div class="dash-widget-info d-inline-block text-left">
                <span>Pengumuman</span>
                <h3>{{ $pengumuman }}</h3>
              </div>
              <span class="float-right"><img src="admin/assets/img/dash/dash-4.png" alt="" width="80"></span>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <div class="dash-widget-info d-inline-block text-left">
                <span>Agenda</span>
                <h3>{{ $agenda }}</h3>
              </div>
              <span class="float-right"><img src="admin/assets/img/dash/dash-4.png" alt="" width="80"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="admin/assets/js/jquery-3.6.0.min.js"></script>

  <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

  <script src="admin/assets/js/jquery.slimscroll.js"></script>

  <script src="admin/assets/js/select2.min.js"></script>
  <script src="admin/assets/js/moment.min.js"></script>

  <script src="admin/assets/js/fullcalendar.min.js"></script>
  <script src="admin/assets/js/jquery.fullcalendar.js"></script>

  <script src="admin/assets/plugins/morris/morris.min.js"></script>
  <script src="admin/assets/plugins/raphael/raphael-min.js"></script>
  <script src="admin/assets/js/apexcharts.js"></script>
  <script src="admin/assets/js/chart-data.js"></script>

  <script src="admin/assets/js/app.js"></script>
</body>

</html>