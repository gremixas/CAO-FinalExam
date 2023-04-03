<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ asset('adminlte/index3.html') }}" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.home') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="user-panel nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-header">Data Tables</li>
                <li class="nav-item">
                    <a href="{{ route('admin.cars.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Cars
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.bookings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Bookings
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <!-- Links Menu -->
        <nav class="mt-2 user-panel">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-header">Links</li>

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                {{-- <li class="nav-header">Data Tables</li> --}}
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" class="nav-link">
                        @csrf
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <a href={{ route('logout') }}
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            Log Out
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        
    </div>
    <!-- /.sidebar -->
</aside>