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
    <title>course mes </title>

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
    <?php
    $id = $_GET['id'];
    $sql = "SELECT *  from course where id= $id ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $course_name = htmlentities($userArr[0]->name); 
        if (stripos($course_name, 'com') !== false) {
            $course_name = 'COMMERCE';
        }
        if(stripos($course_name, 'psy') !== false){
            $course_name = 'PSYCHOLOGY';
        }
        if(stripos($course_name, 'bca') !== false){
            $course_name = 'BCA';
        }
    ?>


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
                                <h2 class="title"><?php echo htmlentities($userArr[0]->name); ?></h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home"></i>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span><?php echo htmlentities($userArr[0]->name); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">

            <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 ">
                            <!-- course -->
                            <article class="course single-lp_course">
                                <!-- ttm-course-single-content -->
                                <div class="ttm-course-single-content">

                                    <!-- <img src="uploads/<?php echo htmlentities($userArr[0]->image); ?>" alt=""> -->
                                    <div class="ttm-tabs course-tabs" data-effect="fadeIn">
                                        <ul class="tabs clearfix">
                                            <li class="tab active"><a href="#">Overview</a></li>
                                            <li class="tab"><a href="#">Curriculum</a></li>
                                            <li class="tab"><a href="#">Instructors</a></li>

                                        </ul>
                                        <div class="content-tab">

                                            <!-- content-inner -->
                                            <div class="content-inner active" style="display: block;">

                                                <div class="p-lg-5 mb-3">
                                                    <img class="img-fluid img-thumbnail img-sm"
                                                        src="uploads/<?php echo htmlentities($userArr[0]->image); ?>" alt="bg-image">
                                                </div>





                                                <h4>Course Description</h4>
                                                <p><?php echo ($userArr[0]->eligibility); ?></p>


                                            </div><!-- content-inner end-->
                                            <!-- content-inner end-->
                                            <!-- content-inner -->
                                            <div class="content-inner" style="display: none;">
                                                <h4>Syllabus</h4>
                                                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an un it to make a type specimen book. It
                                                    has survived not only fivnged.</p> -->
                                                <ul class="course-items">
                                                    <!-- Syllabus 1 -->
                                                    <?php $syllabus1 = $userArr[0]->sllabusLink;
                                                        if (!empty($syllabus1)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus1 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->sllabus ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 2 -->
                                                    <?php $syllabus2 = $userArr[0]->link2;
                                                        if (!empty($syllabus2)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus2 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus2 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 3 -->
                                                    <?php $syllabus3 = $userArr[0]->link3;
                                                        if (!empty($syllabus3)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus3 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus3 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 4 -->
                                                    <?php $syllabus4 = $userArr[0]->link4;
                                                        if (!empty($syllabus4)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus4 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus4 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 5 -->
                                                    <?php $syllabus5 = $userArr[0]->link5;
                                                        if (!empty($syllabus5)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus5 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus5 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 6 -->
                                                    <?php $syllabus6 = $userArr[0]->link6;
                                                        if (!empty($syllabus6)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus6 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus6 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 7 -->
                                                    <?php $syllabus7 = $userArr[0]->link7;
                                                        if (!empty($syllabus7)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus7 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus7 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 8 -->
                                                    <?php $syllabus8 = $userArr[0]->link8;
                                                        if (!empty($syllabus8)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus8 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus8 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 9 -->
                                                    <?php $syllabus9 = $userArr[0]->link9;
                                                        if (!empty($syllabus9)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus9 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus9 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                    <!-- Syllabus 10 -->
                                                    <?php $syllabus10 = $userArr[0]->link10;
                                                        if (!empty($syllabus10)) {
                                                    ?>
                                                    <li class="course-item course-item-lp_lesson">
                                                        <div class="course-item-link">
                                                            <a href="<?php echo $syllabus10 ?>" class="item-name"
                                                                target="_blank"><?php echo $userArr[0]->syllabus10 ?></a>
                                                    </li>
                                                    <?php }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="content-inner active" style="display: block;">
                                                <div class="row slick_slider mt-25"
                                                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                                    <?php
                                                            $sql = "SELECT * FROM faculty WHERE status='1' AND department LIKE '%$course_name%' ORDER BY `faculty`.`priority` ASC";
                                                            $query = $dbh->prepare($sql);
                                                            $query->execute();
                                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                        ?>
                                                    <div
                                                        class="ttm-box-col-wrapper col-lg-4 col-sm-6 col-md-4 col-xs-12">
                                                        <!-- featured-imagebox-team -->
                                                        <div class="featured-imagebox featured-imagebox-team style2">
                                                            <div class="featured-thumbnail">
                                                                <img width="310" height="300" class="img-fluid"
                                                                    src="uploads/<?php echo   $result->image ?>"
                                                                    alt="image">
                                                            </div>
                                                            <div class="featured-content">
                                                                <div class="featured-title">
                                                                    <h3><a
                                                                            href="faculty-details.php?id=<?php echo   $result->id ?>&name=<?php echo $result->slug ?>"><?php echo   $result->name ?>
                                                                            </a>
                                                                    </h3>
                                                                    <h6><?php echo   $result->thumbname ?></h6>
                                                                </div>
                                                                <div class="ser_category">
                                                                    <?php echo   $result->designation ?> </div>
                                                                <div class="featured-hover-content">
                                                                    <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-size-md ttm-btn-color-skincolor"
                                                                        href="faculty-details.php?id=<?php echo   $result->id ?>&name=<?php echo $result->slug ?>"
                                                                        tabindex="0">View Profile<i
                                                                            class="icon-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!-- featured-imagebox-team end-->
                                                    </div>
                                                    <?php }
                                                            }
                                                        ?>
                                                </div>


                                            </div><!-- content-inner end-->
                                            <!-- content-inner -->

                                            <!-- <section class="ttm-row team-section clearfix">
                                                <div class="container">

                                                    <div class="section-title title-style-center_text">
                                                        <div class="title-header">
                                                            <h3>Expert Instructors</h3>
                                                            <h2 class="title">Meet Our Skilled Instructors</h2>
                                                        </div>
                                                    </div>

                                                    <div class="row slick_slider mt-25"
                                                        data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                                        <?php
                                                            $sql = "SELECT * FROM faculty WHERE status='1' AND department LIKE '%$course_name%' ORDER BY `faculty`.`priority` ASC";
                                                            $query = $dbh->prepare($sql);
                                                            $query->execute();
                                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                            $cnt = 1;
                                                            if ($query->rowCount() > 0) {
                                                                foreach ($results as $result) {
                                                        ?>
                                                        <div
                                                            class="ttm-box-col-wrapper col-lg-4 col-sm-6 col-md-4 col-xs-12">

                                                            <div
                                                                class="featured-imagebox featured-imagebox-team style2">
                                                                <div class="featured-thumbnail">
                                                                    <img width="310" height="300" class="img-fluid"
                                                                        src="uploads/<?php echo   $result->image ?>"
                                                                        alt="image">
                                                                </div>
                                                                <div class="featured-content">
                                                                    <div class="featured-title">
                                                                        <h3><a
                                                                                href="faculty-details.php?id=<?php echo   $result->id ?>&name=<?php echo $result->slug ?>"><?php echo   $result->name ?>
                                                                                </a>
                                                                        </h3>
                                                                        <h6><?php echo   $result->thumbname ?></h6>
                                                                    </div>
                                                                    <div class="ser_category">
                                                                        <?php echo   $result->designation ?> </div>
                                                                    <div class="featured-hover-content">
                                                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-size-md ttm-btn-color-skincolor"
                                                                            href="faculty-details.php?id=<?php echo   $result->id ?>&name=<?php echo $result->slug ?>"
                                                                            tabindex="0">View Profile<i
                                                                                class="icon-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }
                                                            }
                                                        ?>
                                                    </div>

                                                </div>
                                            </section> -->


                                        </div>
                                    </div>

                                </div> <!-- ttm-course-single-content end -->
                            </article><!-- course end -->
                        </div>

                    </div><!-- row end -->
                </div>
            </div>
            <?php }
        ?>
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