<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../images/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>HI &nbsp; {{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="">
          <a href="{{ url('/admin-dash') }}">
            <i class="fa fa-th"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('all-users') }}"><i class="fa fa-circle-o"></i> All Users</a></li>
            <li><a href="{{ url('new-user') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/my-all-posts') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{ url('/new-post') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <!-- <li><a href=""><i class="fa fa-circle-o"></i> Categories</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Tags</a></li> -->
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Appointments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/all-appointments') }}"><i class="fa fa-circle-o"></i> All Appointments</a></li>
            <li><a href="{{ url('/create-appointments') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>


        <li class="header">LABELS</li>
        <li>
          <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out"></i>Sign Out
          </a>

          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>