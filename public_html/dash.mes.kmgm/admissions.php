<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admissions | MES</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <?php include('partials/navbar.php') ?>

            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_settings-panel.html -->
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <?php include('partials/sidebar.php') ?>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                        <h3 class="font-weight-bold">Admission Applicants</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button id="exportCsvBtn" class="btn btn-success btn-icon-text">
                                            <i class="mdi mdi-file-download btn-icon-prepend"></i>
                                        Export as CSV
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-xl-4 mb-4 mb-xl-0 text-right">
                            <button id="exportCsvBtn" class="btn btn-success btn-icon-text">
                                <i class="mdi mdi-file-download btn-icon-prepend"></i>
                                Export as CSV
                            </button>
                        </div> -->

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Course</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * from admission_form";
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {
                                                ?>
                                                        <tr>
                                                            <td><?php echo  $result->id ?></td>
                                                            <?php
                                                            $name =  substr($result->name, 0, 65);
                                                            ?>
                                                            <td><?php echo  $name ?></td>

                                                            <td><?php echo  $result->phone ?></td>

                                                            <td><?php echo  $result->email ?></td>

                                                            <td><?php echo  $result->course ?></td>

                                                            <!-- <td>
                                                                <div class="template-demo mt-2">
                                                                    <button onclick="location.href = 'courses-edit.php?id=<?php echo   $result->id ?>';" type="button" class="btn btn-primary btn-rounded btn-icon">
                                                                        <i class="mdi mdi-border-color"></i>
                                                                    </button>
                                                                </div>
                                                            </td> -->

                                                        </tr>
                                                <?php
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Premium <a href="https://www.infinio.co.in/" target="_blank">Infinio Technology Solutions</a> All rights
                        reserved.</span>
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

        <script>
            document.getElementById('exportCsvBtn').addEventListener('click', function() {
                var tableData = [];
                var headers = [];
                var rows = document.querySelectorAll('table thead th');
                rows.forEach(function(header) {
                    headers.push(header.innerText);
                });
                tableData.push(headers.join(','));

                var rows = document.querySelectorAll('table tbody tr');
                rows.forEach(function(row) {
                    var rowData = [];
                    row.querySelectorAll('td').forEach(function(cell) {
                        rowData.push(cell.innerText);
                    });
                    tableData.push(rowData.join(','));
                });

                var csvContent = "data:text/csv;charset=utf-8,"
                    + tableData.join("\n");

                var encodedUri = encodeURI(csvContent);
                var link = document.createElement("a");
                link.setAttribute("href", encodedUri);
                link.setAttribute("download", "admission_applicants.csv");
                document.body.appendChild(link);

                link.click();
            });
        </script>


        <!-- plugins:js -->
        <script src="../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../vendors/chart.js/Chart.min.js"></script>
        <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="../js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../js/off-canvas.js"></script>
        <script src="../js/hoverable-collapse.js"></script>
        <script src="../js/template.js"></script>
        <script src="../js/settings.js"></script>
        <script src="../js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="../js/dashboard.js"></script>
        <script src="../js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
    </body>

    </html>
<?php
}
?>