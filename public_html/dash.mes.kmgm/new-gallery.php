<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {

    if (isset($_POST['testimonialBTN'])) {
        $name = $_POST['name'];

        // thumbnail
        $folder = '../uploads/';
        $file = $folder . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES['file']['tmp_name'], $file);
        $photo = basename($_FILES["file"]["name"]);

        $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $name)));

        $status = '1';
        $sql = "INSERT INTO gallery(name,thumbnail,status,slug) VALUES ('" . $name . "','" . $photo . "','" . $status . "','" . $slug . "')";

        // print_r($sql);
        // exit();
        $query = $dbh->prepare($sql);
        $result = $query->execute();
        if ($query->rowCount() > 0) {
            $last_id = $dbh->lastInsertId();
            $targetDir = "../galleryImages/";
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

            $images_arr = array();
            foreach ($_FILES['images']['name'] as $key => $val) {
                $image_name = $_FILES['images']['name'][$key];
                $tmp_name     = $_FILES['images']['tmp_name'][$key];
                $size         = $_FILES['images']['size'][$key];
                $type         = $_FILES['images']['type'][$key];
                $error         = $_FILES['images']['error'][$key];

                // File upload path
                $fileName = basename($_FILES['images']['name'][$key]);
                $targetFilePath = $targetDir . $fileName;

                // Check whether file type is valid
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {
                    // Store images on the server
                    if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFilePath)) {
                        $images_arr[] = $targetFilePath;

                        $sql = "INSERT INTO gallerimages(galleryID,name,image) VALUES ('" . $last_id . "','" . $name . "','" . $targetFilePath . "')";
                        $query = $dbh->prepare($sql);
                        $result = $query->execute();
                        if ($query->rowCount() > 0) {
                            echo '<script>alert("Success")</script>';
                            echo '<script>window.location = "gallery.php";</script>';
                        } else {
                            echo '<script>alert("something went wrong please try again")</script>';
                            echo '<script>window.location = "gallery.php";</script>';
                        }
                    } else {
                        echo '<script>alert("something went wrong please try again")</script>';
                        echo '<script>window.location = "gallery.php";</script>';
                    }
                }
            }
        }
    }
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>New Gallery | MES Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/select2/select2.min.css">
        <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">New Gallery</h4>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Thumbnail(600x400 px)</label>
                                            <input type="file" class="form-control" id="file" name="file" accept="image/gif, image/png, image/jpg, image/jpeg">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Images(600x400 px)</label>
                                            <input type="file" name="images[]" class="form-control" multiple>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="testimonialBTN" id="testimonialBTN">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
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
<?php
}
?>