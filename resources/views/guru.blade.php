<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title> SDN 3 Toraja Utara</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<link href="smartedu-master/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="smartedu-master/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

<!-- Site Icons -->
<link rel="shortcut icon" href="smartedu-master/images/lainnya/handayani.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="smartedu-master/images/lainnya/handayani.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="smartedu-master/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="smartedu-master/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="smartedu-master/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="smartedu-master/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="smartedu-master/css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="smartedu-master/js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header tit-up">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Customer Login</h4>
        </div>
        <div class="modal-body customer-box">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="Login">
              <form role="form" class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="email1" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                      Submit
                    </button>
                    <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="Registration">
              <form role="form" class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="email" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" id="password" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                      Save &amp; Continue
                    </button>
                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                      Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- LOADER -->
  <div id="preloader">
    <div class="loader-container">
      <div class="progress-br float shadow">
        <div class="progress__item"></div>
      </div>
    </div>
  </div>
  <!-- END LOADER -->

  <!-- Start header -->
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="smartedu-master/images/logoSDN3.png" width="150px" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-host">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="/guru">Profil Guru</a></li>
            <li class="nav-item"><a class="nav-link" href="/galleri">Galleri</a></li>
            <li class="nav-item"><a class="nav-link" href="/raport" target="_blank">Raport</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Lainnya
                <i class="bi bi-grid-3x3-gap"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="/agenda">Agenda </a>
                <a class="dropdown-item" href="/pengumuman">Pengumuman </a>
                <a class="dropdown-item" href="/berita">Berita</a>
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Login</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->

  <div class="all-title-box wow fadeInLeft">
    <div class="container text-center wow fadeInUp">
      <h1>Profil Guru<span class="m_1">SD Negeri 3 Toraja Utara</span></h1>
    </div>
  </div>

  <div id="teachers" class="section wb">
    <div class="container">
      <div class="row">

        @foreach ($guru as $g)
        <div class="col-lg-3 col-md-6 col-6 wow fadeInUp">
          <div class="our-team">
            <div class="team-img">
              <img src="{{asset('storage/'.$g->foto )}}" style="height: 324px;">
              <div class="social">
                <ul>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-twitter"></a></li>
                </ul>
              </div>
            </div>
            <div class="team-content" data-toggle="modal" data-target="#Modal{{$loop->iteration}}">
              <h3 class="title"> {{ $g->nama_guru }} </h3>
              <span class="post">{{ $g->kelas_yang_diajar }}</span>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="Modal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Biodata Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <table class="table table-striped" style="text-align: left; padding:0;">


                  <tr>
                    <th scope="row">Nama</th>
                    <td>:</td>
                    <td>{{ $g->nama_guru }}</td>

                  </tr>
                  <tr>
                    <th scope="row">NIP</th>
                    <td>:</td>
                    <td>{{ $g->nip_guru }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tempat, Tanggal Lahir</th>
                    <td>:</td>
                    <td>{{ $g->tempat_lahir }}, {{ $g->tanggal_lahir_guru }} </td>
                  </tr>
                  <tr>
                    <th scope="row">Jabatan</th>
                    <td>:</td>
                    <td>{{ $g->jabatan }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>:</td>
                    <td>{{ $g->jenis_kelamin }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Agama</th>
                    <td>:</td>
                    <td>{{ $g->agama }}</td>
                  </tr>
                  <tr>
                    <th scope="row">No. HP</th>
                    <td>:</td>
                    <td>{{ $g->nomor_hp }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td>:</td>
                    <td>{{ $g->email }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Kelas Yang diajar</th>
                    <td>:</td>
                    <td>{{ $g->kelas_yang_diajar }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Alamat</th>
                    <td>:</td>
                    <td>{{ $g->alamat }}</td>
                  </tr>
                </table>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end section -->

  <div class="parallax section dbcolor">
    <div class="container">
      <div class="row logos">

        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp">
          <a href="#"><img src="smartedu-master/images/lainnya/handayani.png" style="width:100px" alt="" class="img-repsonsive"></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp">
          <a href="#"><img src="smartedu-master/images/lainnya/provinsi.png" style="width:100px" alt="" class="img-repsonsive"></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp">
          <a href="#"><img src="smartedu-master/images/lainnya/kabupaten.png" style="width:100px" alt="" class="img-repsonsive"></a>
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end section -->

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>SDN 3 RANTEPAO</h3>
            </div>
            <p> </p>
            <div class="footer-right">
              <ul class="footer-links-soi">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul><!-- end links -->
            </div>
          </div><!-- end clearfix -->
        </div><!-- end col -->

        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>Information Link</h3>
            </div>
            <ul class="footer-links">
              <li><a href="/">Home</a></li>
              <li><a href="#">Profil Guru</a></li>
              <li><a href="#">Galleri</a></li>
              <li><a href="#">Raport</a></li>
              <li><a href="#">Contact</a></li>
            </ul><!-- end links -->
          </div><!-- end clearfix -->
        </div><!-- end col -->

        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>Contact Details</h3>
            </div>

            <ul class="footer-links">
              <li><a href="mailto:#">sdn.3rantepao@gmail.com</a></li>
              <li><a href="#">www.sdn3rantepao.com</a></li>
              <li>Jln. Budi Utomo No. 10 Rantepao</li>
              <li>(0423) 25046</li>
            </ul><!-- end links -->
          </div><!-- end clearfix -->
        </div><!-- end col -->

      </div><!-- end row -->
    </div><!-- end container -->
  </footer><!-- end footer -->

  <div class="copyrights">
    <div class="container">
      <div class="footer-distributed">
        <div class="footer-center">
          <p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="/">SDN 3 Torut</a> </p>
        </div>
      </div>
    </div><!-- end container -->
  </div><!-- end copyrights -->

  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="smartedu-master/js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="smartedu-master/js/custom.js"></script>

</body>

</html>