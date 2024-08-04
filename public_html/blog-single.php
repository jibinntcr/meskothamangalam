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

        <?php
            $id = $_GET['id'];
            // print_r($id);
            // exit();
            $sql = "SELECT id,title,content,date,image from events where id= $id ";
            $query = $dbh->prepare($sql);
            $query->execute();
            $userArr = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
        ?>
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title"><?php echo htmlentities($userArr[0]->title); ?></h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home"></i>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span><?php echo htmlentities($userArr[0]->title); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">

            <!-- sidebar -->
            <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 content-area">
                            <!-- post -->
                            <article class="post ttm-blog-single clearfix">
                                <!-- ttm-post-featured-wrapper -->
                                <div class="ttm-post-featured-wrapper ttm-featured-wrapper mb-20">
                                    <div class="ttm-post-featured">
                                        <img class="img-fluid" src="uploads/<?php echo htmlentities($userArr[0]->image); ?>" alt="">
                                    </div>
                                    <div class="ttm-box-post-date">
                                        <?php $date = $userArr[0]->date;
                                        $date = date_create($date); 
                                        $month = date_format($date, 'M');
                                        $day = date_format($date, 'd'); ?>
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="2019-08-28T08:07:55+00:00"><?php echo $day ?><span
                                                    class="entry-month"><?php echo $month ?></span></time>
                                        </span>
                                    </div>
                                </div>
                                <!-- ttm-post-featured-wrapper end -->
                                <!-- ttm-blog-single-content -->
                                <div class="ttm-blog-single-content">

                                    <div class="entry-content mt-10">
                                        <div class="ttm-box-desc-text">


                                            <h4><?php echo htmlentities($userArr[0]->title); ?></h4>
                                            <p><?php echo ($userArr[0]->content); ?></p>



                                        </div>
                                    </div>

                                </div><!-- ttm-blog-single-content -->
                            </article><!-- post end -->
                        </div>
                        <div
                            class="col-xl-3 col-lg-4 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey mt_90 pt-90 mb_90 pb-90 res-991-mt-0 res-991-pt-0">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>

                            <aside class="widget widget-recent-post with-title">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <?php
                                        $sql = "SELECT * from events  WHERE status='1' ORDER BY `date` DESC LIMIT 3";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {
                                    ?>
                                    <li>
                                        <a href="blog-single.php"><img class="img-fluid"
                                                src="uploads/<?php echo $result->image ?>" alt="post-img"></a>
                                        <?php $date = $result->date;
                                            $date = date_create($date);
                                        ?>
                                        <span class="post-date"><?php echo date_format($date, "M"); ?> <?php echo date_format($date, "d"); ?>, <?php echo date_format($date, "Y"); ?></span>
                                        <a href="blog-single.php?id=<?php echo   $result->id ?>&slug=<?php echo $result->slug ?>"><?php $title =  substr($result->title, 0, 50);
                                                                            echo $title ?></a>
                                    </li>
                                    <?php   }
                                        }
                                    ?>
                                </ul>
                            </aside>




                            <!-- <aside class="widget contact-widget">
                                <h3 class="widget-title">Get in touch</h3>
                                <ul class="contact-widget-wrapper">
                                    <li><i class="fa fa-map-marker"></i>1212 Paint Valley Road East Rutherford, New York
                                        06192, USA</li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com"
                                            target="_blank">info@example.com</a></li>
                                    <li><i class="fa fa-phone"></i>(+01) 123 456 7890</li>
                                    <li><i class="ti ti-alarm-clock"></i>Mon - Sat 8.00 - 18.00.<br> Sunday CLOSED</li>
                                </ul>
                            </aside> -->
                        </div>
                    </div><!-- row end -->
                    <?php }
                    ?>
                </div>
            </div>
            <!-- sidebar end -->

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