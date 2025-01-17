<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard | MES CUSAT</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('../partials/navbar.php') ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include('../partials/sidebar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = 'announcements.php';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Announcements</h4>
                                    </button>
                                </div>
                                <!-- <div class="col-md-4 mb-4">
                                    <button onclick="location.href = 'hod.php';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Principal Message</h4>
                                    </button>
                                </div> -->
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = 'admissions.php';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Admissions</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Courses</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Testimonials</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Faculty</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>PhD</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Patentes</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Recognition</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>MoU</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Lab</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Events</h4>
                                    </button>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <button onclick="location.href = '#';" type="button" class="btn btn-primary btn-lg btn-block">
                                        <h4>Gallery</h4>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.
                            Premium <a href="https://www.infinio.co.in/" target="_blank">Infinio Technology
                                Solutions</a> All rights reserved.</span>
                        <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
                    </div>
                </footer>

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>