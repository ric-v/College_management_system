<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
<script src="assets/js/script.js"> </script>
<script src="assets/js/jquery-3.1.1.min.js"> </script>

<?php
session_start();
require 'navbar.php';
?>

<body  id="top">

<?php

require 'db.php';
$adm = $_POST['btn'];
if (!empty($_POST) && isset($_POST)) {
    $sql = "SELECT * FROM student WHERE adm ='$adm'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $sql1 = "SELECT * FROM dues WHERE adm = '$adm'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_array($result1);
    $row1['ofine'];
}
?>

<div class="w3-main w3-content w3-padding " style="max-width:100%; background-color: rgba(0, 0, 0, 0.55)" id="top">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br><br><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Zenroll / Account Manager
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1>
                    <br>
                    <hr class="primary">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
                <div class="service-box">

                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <br>
                <div class="service-box">
                    <form action="clear.php" method="post">
                        <input type="hidden" name="adm" value="<?php echo $adm ?>">
                        <input type="text" name="due" class="textInput2" value="0">
                        <br>
                    <h2 style=" font-family:'Pacifico.ttf';"><u><input type="submit" style="background-color: transparent;" class="subtn" value="Clear dues"></a></u></h2>
                    <h5 class="w3-center text-muted"
                        style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Clear the due amount for the user </h5>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <br>
                <div class="service-box">
                    <form action="add.php" method="post">
                        <input type="hidden" name="adm" value="<?php echo $adm ?>">
                        <input type="text" name="due" class="textInput2" placeholder="Enter due amount">
                        <br>
                        <h2 style=" font-family:'Pacifico.ttf';"><u><input name="add" type="submit" style="background-color: transparent;" class="subtn" value="Add dues"></a></u></h2>
                        <h5 class="w3-center text-muted"style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Add a due amount to the user </h5>
                    </form>
                </div>
            </div>
        </div>
        <br><hr><br>
    </section>
</div>
</body>



<footer class="my-footer" id="footer1">
    <div class="container">
        <div class="row row-pb-md">
            <!--            <a href="bookmenu.php#top" style="color: whitesmoke;float: right" id="topbut">[↑]</a> -->
            <div class="col-md-12 text-center">
                <br><br>
                <h3><u style="color: rgba(229,212,67,0.84);">Get In Touch</u></h3>
                <div class="contact">
                    <br>
                    <span style="color: rgba(214,210,209,0.80)">Call us on :<b style="color: white;margin-right: 20px"> +91 8281 7567 33</b></span>
                    <span style="margin-right:10px;"> | </span>
                    <span style="color: rgba(214,210,209,0.80)">Mail us at :<b style="color: white"> info@studentscard.org</b></span><br><br><br>
                </div> </div>
        </div>

        <div class="col-md-12 text-center copyright">
            <p><small class="block">&copy; 2017. All Rights Reserved.</small>
                <small class="block">College of Engineering, Kidangoor</small></p>
        </div>

    </div>
</footer>
