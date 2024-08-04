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

<?php
    $sql = "SELECT *  from course where id=14";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr_bca = $query->fetchAll(PDO::FETCH_OBJ);

    $sql = "SELECT *  from course where id=11";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr_bcom = $query->fetchAll(PDO::FETCH_OBJ);

    $sql = "SELECT *  from course where id=14";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr_psy = $query->fetchAll(PDO::FETCH_OBJ);
?>

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
                                <h2 class="title">Syllabus</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home"></i>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span>Syllabus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">

            <!--about-section-->
            <section class="ttm-row about-section bg-img5 clearfix">
                <div class="container">
                    <div class="row pb-70 res-991-pb-0">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title section-title title-style-center_text">
                                <div class="title-header">
                                    <!-- <h3>YOU CAN LEARN</h3> -->
                                    <h2 class="title">Syllabus</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-lg-12">
                    
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-before-content">

                                <div class="featured-content ">
                                    <div class="featured-title">
                                        <h3>BCA</h3>
                                    </div>
                                    <div class="featured-desc  widget widget-download">

                                        <ul class="download">

                                            <?php $syllabus1 = $userArr_bca[0]->sllabusLink;
                                                if (!empty($syllabus1)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus1 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_bca[0]->sllabus ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                            <?php $syllabus2 = $userArr_bca[0]->link2;
                                                if (!empty($syllabus2)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus2 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_bca[0]->syllabus2 ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                            <?php $syllabus3 = $userArr_bca[0]->link3;
                                                if (!empty($syllabus3)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus3 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_bca[0]->syllabus3 ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- featured-icon-box end -->
                            <div class="mt-35 mb-35">
                                <span class="ttm-horizontal_sep"></span>
                            </div>
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-before-content">

                                <div class="featured-content ">
                                    <div class="featured-title">
                                        <h3> B.Sc Psychology</h3>
                                    </div>
                                    <div class="featured-desc  widget widget-download">

                                        <ul class="download">

                                        <?php $syllabus1 = $userArr_psy[0]->sllabusLink;
                                                if (!empty($syllabus1)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus1 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_psy[0]->sllabus ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                            <?php $syllabus2 = $userArr_psy[0]->link2;
                                                if (!empty($syllabus2)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus2 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_psy[0]->syllabus2 ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                            <?php $syllabus3 = $userArr_psy[0]->link3;
                                                if (!empty($syllabus3)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus3 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_psy[0]->syllabus3 ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- featured-icon-box end -->
                            <div class="mt-35 mb-35">
                                <span class="ttm-horizontal_sep"></span>
                            </div>
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-before-content">

                                <div class="featured-content ">
                                    <div class="featured-title">
                                        <h3> B.Com</h3>
                                    </div>
                                    <div class="featured-desc  widget widget-download">

                                        <ul class="download">

                                        <?php $syllabus1 = $userArr_bcom[0]->sllabusLink;
                                                if (!empty($syllabus1)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus1 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_bcom[0]->sllabus ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                            <?php $syllabus2 = $userArr_bcom[0]->link2;
                                                if (!empty($syllabus2)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus2 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_bcom[0]->syllabus2 ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                            <?php $syllabus3 = $userArr_bcom[0]->link3;
                                                if (!empty($syllabus3)) {
                                            ?>
                                            <li><a href="<?php echo $syllabus3 ?>" class="download-btn"><i class="fa fa-file-pdf-o"></i><?php echo $userArr_bcom[0]->syllabus3 ?></a>
                                            </li>
                                            <?php }
                                            ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- featured-icon-box end -->
                        </div>

                    </div><!-- row end -->
                </div>
            </section>
            <!--about-section end-->

            <!--padding_top_zero-section-->
            <section class="ttm-row padding_top_zero-section clearfix">
                <div class="container">
                    <!-- slick_slider -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mt_150 mb_15 res-1199-mt-35 slick_slider"
                                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1100,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                <div class="col-lg-4 col-md-6 col-sm-10">
                                    <!-- featured-imagebox-course -->
                                    <div class="featured-imagebox featured-imagebox-course_highlight">
                                        <div class="featured-thumbnail">
                                            <img class="img-fluid" src="images_template/course/course-one-740x560.jpg"
                                                alt="image">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><a href="courses-single.php">Get Support Funding</a></h3>
                                            </div>
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-darkgrey ttm-icon_element-size-sm">
                                                    <i class="flaticon-knowledge"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox-course end-->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-10">
                                    <!-- featured-imagebox-course -->
                                    <div class="featured-imagebox featured-imagebox-course_highlight">
                                        <div class="featured-thumbnail">
                                            <img class="img-fluid" src="images_template/course/course-two-740x560.jpg"
                                                alt="image">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><a href="courses-single.php">Student Orientation</a></h3>
                                            </div>
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-darkgrey ttm-icon_element-size-sm">
                                                    <i class="flaticon-classroom"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox-course end-->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-10">
                                    <!-- featured-imagebox-course -->
                                    <div class="featured-imagebox featured-imagebox-course_highlight">
                                        <div class="featured-thumbnail">
                                            <img class="img-fluid" src="images_template/course/course-three-740x560.jpg"
                                                alt="image">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><a href="courses-single.php">Career Opportunities</a></h3>
                                            </div>
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-darkgrey ttm-icon_element-size-sm">
                                                    <i class="flaticon-test"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox-course end-->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-10">
                                    <!-- featured-imagebox-course -->
                                    <div class="featured-imagebox featured-imagebox-course_highlight">
                                        <div class="featured-thumbnail">
                                            <img class="img-fluid" src="images_template/course/course-three-740x560.jpg"
                                                alt="image">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><a href="courses-single.php">Student Orientation</a></h3>
                                            </div>
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-darkgrey ttm-icon_element-size-sm">
                                                    <i class="flaticon-college-graduation"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox-course end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--padding_top_zero-section end-->

            <!--padding_bottom_zero-section-->
            <section
                class="ttm-row padding_bottom_zero-section bg-img6 bg-layer-equal-height ttm-bgcolor-darkgrey clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="pr-60 res-991-pr-0">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>What we do</h3>
                                        <h2 class="title">Our Skill <br>What We Achieved</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Creating an enduring a strategic plan for the university’s, one that is now
                                            in its third five-year cycle. By including training many sectors workings
                                            behind. I was able to gain campus-wide buy-in on a shared vision.</p>
                                    </div>
                                </div><!-- section title end -->

                                <div class="mt-40 mb-30">
                                    <span class="ttm-horizontal_sep"></span>
                                </div>
                                <div class="row ttm-vertical_sep">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon style2 text-center">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="flaticon-university-1"></i>
                                            </div>
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0"
                                                        data-to="15000" data-interval="15" data-before=""
                                                        data-before-style="sup" data-after="" data-after-style="sub"
                                                        class="numinate">15000
                                                    </span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="ttm-fid-title">Satisfied Students</h3>
                                            </div>
                                        </div><!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon style2 text-center">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="flaticon-classroom"></i>
                                            </div>
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0"
                                                        data-to="800" data-interval="15" data-before=""
                                                        data-before-style="sup" data-after="" data-after-style="sub"
                                                        class="numinate">800
                                                    </span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="ttm-fid-title">Qualified Teachers</h3>
                                            </div>
                                        </div><!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon style2 text-center">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="flaticon-school-3"></i>
                                            </div>
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0"
                                                        data-to="200" data-interval="15" data-before=""
                                                        data-before-style="sup" data-after="" data-after-style="sub"
                                                        class="numinate">200
                                                    </span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="ttm-fid-title">Honor & Awards Win</h3>
                                            </div>
                                        </div><!-- ttm-fid end -->
                                    </div>
                                </div>
                                <div
                                    class="mt-60 pt-25 pb-25 pl-30 pr-30 mr_90 res-991-mr-0 res-991-mt-30 res-991-mb-15 ttm-bgcolor-skincolor">
                                    <div class="d-sm-flex align-items-center justify-content-between">
                                        <div class="lt">
                                            <h4 class="mb-5 fs-26 font-weight-600">Get Unlimited Access To Premium
                                                Courses</h4>
                                            <p class="mb-0">Taking seamless key performance indicators offline to
                                                maximize<br>the long tail to determine their progression.</p>
                                        </div>
                                        <div class="rt res-575-mt-15">
                                            <a href="#" class="ttm-textcolor-white">
                                                <div
                                                    class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-white ttm-icon_element-size-xs mb-0">
                                                    <i class="fa fa-chevron-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- col-img-img-two -->
                            <div class="col-bg-img-two ttm-bg ttm-col-bgimage-yes">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content"></div>
                            </div><!-- col-img-bg-img-two end-->
                            <img class="img-fluid ttm-equal-height-image" src="images_template/bg-image/col-bgimage-2.jpg"
                                alt="bg-image">
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!--padding_bottom_zero-section end-->






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