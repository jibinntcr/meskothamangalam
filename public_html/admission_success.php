<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('includes/config.php');

if(isset($_POST['continue-btn'])){
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];   

    $sql = "INSERT INTO admission_form (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";
    
    $query = $dbh->prepare($sql);
    $result = $query->execute();
}
?>

<html>
    <head>
    <style>
    .success-animation { margin:150px auto;}

    .checkmark {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #4bb71b;
        stroke-miterlimit: 10;
        box-shadow: inset 0px 0px 0px #4bb71b;
        animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        position:relative;
        top: 5px;
        right: 5px;
    margin: 0 auto;
    }
    .checkmark__circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        stroke: #4bb71b;
        fill: #fff;
        animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
    
    }

    .checkmark__check {
        transform-origin: 50% 50%;
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
    }

    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes scale {
        0%, 100% {
            transform: none;
        }

        50% {
            transform: scale3d(1.1, 1.1, 1);
        }
    }

    @keyframes fill {
        100% {
            box-shadow: inset 0px 0px 0px 30px #4bb71b;
        }
    }
    </style>
    </head>
    <body>
        <div class="success-animation">
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg><br><br>
            <center><h1>Submission Successfull. We will get back to you soon </h1></center><br>
            <center><h2>Redirecting to home...</h2></center>
        </div>

    </body>

    <script>
        window.addEventListener('load', function() {
            // Set a timeout function to redirect after 5 seconds
            setTimeout(function() {
                // Replace 'destination_page.html' with the URL of the page you want to redirect to
                window.location.href = 'index.php';
            }, 2500); // 2.5 seconds
        });
    </script>
</html>
