<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
        <img src="assets/img/anyabyte_nobg.png" alt="" width=50>
    </div>
    <div class="sidebar-brand-text">
        <h6>AnyaByte</h6>
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- nav item transaction -->
<li <?php
        if($active == 'product'){ 
            echo 'class="nav-item active"';
        }else{
            echo 'class="nav-item"';
        }
    ?>>
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-list"></i>
        <span>Inventory</span>
    </a>
</li>

<li <?php
        if($active == 'settings'){ 
            echo 'class="nav-item active"';
        }else{
            echo 'class="nav-item"';
        }
    ?>>
    <a class="nav-link" href="settings.php">
        <i class="fas fa-fw fa-cog"></i>
        <span>Settings</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->