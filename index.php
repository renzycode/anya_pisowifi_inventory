<?php

    include_once 'includes/conn.php';
    $sql = 'SELECT * FROM pisowifi_parts_inventory';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $items = $statement->fetchAll();

    $active = "product";

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
                <div class="container-fluid">

                    <div class="mx-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="border my-4 p-2 bg-light rounded shadow-lg">
                                <h4><strong>Pisowifi Parts Inventory</strong></h4>
                                <hr>
                                <div class="row">

                                    <div class="input-group mb-0">


                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <button type="button" id="showSaleReport"
                                                    class="btn btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addmodal">Add</button>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend rounded">


                                            <button class="btn btn-success border-dark" type="" id="generate-change"><i
                                                    class="bi bi-file-earmark-spreadsheet"></i></button>

                                            <button class="btn btn-warning border-dark" type="" id="generate-change"><i
                                                    class="bi bi-filetype-pdf"></i></button>

                                            <button class="btn btn-secondary border-dark border-right-1 rounded-end"
                                                type="" id="generate-change"><i class="bi bi-printer"></i></button>
                                        </div>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="addmodal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Product
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <label for="" class="form-label mb-1">Name</label>
                                                        <input type="text" class="form-control" id="">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="" class="form-label">Product Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="" class="form-label mb-1">Product Quantity</label>
                                                        <input type="number" class="form-control" id="">
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped border" id="myDataTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($items as $item){
                                                echo '
                                                <tr>
                                                    <td>'.$item['item_id'].'</td>
                                                    <td>'.$item['item_name'].'</td>
                                                    <td>'.$item['item_description'].'</td>
                                                    <td>'.$item['item_quantity'].'</td>
                                                    <td> <button class="btn btn-primary"> <i class="fas fa-fw fa-edit"></i></button> </td>
                                                    <td> <button class="btn btn-danger"> <i class="fas fa-fw fa-trash"></i></button> </td>
                                                </tr>
                                                ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/sb-admin-2/sb-admin-2.min.js"></script>


    <script>
    //datatable initiate
    $(document).ready(function() {
        $('#myDataTable').DataTable();
    });
    </script>
</body>

</html>