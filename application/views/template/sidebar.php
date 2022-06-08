
  <!-- Left side column. contains the logo and sidebar -->
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
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= site_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('user')?>">
            <i class="fa fa-user-circle"></i> <span><span>User</span></span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('anggota')?>">
            <i class="fa fa-address-card"></i> <span>Anggota</span>
          </a>
        </li>
        <li >
          <a href="#">
            <i class="fa fa-money"></i> <span>Pinjaman</span>
          </a>
        </li>
        <li  >
          <a href="#">
            <i class="fa fa-suitcase"></i> <span>Simpanan</span>
          </a>
        </li>
        <li  >
          <a href="<?= site_url('auth/logout')?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>