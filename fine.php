<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
<script src="assets/js/script.js"> </script>
<script src="assets/js/jquery-3.1.1.min.js"> </script>

<?php
session_start();
require 'navbar.php';
require 'db.php';
$dept = $_SESSION['dept'];
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sem = $row['sem'];
$s = $sem%2;
?>
<body>


<div class="w3-main w3-content" style="max-width:100%;margin-top: 0%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        USERS
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1>
                    <hr class="primary">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <br><h3 style="font-family: 'Comfortaa Regular';color: tomato">Add fine  |  Clear fine</h3><br>
                    <form onsubmit="return search()" action="fineuser.php" method="post">
                        <span class="col-sm-12"><input type="text" id="searchBook" class="textInput2" style="padding: 10px; width:100%;"
                                                       name="search" placeholder="Enter the User ID or name" ><br></span>
                        <span><input type="submit" class="subtn" style="padding: 10px;width: 60%;" value="Search"></span><br><br>
                        <br>
                    </form>
                </div>

        <hr><br><br><br>
    </section>
</div>


<footer class="my-footer" id="footer1">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-12 text-center">
                <br><br>
                <h3><u style="color: rgba(229,212,67,0.84);">Get In Touch</u></h3>
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
