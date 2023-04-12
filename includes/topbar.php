<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>



<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">



    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
            <img class="img-profile rounded-circle" src="assets/img/anyabyte_nobg.png">
        </a>
    </li>
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item">
        <i class="fa fa-sign-out"></i>
        <button type="button" class="nav-link btn" data-bs-toggle="modal"
            data-bs-target="#modalLogout">
            <strong>
                <i class="bi bi-box-arrow-right text-dark mr-2"></i>
            </strong>

        </button>
        <!-- logout modal -->
        <div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to logout?
                    </div>
                    <div class="modal-footer">
                        <form action="login.php" method="post">
                            <button type="submit" class="btn btn-success">Yes</button>
                        </form>
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end logout modal -->
    </li>


</ul>

</nav>
<!-- End of Topbar -->