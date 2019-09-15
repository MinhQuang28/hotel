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
        <li class="admin"><a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>Quản lý Admin</span></a></li>
        <li class="treeview hotel menu-open1 hotel1 menu-open1 hotel2 menu-open1 hotel3 menu-open1">
            <a href="#"><i class="fa fa-building"></i> <span>Quản lý khách sạn</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li class="hotel"><a href="{{ url('admin/hotel') }}"><i class="fa fa-building-o"></i>Hotel</a></li>
                <li class="hotel1"><a href="{{ url('admin/type') }}"><i class="fa fa-hacker-news"></i>Loại Phòng</a></li>
                <li class="hotel2"><a href="{{ url('admin/room') }}"><i class="fa fa-home"></i>Phòng</a></li>
                <li class="hotel3"><a href="{{ url('admin/post') }}"><i class="fa fa-paste"></i>Bài đăng</a></li>
            </ul>
        </li>
        <li class="treeview bill menu-open1 bill1 menu-open1 bill2 menu-open1">
            <a href="#"><i class="fa fa-money"></i> <span>Quản lý hoá đơn</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
           
                <li class="bill2"><a href="{{ url('admin/bill/xuly') }}"><i class="fa fa-hacker-news"></i>Cần sử lý</a></li>
               <li class="bill1"><a href="{{ url('admin/bill/week') }}"><i class="fa fa-money"></i> <span>7 ngày gần đây</span></a></li>
                <li class="bill"><a href="{{ url('admin/bill') }}"><i class="fa fa-paste"></i>Tất cả hoá đơn </a></li>
            </ul>
        </li>

        

        <li class="cus"><a href="{{ url('admin/customer') }}"><i class="fa fa-group"></i> <span>Quản lý khách hàng</span></a></li>
        <li class="thong_ke"><a href="{{ url('admin/Thong_ke') }}"><i class="fa fa-group"></i> <span></span>Thống Kê</a></li>
        <li class="feed_back"><a href="{{ url('admin/view_feed_back') }}"><i class="fa fa-group"></i> <span></span>Phản hồi</a></li>
        <li class="profile"><a href="{{ url('admin/profile') }}"><i class="fa  fa-user-md"></i> <span>Frofile</span></a></li>
        <li class=""><a href="{{ url('admin/logout') }}"><i class="fa  fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
