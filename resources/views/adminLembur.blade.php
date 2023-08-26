<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Data Lembur - pipentech.com</title>
  <!-- Favicon-->
  <link rel="icon" href="admin/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

  <!-- Bootstrap Core Css -->
  <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Waves Effect Css -->
  <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- JQuery DataTable Css -->
  <link href="admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
  <!-- Search Bar -->
  <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
      <i class="material-icons">close</i>
    </div>
  </div>
  <!-- #END# Search Bar -->
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
              <li><a href="/" onclick="return ('Apakah Anda yakin ingin meninggalkan halaman ini?')"><i class="material-icons">input</i>Sign Out</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <li class="header">MAIN NAVIGATION</li>
          <li class="">
            <a href="/adminPage">
              <i class="material-icons">home</i>
              <span>BERANDA</span>
            </a>
          </li>
          <li class="">
            <a href="/adminPegawai">
              <i class="material-icons">contacts</i>
              <span>PEGAWAI</span>
            </a>
          </li>
          <!-- <i class="material-icons">account_balance_wallet</i> -->
          <li class="active">
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


      <!-- Exportable Table -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <div class="header">
              <h2>
                DATA LEMBUR
              </h2>
              <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                  @foreach ($data_lembur as $dl)
                  <a href="#!" data-toggle="modal" data-target="#editUpahModal{{ $dl->id }}">
                    <button class="btn btn-light btn-lg btn-block waves-effect" data-toggle="tooltip" data-placement="top" title="Klik untuk mengubah jumlah lembur" type="button">Upah Per Jam <span class="badge">Rp{{ $dl->upah_perjam }} </span></button>
                  </a>
                  @endforeach
                </li>
              </ul>
            </div>
            <div class="body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable d-flex">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Pegawai</th>
                      <th>Tanggal Lembur</th>
                      <th>Mulai</th>
                      <th>Selesai</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Pegawai</th>
                      <th>Tanggal Lembur</th>
                      <th>Mulai</th>
                      <th>Selesai</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($lembur as $l)
                    <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td>
                        {{ $l->nama_pegawai }} <br>
                        <?php if ($l->status == "belum") { ?>
                          <span class="badge bg-pink">Belum ACC</span>
                        <?php } else { ?>
                          <span class="badge bg-teal">Sudah ACC</span>
                        <?php } ?>
                      </td>
                      <td> {{ $l->tanggal_lembur }} </td>
                      <td> {{ $l->jam_mulai }} </td>
                      <td> {{ $l->jam_selesai }} </td>
                      <td>

                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal{{ $l->id }}">Edit</button>
                        <a href="/hapusLembur/{{ $l->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="#!" class="btn btn-sm  bg-purple" data-toggle="modal" data-target="#detailModal{{ $l->id }}">Detail</a>

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- #END# Exportable Table -->
    </div>
  </section>

  <!-- Modal Detail -->
  @foreach ($lembur as $l)
  <div class="modal fade" id="detailModal{{ $l->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="defaultModalLabel">Detail Data Pegawai</h4>
        </div>
        <hr>
        <div class="modal-body">
          <form>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->nama_pegawai }}" name="nama_pegawai" disabled>
                <label class="form-label">Nama Pegawai</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->nomor_hp }}" name="nomor_hp" disabled>
                <label class="form-label">Nomor HP</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->jabatan }}" name="jabatan" disabled>
                <label class="form-label">Jabatan</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->tanggal_lembur }}" name="tanggal_lembur" disabled>
                <label class="form-label">Tanggal Lembur</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->jam_mulai }}" name="jam_mulai" disabled>
                <label class="form-label">Jam Mulai</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->jam_selesai }}" name="jam_selesai" disabled>
                <label class="form-label">Jam Selesai</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->upah_perjam }}" name="upah_perjam" disabled>
                <label class="form-label">Upah Per Jam</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->total_upah }}" name="total_upah" disabled>
                <label class="form-label">Total Upah</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->hal_yang_dikerjakan }}" name="hal_yang_dikerjakan" disabled>
                <label class="form-label">Hal Yang Dikerjakan</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->status }}" name="status" disabled>
                <label class="form-label">Status</label>
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <!-- <button class="btn btn-primary waves-effect" type="submit">Simpan Perubahan</button> -->
          <button class="btn bg-purple waves-effect" type="button" data-dismiss="modal">Tutup</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- Modal Edit -->
  @foreach ($lembur as $l)
  <div class="modal fade" id="editModal{{ $l->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="defaultModalLabel">Edit Data Pegawai</h4>
        </div>
        <hr>
        <div class="modal-body">
          <form action="/editLembur/{{ $l->id }}" method="POST">
            @csrf
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->nama_pegawai }}" name="nama_pegawai" readonly>
                <label class="form-label">Nama Pegawai</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->nomor_hp }}" name="nomor_hp" readonly>
                <label class="form-label">Nomor HP</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->jabatan }}" name="jabatan" readonly>
                <label class="form-label">Jabatan</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->tanggal_lembur }}" name="tanggal_lembur" readonly>
                <label class="form-label">Tanggal Lembur</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->jam_mulai }}" name="jam_mulai" readonly>
                <label class="form-label">Jam Mulai</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->jam_selesai }}" name="jam_selesai" readonly>
                <label class="form-label">Jam Selesai</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->upah_perjam }}" name="upah_perjam" readonly>
                <label class="form-label">Upah Per Jam</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->total_upah }}" name="total_upah" readonly>
                <label class="form-label">Total Upah</label>
              </div>
            </div>
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $l->hal_yang_dikerjakan }}" name="hal_yang_dikerjakan" readonly>
                <label class="form-label">Hal Yang Dikerjakan</label>
              </div>
            </div>
            <div class="col-12">
              <label class="form-label">Status Persetujuan Lembur</label>
              <div class="form-group">
                <select class="form-control" name="status">
                  <option value="{{ $l->status }}">{{ $l->status }}</option>
                  <option value="belum">Belum ACC</option>
                  <option value="ACC">ACC</option>
                </select>
              </div>
            </div>
            <div style="height: 40px;"></div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary waves-effect" type="submit">Simpan Perubahan</button>
          <button class="btn bg-purple waves-effect" type="button" data-dismiss="modal">Tutup</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- Modal Edit Lembur -->
  @foreach ($data_lembur as $dl)
  <div class="modal fade" id="editUpahModal{{ $dl->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="defaultModalLabel">Edit Jumlah Upah Lembur</h4>
        </div>
        <hr>
        <div class="modal-body">
          <form action="/editUpahLembur" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $dl->id }}">
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" class="form-control" value="{{ $dl->upah_perjam }}" name="upah_perjam" required>
                <label class="form-label">Upah Per Jam</label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary waves-effect" type="submit">Simpan Perubahan</button>
          <button class="btn bg-purple waves-effect" type="button" data-dismiss="modal">Tutup</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

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

  <!-- Jquery DataTable Plugin Js -->
  <script src="admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
  <script src="admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
  <script src="admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
  <script src="admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
  <script src="admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
  <script src="admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
  <script src="admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
  <script src="admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
  <script src="admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

  <!-- Custom Js -->
  <script src="admin/js/admin.js"></script>
  <script src="admin/js/pages/tables/jquery-datatable.js"></script>

  <!-- Demo Js -->
  <script src="admin/js/demo.js"></script>
  <script src="admin/js/pages/ui/tooltips-popovers.js"></script>
</body>

</html>