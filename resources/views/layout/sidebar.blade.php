<div class="sidebar">
      <!-- Sidebar user (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="{{ route('dashboard-index') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('purchaseorder-index') }}" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Purchase Order
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                <p>
                    Stock
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('material-index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Material</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('finish-good-index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Finish Good</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('production-index') }}" class="nav-link">
                <i class="nav-icon fas fa-download"></i>
                <p>
                    Data IN (Finishgood)
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{ route('delivery-index') }}" class="nav-link">
                <i class="nav-icon fas fa-truck"></i>
                <p>
                    Delivery
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="/laporan" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Laporan
                </p>
                </a>
            </li>
            @if(auth()->user()->level == 1)
            <li class="nav-item has-treeview">
                <a href="{{ route('user-index') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    User
                </p>
                </a>
            </li>
            @endif
            <li class="nav-item has-treeview">
                <a href="{{ route('logout') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>