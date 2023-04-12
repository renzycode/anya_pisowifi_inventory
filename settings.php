<?php

    include_once '../includes/conn.php';

    $sql1 = 'SELECT * FROM product_table';
    $statement = $pdo->prepare($sql1);
    $statement->execute();
    $products = $statement->fetchAll();

    $active = "settings";

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'includes/head.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once 'includes/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include_once 'includes/topbar.php'; ?>

                <!-- Begin Page Content -->

                <!-- End of Main Content -->
                <!-- Content -->
                <!-- Modal -->
                <div class="modal fade" id="removeModal" tabindex="-1" aria-hidden="true">
                    <form class="row gutters" action="{{ route('admin.remove.image') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Remove Profile Picture</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to remove profile picture?
                                </div>
                                <!-- store email data input -->
                                <input type="hidden" name="email" value="{!! $data['admin_email'] !!}">
                                <!-- end email data input -->
                                <!-- store image data input -->
                                <input type="hidden" name="image" value="{!! $data['admin_image'] !!}">
                                <!-- end image data input -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger cancel-custom-button"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="submit" class="btn btn-success custom-button">Yes</a>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mx-4 ">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                        <h2 class="font-weight-bolder mb-4">Manage Profile</h2>

                        <div class="row ">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 mb-1 ">
                                <div>
                                    <div class="card h-100 shadow p-3 mb-5 bg-white rounded">
                                        <div class="card-body">
                                            <div
                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-start mb-3">
                                                <div class="profile-image-container">

                                                    <img class="profile-image rounded" src="3" />

                                                    <img class="profile-image rounded" src="3" />


                                                    <h3 class="profile-image-remove">
                                                        <i type="button" data-bs-toggle="modal"
                                                            data-bs-target="#removeModal"
                                                            class="bi bi-x-circle-fill"></i>
                                                    </h3>

                                                </div>
                                            </div>

                                            <form class="row gutters" action="{{ route('admin.upload.image') }}"
                                                method="post" enctype="multipart/form-data">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mb-1 text-primary text-custom-color">Upload Profile
                                                        Picture</h6>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-1">
                                                    <div class="form-group">
                                                        <label for="Street">(Format: jpg, jpeg, png)(Max: 5mb)(Size:
                                                            1x1, 2x2)</label><br>
                                                        <input type="file" name="file" accept=".png, .jpg, .jpeg"
                                                            required>
                                                    </div>
                                                </div>
                                                <!-- store email data input -->
                                                <input type="hidden" name="email" value="#">
                                                <!-- end email data input -->

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <br>
                                                    <div class="text-right">
                                                        <a href="#" type="button"
                                                            class="btn btn-danger cancel-custom-button">Cancel</a>
                                                        <button type="submit" id="profile_update"
                                                            class="btn btn-success custom-button">Upload</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form class="row gutters" action="#" method="post">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mb-1 text-primary text-custom-color">Personal Details
                                                    </h6>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                                                    <div class="form-group">
                                                        <label for="firstname">First Name <span
                                                                class="text-danger">*</span></label>
                                                        <input value="lorem" type="text" class="form-control" id="fname"
                                                            placeholder="Enter first name" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                                                    <div class="form-group">
                                                        <label for="lastname">Last Name <span class="text-danger">
                                                                *</span></label>
                                                        <input value="lorem" type="text" class="form-control" id="lname"
                                                            placeholder="Enter last name" name="lname">
                                                    </div>
                                                </div>
                                                <!-- store email data input -->
                                                <input type="hidden" name="email" value="{!! $data['admin_email'] !!}">
                                                <!-- end email data input -->
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                                                    <div class="form-group">
                                                        <label for="number">Phone <span class="text-danger">
                                                                *</span></label>
                                                        <input value="lorem"" type=" text" class="form-control"
                                                            id="number" placeholder="Enter phone number" name="number">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-1">
                                                    <div class="form-group">
                                                        <label for="number">Address<span class="text-danger">
                                                                *</span></label>
                                                        <input value="lorem" type="text" class="form-control"
                                                            id="address" placeholder="Enter address" name="address">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <br>
                                                    <div class="text-right">
                                                        <a href="#" type="button"
                                                            class="btn btn-danger cancel-custom-button">Cancel</a>
                                                        <button type="submit" id="profile_update"
                                                            class="btn btn-success custom-button">Update</button>
                                                    </div>
                                                </div>
                                            </form>


                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <h6 class="mt-3 mb-1 text-primary text-custom-color">Change Password
                                                    </h6>
                                                </div>
                                                <div class=" col-12 mb-1">
                                                    <div class="form-group">
                                                        <label>Current Password<span
                                                                class="text-danger">*</span></label>
                                                        <input type="password" class="form-control"
                                                            id="current-password" placeholder="Enter current password"
                                                            required>
                                                    </div>
                                                </div>

                                                <input type="hidden" id="email-password"
                                                    value="{!! $data['admin_email'] !!}">

                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                                                    <div class="form-group">
                                                        <label>New Password<span class="text-danger">*</span></label>
                                                        <input type="password" class="form-control" id="new-password"
                                                            placeholder="Enter password" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                                                    <div class="form-group">
                                                        <label>Re-enter Password<span
                                                                class="text-danger">*</span></label>
                                                        <input type="password" class="form-control"
                                                            id="confirm-password" placeholder="Re-enter password"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                                    <input type="checkbox"
                                                        class="form-check-input p-2 cursor-pointer border border-dark"
                                                        onclick="toggle_password_1()">
                                                    <label class="form-check-label mx-2" for="privacy-btn-open">Show
                                                        password</label>
                                                    <script>
                                                    function toggle_password_1() {
                                                        var x = document.getElementById("current-password");
                                                        var y = document.getElementById("new-password");
                                                        var z = document.getElementById("confirm-password");
                                                        if (x.type === "password" && y.type === "password" && z.type ===
                                                            "password") {
                                                            x.type = "text";
                                                            y.type = "text";
                                                            z.type = "text";
                                                        } else {
                                                            x.type = "password";
                                                            y.type = "password";
                                                            z.type = "password";
                                                        }
                                                    }
                                                    </script>
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <div class="alert text-center p-1 rounded text-light"
                                                        id="password-msg">
                                                        &nbsp;
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="text-right">
                                                        <a href="#" type="button" id="submit"
                                                            class="btn btn-danger cancel-custom-button">Cancel</a>
                                                        <button type="button" id="change-password"
                                                            class="btn btn-success custom-button">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; AnyaByte Electronics & Merchandise</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/sb-admin-2/sb-admin-2.min.js"></script>


</body>

</html>