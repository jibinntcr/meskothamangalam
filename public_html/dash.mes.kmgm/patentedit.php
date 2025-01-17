<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['patentEditBTN'])) {
        if (($_FILES["file"]["error"]) == 4) {
            $photo = $_POST['imageName'];
            $id = $_POST['id'];
            $name = $_POST['EditName'];
            $projectName = $_POST['EditProjectName'];
            $publicationDate = $_POST['EditPublicationDate'];
            $member1 = $_POST['EditMember1'];
            $description = $_POST['EditDescription'];
            $sql = "UPDATE  patents SET name=' $name',projectname='$projectName',publicationDate='$publicationDate',member1='$member1',description='$description',image='$photo' where id='$id'";
            // print_r($sql);
            // exit();
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "patents.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "patents.php";</script>';
            }
        } else if (($_FILES["file"]["error"]) == 0) {
            $id = $_POST['id'];
            $name = $_POST['EditName'];
            $projectName = $_POST['EditProjectName'];
            $publicationDate = $_POST['EditPublicationDate'];
            $member1 = $_POST['EditMember1'];
            $description = $_POST['EditDescription'];
            $folder = '../uploads/';
            $file = $folder . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES['file']['tmp_name'], $file);
            $photo = basename($_FILES["file"]["name"]);
            $sql = "UPDATE  patents SET name=' $name',projectname='$projectName',publicationDate='$publicationDate',member1='$member1',description='$description',image='$photo' where id='$id'";
            $query = $dbh->prepare($sql);
            $result = $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script>alert("Success")</script>';
                echo '<script>window.location = "patents.php";</script>';
            } else {
                echo '<script>alert("something went wrong please try again")</script>';
                echo '<script>window.location = "patents.php";</script>';
            }
        }
    }
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Edit Patent | MES Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
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

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title">Edit Patent</h4>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST">
                                        <?php
                                        $id = $_GET['id'];
                                        $sql = "SELECT * from patents where id=$id ";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $userArr = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                        ?>
                                            <div class="form-group">
                                                <input type="hidden" id="id" name="id" value="<?php echo htmlentities($userArr[0]->id); ?>" />
                                                <input type="hidden" id="imageName" name="imageName" value="<?php echo htmlentities($userArr[0]->image); ?>" />

                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="EditName" name="EditName" value="<?php echo htmlentities($userArr[0]->name); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Project Name</label>
                                                <input type="text" class="form-control" id="EditProjectName" name="EditProjectName" value="<?php echo htmlentities($userArr[0]->projectname); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="course">Publication Date</label>
                                                <input type="text" class="form-control" id="EditPublicationDate" name="EditPublicationDate" value="<?php echo htmlentities($userArr[0]->publicationDate); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Year">Members</label>
                                                <input type="text" class="form-control" id="EditMember1" name="EditMember1" value="<?php echo htmlentities($userArr[0]->member1); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Message">Description</label>
                                                <textarea class="form-control" id="EditDescription" name="EditDescription" rows="4"><?php echo htmlentities($userArr[0]->description); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" id="file" name="file" accept="image/gif, image/png, image/jpg, image/jpeg">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="patentEditBTN" id="patentEditBTN">Save</button>
                                            <button class="btn btn-light">Cancel</button>
                                        <?php
                                        }
                                        ?>
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