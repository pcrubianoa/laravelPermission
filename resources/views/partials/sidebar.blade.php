  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="{{ url('/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">{{ trans('global.global_title') }}</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ url('/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                  <img src="{{ url('/img/dashboard.png') }}" alt="User Image" width="20">
                  <p>
                    @lang('global.app_dashboard')
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <img src="{{ url('/img/management.png') }}" alt="User Image" width="20">
                  <p>
                    @lang('global.user-management.title')
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link active">
                      <img src="{{ url('/img/permissions.png') }}" alt="User Image" width="20">
                      <p>
                        @lang('global.permissions.title')
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <img src="{{ url('/img/roles.png') }}" alt="User Image" width="20">
                      <p>
                          @lang('global.roles.title')
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <img src="{{ url('/img/users.png') }}" alt="User Image" width="20">
                      <p>
                          @lang('global.users.title')
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img src="{{ url('/img/password.png') }}" alt="User Image" width="20">
                  <p>
                    Change Password
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#logout" onclick="$('#logout').submit();">
                  <img src="{{ url('/img/logout.png') }}" alt="User Image" width="20">
                  <p>
                    @lang('global.app_logout')
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>