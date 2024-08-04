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

    <!--page start-->
    <div class="page">

        <?php include('partials/header.php') ?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">All Courses</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home"></i>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span>Courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">

            <section class="ttm-row grid-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                            <?php
                            $sql = "SELECT * from course WHERE status='1'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                        ?>
                            <div class="ttm-box-col-wrapper col-lg-4 rounded">
                                <!-- featured-imagebox-course -->
                                <div class="featured-imagebox featured-imagebox-course ">
                                    <div class="featured-thumbnail rounded-top">
                                        <img width="670" height="325" class="img-fluid"
                                            src="uploads/<?php echo $result->thumb ?>" alt="image">
                                    </div>
                                    <div class="featured-content ">
                                        <div class="ttm-lp-rating">

                                        </div>
                                        <div class="featured-content-post-inner">
                                            <div class="featured-title">
                                                <h3><a
                                                        href="courses-single.php?id=<?php echo   $result->id ?>&slug=<?php echo $result->slug ?>"><?php echo $result->name ?>
                                                    </a></h3>
                                            </div>
                                        </div>
                                        <div class="ttm-course-box-meta ">
                                            <div class="ttm-enrolled">
                                                <span class="ttm-lessons ttm-meta-line"><i class="fa fa-file-text-o"
                                                        aria-hidden="true"></i>06 semesters </span>
                                                <span class="ttm-students ttm-meta-line"><i
                                                        class="icon-user-outline"></i><?php echo $result->seat ?>
                                                    Seats</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-course end-->
                            </div>
                            <?php }
                            }
                        ?>
                        </div>
                </div>
            </section>

        </div><!--site-main end-->

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