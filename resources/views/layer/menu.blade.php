<section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('dist/img/photo3.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{Session::get('ten_admin')}}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <!-- search form (Optional) -->
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

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="home"><a href="{{ url('admin/welcome') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="admin"><a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>Admin Manager</span></a></li>
        <li class="treeview hotel menu-open1 hotel1 menu-open1 hotel2 menu-open1">
            <a href="#"><i class="fa fa-building"></i> <span>Hotel Manager</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li class="hotel"><a href="{{ url('admin/hotel') }}"><i class="fa fa-building-o"></i>Hotel</a></li>
                <li class="hotel1"><a href="{{ url('admin/type') }}"><i class="fa fa-hacker-news"></i>Type Room</a></li>
                <li class="hotel2"><a href="{{ url('admin/room') }}"><i class="fa fa-home"></i>Room</a></li>
                <li class="hotel3"><a href="{{ url('admin/post') }}"><i class="fa fa-paste"></i>Post</a></li>
            </ul>
        </li>

        <li class="bill"><a href="{{ url('admin/bill') }}"><i class="fa fa-money"></i> <span>Bill</span></a></li>

        <li class="cus"><a href="{{ url('admin/customer') }}"><i class="fa fa-group"></i> <span>Customer</span></a></li>
        <li class="profile"><a href="{{ url('admin/profile') }}"><i class="fa  fa-user-md"></i> <span>Frofile</span></a></li>
        <li class=""><a href="{{ url('admin/logout') }}"><i class="fa  fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
