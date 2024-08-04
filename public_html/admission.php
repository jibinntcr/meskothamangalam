
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
    <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="admission.css">

</head>

<body>

    <!--page start-->
    <div class="page">

        <?php include('partials/header.php') ?>

        <br><br>

        <div class="row">
          <div class="col-md-12">
            <form id="admission-form" method="POST" action="admission_success.php">
              <h1>ENQUIRY</h1>

              
              <fieldset>
                
                <legend><span class="number">1</span><b> Personal</b></legend>
              
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
              
                <label for="mail">Email:</label>
                <input type="text" id="mail" name="mail" required>
            
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
              
                
              </fieldset>
              <fieldset>  
              
                <legend><span class="number">2</span><b> Select Course<b></legend>
                    <br>
                
                <legend><input type="radio" id="bca" value="bca" name="course" required><label for="bca" class="light">   BCA</label><br>
                <input type="radio" id="bcom" value="bcom" name="course"><label for="bcom" class="light">   B Com</label><br>
                <input type="radio" id="psychology" value="psychology" name="course"><label for="psychology" class="light">   BSc Psychology</label></legend>
                          
              </fieldset>
            
              <button type="submit" id="continue-btn" name="continue-btn">Continue</button>
              
            </form>
          </div>
        </div>

        <?php include('partials/footer.php') ?>

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

    <script>
        // JavaScript code
        document.getElementById('admission-form').addEventListener('submit', function (event) {
            //event.preventDefault(); // Prevent form submission

            // Display success message
            document.getElementById('success-message').style.display = 'block';

            // Redirect after 3 seconds
            // setTimeout(function () {
            //     window.location.href = "index.php";
            // }, 3000);

        });
    </script>


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