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

  <link rel="stylesheet" href="admin/assets/plugins/icons/feather/feather.css">

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
            <li class="">
              <a href="/halamanAdmin"><img src="admin/assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
            </li>
            <li class="">
              <a href="/guruAdmin"><img src="admin/assets/img/sidebar/icon-2.png" alt="icon"> <span> Guru</span>
              </a>
            </li>
            <li class=" active">
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

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-sm-6">
                    <div class="page-title">
                      Daftar Siswa (
                      @if ($totalSiswa == 0)
                      <div class="badge bg-danger text-white">
                        {{ ' Total : '. $totalSiswa. ' orang'}}
                      </div>
                      @else ()
                      <div class="badge bg-info text-white">
                        {{ ' Total : '. $totalSiswa. ' orang'}}
                      </div>
                      @endif
                      )
                    </div>
                  </div>
                  <div class="col-sm-6 text-sm-right">
                    <div class=" mt-sm-0 mt-2">
                      <button style="background-color: blue; color:white" data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn mr-2"><i class="fe fe-file-plus"></i><span class="ml-2">Tambah Data</span></button>
                      <button class="btn btn-outline-primary  mr-2"><img src="admin/assets/img/excel.png" alt=""><span class="ml-2">Excel</span></button>
                      <a target="_blank" href="/cetakSiswa" class="btn btn-outline-danger mr-2"><img src="admin/assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></a>
                      <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table custom-table">
                    <thead class="thead-light">
                      <tr>
                        <th>Nama Siswa </th>
                        <th>NIS</th>
                        <th>Tanggal Lahir</th>
                        <th>Sampul Raport</th>
                        <th class="text-right">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($siswa as $s)

                      <tr>
                        <td>
                          <h2> {{ $s->nama_siswa }} </h2>
                        </td>
                        <td> {{ $s->nis_siswa }}</td>
                        <td>
                          {{ $s->tanggal_lahir_siswa }}
                        </td>
                        <td>
                          @if ( $s->sampul_raport == null)
                          <div class="badge bg-danger text-white">Belum ada foto ditambahkan!</div>
                          @else
                          <img src="{{asset('storage/'.$s->sampul_raport )}}" style=" width:50px;height:50px" alt="">
                          @endif
                        </td>
                        <td class="text-right">
                          <a href="#!" class="btn btn-primary btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#editModal{{$s->id}}">
                            <i class="far fa-edit" data-bs-toggle="tooltip" title="Edit"></i>
                          </a>
                          <a href="/hapusSiswa/{{$s->id}}" type="submit" class="btn btn-danger btn-sm mb-1">
                            <i class="far fa-trash-alt" data-bs-toggle="tooltip" title="Hapus"></i>
                          </a>
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>

                  <!-- Modal Tambah -->
                  <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/tambahSiswa" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                              <div class="col-sm-12">
                                <input class="form-control" placeholder="Nama" type="text" name="nama_siswa">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <input class="form-control" name="nis_siswa" id="nis_siswa" placeholder="NIS Siswa" type="text">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <input class="form-control" name="tanggal_lahir_siswa" id="tanggal_lahir_siswa" type="date">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <input class="form-control" name="password_siswa" id="password_siswa" placeholder="Password Siswa" type="password">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Sampul Raport</label>
                                <input class="form-control" type="File" name="sampul_raport" accept="image/*">

                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Modal Edit -->
                  @foreach ($siswa as $s)
                  <div class="modal fade" id="editModal{{$s->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/editSiswa/{{ $s->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="sampulLama" value="{{ $s->sampul_raport }}">
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Nama Siswa</label>
                                <input class="form-control" value="{{ $s->nama_siswa }}" type="text" name="nama_siswa">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">NIS</label>
                                <input class="form-control" value="{{ $s->nis_siswa }}" name="nis_siswa" id="nis_siswa" type="text">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Tanggal Lahir</label>
                                <input class="form-control" value="{{ $s->tanggal_lahir_siswa }}" name="tanggal_lahir_siswa" id="tanggal_lahir_siswa" type="date">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Password Siswa</label>
                                <input class="form-control" name="password_siswa" id="password_siswa" type="password">
                                <small class="text-danger"> <i>*Kosongkan jika tidak ingin ganti password</i> </small>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label for="">Sampul Raport</label>
                                @if ( $s->sampul_raport == null)
                                <div class="badge bg-danger text-white">Belum ada Foto Sampul ditambahkan</div>
                                <input class="form-control" type="File" name="sampul_raport" accept="image/*">>
                                @else
                                <br>
                                <img src="{{asset('storage/'.$s->sampul_raport )}}" alt="" class="thumbnail" style="width:30%">
                                <br>
                                <div class="badge bg-warning text-white">Jika anda ingin mengganti Sampul Raport, Klik tombol di bawah!</div>
                                <input class="form-control" type="File" name="sampul_raport" accept="image/*">
                                @endif
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script src="bootstrap.bundle.min.js"></script>
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