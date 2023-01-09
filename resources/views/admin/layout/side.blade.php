 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">KASIR PINTAR</div>
     </a>

     <hr class="sidebar-divider my-0">

     <li class="nav-item">
         <a class="nav-link {{ Request::is('/dashboard*') ? 'active' : '' }}" aria-current="page"  href="/secret/admin/dashboard">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>


     <hr class="sidebar-divider">

     <div class="sidebar-heading">
         Interface
     </div>

     <li class="nav-item">
         <a class="nav-link {{ Request::is('/menu*') ? 'active' : '' }}" href="/secret/admin/menu">
             <i class="fas fa-fw fa-cog"></i>
             <span>Daftar Menu </span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link  {{ Request::is('/detailpesanan*') ? 'active' : '' }} "   href="/secret/admin/detailpesanan">
             <i class="fa fa-cart-plus "></i>
             <span>Detail Pesanan </span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link {{ Request::is('/pesanan*') ? 'active' : '' }}" href="/secret/admin/pesanan">
             <i class="fa fa-cart-plus "></i>
             <span> Pesanan </span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link {{ Request::is('/manageuser*') ? 'active' : '' }}" href="/secret/admin/user">
             <i class="fa fa-user-plus "></i>
             <span>Manage User </span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link {{ Request::is('/meja*') ? 'active' : '' }}" href="/secret/admin/meja">
             <i class="fa fa-table "></i>
             <span>Meja</span>
         </a>
     </li>

     <hr class="sidebar-divider d-none d-md-block">

     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>