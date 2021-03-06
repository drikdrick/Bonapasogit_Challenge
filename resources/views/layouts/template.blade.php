<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bonapasogit | @yield('title')</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">3 Notifikasi </span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 Laporan baru
            <span class="float-right text-muted text-sm">2 h</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Lihat semua</a>
        </div>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset('foto/') }}/pp.jfif" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">Fedrick</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <li class="user-header bg-primary">
            <img src="{{ asset('foto/') }}/pp.jfif" class="img-circle elevation-2" alt="User Image">

            <p>
              Fedrick Siagian
              <small>Admin</small>
              <small>superiorsiagian@gmail.com</small>
            </p>
          </li>
          <li class="user-footer">
              <a href="#" class="btn btn-default btn-flat float-left">Profile</a>
              <a href="#" class="btn btn-default btn-flat float-right">Logout</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="{{ asset('foto/') }}/unnamed.png" alt="Bonapasogit" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bonapasogit</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">               
          <li class="nav-header">MAIN NAVIGATION</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fas fa-book nav-icon"></i>
              <p>
                Kelola Soal
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link  {{ request()->is('hasilUjian') ? 'active' : '' }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Hasil Ujian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-plus-square nav-icon"></i>
              <p>Pengaturan Ujian</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fas fa-search nav-icon"></i>
              <p>Panduan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Daftar User</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">

      @yield('content')

    </section>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; Fedrick Sulaiman Siagian</strong> All rights reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('template/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('template/') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('template/') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('template/') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
<script src="{{ asset('template/') }}/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> 
</body>
</html>

