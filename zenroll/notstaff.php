<!DOCTYPE html>
<html lang="en">

<?php

require 'navbar.php';

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
    <meta charset="UTF-8">
    <title>Curl - online library manager</title>
    <meta charset="UTF-8">

</head>


<div class="w3-main w3-content" style="max-width:100%;margin-top: 3%;width: 100%; height: 100% ;">
    <div class="w3-container w3-center" style="background-color: rgba(0,0,0,0.5);">
        <br><br><br><hr><br>
        <img src="../assets/icons/cloud-computing.svg" width="10%"><br><br>
        <h3 style="font-family: 'Comfortaa Regular'">To complete your profile as a staff
            <h2 style="font-family: 'Comfortaa Regular';color: tomato;">Admin</h2> <h3 style="font-family: 'Comfortaa Regular'">
                must authorize your account first...
            <br><br><a href="dashboard.php" style="color: lightseagreen" >Go back </a> to student enrollment form<br><br>or goto
        <a href="../index.php" style="color: lightseagreen">Home page</a> </h3>
        <hr>
    </div>
    <footer class="my-footer">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12 text-center">
                    <br><br>
                    <h3><u style="color: rgba(229,212,67,0.84)">Get In Touch</u></h3>
                    <div class="contact">
                        <br>
                        <span style="color: rgba(214,210,209,0.80)">Call us on :<b style="color: white;margin-right: 20px"> +91 8281 7567 33</b></span>
                        <span style="margin-right:10px;"> | </span>
                        <span style="color: rgba(214,210,209,0.80)">Mail us at :<b style="color: white"> info@studentscard.org</b></span><br><br><br>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center copyright">
                <p><small class="block">&copy; 2017. All Rights Reserved.</small>
                    <small class="block">College of Engineering, Kidangoor</small></p>
            </div>

        </div>
    </footer>

</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
</script>


</html>