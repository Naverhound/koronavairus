<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa fa-wine-bottle" aria-hidden="true"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{$prueba}} </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
    <a class="nav-link" href="{{route('admin.index')}}">
        <i class="fa fa-globe" aria-hidden="true"></i>
        <span>Home</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
    <a class="nav-link" href="{{route('admin.user.index')}}">
          <i class="fas fa-fw fa-user-check"></i>
          <span>Users Control</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-right d-none d-md-inline mr-2">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>