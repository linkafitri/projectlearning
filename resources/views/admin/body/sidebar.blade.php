<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">

    <div class="user-profile">
      <div class="ulogo">
        <a href="index.html">
          <!-- logo for regular state and mobile devices -->
          <div class="d-flex align-items-center justify-content-center">
            <img src="{{asset('backend/images/logo-dapoerumma.jpeg')}}" alt="">
            <h3><b>Dapoer</b> Umma</h3>
          </div>
        </a>
      </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="treeview">
        <a href="#">
          <i data-feather="message-circle"></i>
          <span>Kelola User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Tampilkan User</a></li>
          <li><a href="{{route('user.add')}}"><i class="ti-more"></i>Tambah User</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i data-feather="tag"></i>
          <span>Kelola Produk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('produk.view')}}"><i class="ti-more"></i>Tampilkan Produk</a></li>
          <li><a href="{{route('produk.add')}}"><i class="ti-more"></i>Tambah Produk</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i data-feather="archive"></i>
          <span>Kelola Paket</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('paket.view')}}"><i class="ti-more"></i>Tampilkan Paket</a></li>
          <li><a href="{{route('paket.add')}}"><i class="ti-more"></i>Tambah Paket</a></li>
        </ul>
      </li>

      <li>
        <a href="{{route('admin.logout')}}">
          <i data-feather="lock"></i>
          <span>Log Out</span>
        </a>
      </li>

    </ul>
  </section>

  
</aside>