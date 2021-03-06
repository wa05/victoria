@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          
          <li class="treeview">
            <a href="#"><i class="fa fa-book"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/blog') }}"><i class="fa fa-newspaper-o"></i> {{ trans('backpack::base.blog') }}</a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/categories') }}"><i class="fa fa-pencil-square-o"></i> {{ trans('backpack::base.categorias') }}</a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/tags') }}"><i class="fa fa-tags"></i> Tags</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-picture-o"></i> <span>Galeria</span></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/fotos') }}"><i class="fa fa-newspaper-o"></i> Fotos </a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/album') }}"><i class="fa fa-book"></i> Albums </a></li>
            </ul>
          </li>
          
          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
