<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="MES Kothamagalam" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MES Kothamagalam </title>

    <link rel="shortcut icon" href="images_template/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css_template/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css_template/animate.css" />
    <link rel="stylesheet" type="text/css" href="css_template/fontello.css" />
    <link rel="stylesheet" type="text/css" href="css_template/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css_template/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css_template/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="css_template/slick.css">
    <link rel="stylesheet" type="text/css" href="css_template/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css_template/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="css_template/main.css" />
    <link rel="stylesheet" type="text/css" href="css_template/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="css_template/responsive.css" />

</head>

<body>

    <?php include('partials/header.php') ?>
    <?php
    $id = $_GET['id'];
    // print_r($id);
    // exit();
    $sql = "SELECT * from gallerimages where galleryID=$id ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
    ?>

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5 text-uppercase"><?php echo "<br><br>"; echo htmlentities($userArr[0]->name); ?></h1>
    </div>



    <!-- Gallery Start -->


    <div class="container-xxl py-5">
        <div class="container flex flex-wrap row  py-5 mx-auto">

            <?php
                $sql = "SELECT * from gallerimages where galleryID='$id'";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) { ?>

            <div class="img-container col-md-6  col-lg-4 mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <a href="uploads/<?php echo   $result->image ?>" class="fancybox" data-fancybox="gallery1">
                    <img src="uploads/<?php echo $result->image ?>" class="img-fluid  w-100 h-100"
                        style="object-fit: cover; border-radius: 20px;" alt="Gallery Images">
                </a>

            </div>
            <?php }
                } ?>

        </div>
    </div>

    <!-- Gallery End -->



    <?php } ?>

    <?php include('partials/footer.php') ?>

    <!--back-to-top start-->
    <a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->

    <script src="js_template/jquery-3.6.0.min.js"></script>
    <script src="js_template/jquery-migrate-3.3.2.min.js"></script>
    <script src="js_template/bootstrap.min.js"></script>
    <script src="js_template/jquery.easing.js"></script>
    <script src="js_template/jquery-waypoints.js"></script>
    <script src="js_template/jquery-validate.js"></script>
    <script src="js_template/jquery.prettyPhoto.js"></script>
    <script src="js_template/slick.min.js"></script>
    <script src="js_template/numinate.min.js"></script>
    <script src="js_template/imagesloaded.min.js"></script>
    <script src="js_template/jquery-isotope.js"></script>
    <script src="js_template/main.js"></script>
    <!-- Javascript end-->
</body>

</html>