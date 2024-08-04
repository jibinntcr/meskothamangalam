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
                                <h2 class="title">Events</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home"></i>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span>Events</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">

            <!--grid-section-->
            <section class="ttm-row grid-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- card start -->
                        <?php
                        $sql = "SELECT * from events  WHERE status='1' ORDER BY `date` DESC ";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {
                        ?>
                        <div class="ttm-box-col-wrapper col-lg-4 col-sm-6 col-md-6 col-xs-12">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style1">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="uploads/<?php echo $result->image ?>" alt=""
                                        height="100" width="50" style="max-height: 300px; object-fit: cover;">
                                </div>
                                <div class="featured-content">
                                    <div class="post-header">
                                        <div class="post-meta">
                                            <?php $date = $result->date;
                                                $date = date_create($date);
                                        ?>
                                            <span class="ttm-meta-line date"><i
                                                    class="fa fa-clock-o"></i><?php echo date_format($date, "d"); ?>
                                                <?php echo date_format($date, "M"); ?>,
                                                <?php echo date_format($date, "Y"); ?></span>

                                        </div><!-- post-meta end -->
                                    </div>
                                    <div class="featured-title">
                                        <h3><a
                                                href="blog-single.php?id=<?php echo   $result->id ?>&slug=<?php echo $result->slug ?>"><?php $title =  substr($result->title, 0, 50);
                                                                            $subHeading = substr($result->content, 0, 10);
                                                                            echo $title ?></a>
                                        </h3>
                                    </div>

                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                        <?php }
                        }
                        ?>

                        <!-- card end -->

                    </div><!-- row end -->
                </div>
            </section>
            <!--grid-section end-->

        </div>
        <!--site-main end-->

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