
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/css/addons/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/morris.js/morris.css">
 

  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('dashboard')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KOPERASI</b> SP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->fungsi->user_login()->nama?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= site_url('dashboard')?>">
            <i class="glyphicon glyphicon-home"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li>
          <a href="<?= site_url('user')?>">
            <i class="glyphicon glyphicon-user"></i> <span><span>User</span></span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('anggota')?>">
            <i class="glyphicon glyphicon-user"></i> <span>Anggota</span>
          </a>
        </li>

        <li >
          <a href="<?= site_url('pinjaman')?>">
            <i class="glyphicon glyphicon-usd"></i> <span>Pinjaman</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('simpanan')?>">
            <i class="glyphicon glyphicon-floppy-save"></i> <span>Simpanan</span>
          </a>
        </li>
        <li  >
          <a href="<?= site_url('product')?>">
            <i class="glyphicon glyphicon-shopping-cart"></i> <span>Produk</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('')?>">
            <i class="glyphicon glyphicon-book"></i> <span>Laporan Keuangan</span>
          </a>
        </li>
        <li >
          <a href="<?= site_url('grafik/index')?>">
            <i class="glyphicon glyphicon-stats"></i> <span>Grafik</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('auth/logout')?>">
            <i class="glyphicon glyphicon-log-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
        <?php echo $contents?>
   </div>
  
  <footer class="main-footer">
    <strong><center>Copyright &copy; 2019-2020 Kelompok 07 PSWII.</center></strong>
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>

<script src="<?= base_url()?>assets/bower_components/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/morris.js/raphael/raphael.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/morris.js/morris.min.js"></script>

<script src="<?= base_url()?>assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
