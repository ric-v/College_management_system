<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
<script src="../assets/js/script.js"> </script>
<script src="../assets/js/jquery-3.1.1.min.js"> </script>

<body  id="top">

<?php

session_start();
require 'navbar.php';
require '../db.php';
$sql = "SELECT * FROM staff WHERE email ='".$_SESSION['user']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$adm = $row['adm'];

?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br><br><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Curl / Book Menu
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1>
                    <br>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <?php

        require '../db.php';
        $uname = $_SESSION['user'];
        $sql = "SELECT * FROM staff WHERE email = '".$uname."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        ?>


        <!-- User Info -->

        <div class="row">
        <div class="col-md-4 text-left">
            <div class="service-box">

            </div>
        </div>
        <div class="col-md-4 text-left">
            <div class="service-box">
                <h3 style="font-family: 'Comfortaa Regular'">

                    <?php
                    echo '<p class="text-muted">Book 1: </p>';
                    ?>

                </h3>
            </div>
        </div>
        <div class="col-md-4 text-left">
            <div class="service-box">
                <?php
                echo '<h3>'.$row['b1'].'</h3>';
                ?>
            </div>
        </div>
        </div>


        <div class="row">
            <div class="col-md-4 text-left">
                <div class="service-box">

                </div>
            </div>
            <div class="col-md-4 text-left">
                <div class="service-box">
                    <h3 style="font-family: 'Comfortaa Regular'">

                        <?php
                        echo '<p class="text-muted">Book 2: </p>';
                        ?>

                    </h3>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <div class="service-box">
                    <?php
                    echo '<h3>'.$row['b2'].'</h3>';
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-left">
                <div class="service-box">

                </div>
            </div>
            <div class="col-md-4 text-left">
                <div class="service-box">
                    <h3 style="font-family: 'Comfortaa Regular'">

                        <?php
                        echo '<p class="text-muted">Book 3: </p>';
                        ?>

                    </h3>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <div class="service-box">
                    <?php
                    echo '<h3>'.$row['b3'].'</h3>';
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-left">
                <div class="service-box">

                </div>
            </div>
            <div class="col-md-4 text-left">
                <div class="service-box">
                    <h3 style="font-family: 'Comfortaa Regular'">

                        <?php
                        echo '<p class="text-muted">Book 4: </p>';
                        ?>

                    </h3>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <div class="service-box">
                    <?php
                    echo '<h3>'.$row['b4'].'</h3>';
                    ?>
                </div>
            </div>
        </div>



        <br><br>
            <br><br><br>
    </section>
</div>



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


</body>

<script>
    $(document).ready(function(){
        $("#bissue, #brenew, #breturn").hide();
        $("#top").animate({scrollTop:0}, 500);
        $("#sissue").click(function(){
            $("#bissue").fadeIn(1500);
        });
        $("#srenew").click(function(){
            $("#brenew").fadeIn(1500);
        });
        $("#sreturn").click(function(){
            $("#breturn").fadeIn(1500);
        });
        $("#hinfo").click(function(){
            $("#top").animate({scrollTop:0}, 1400);
            return false;
        });
        $("#closem").click(function(){
            $("#brenew").fadeOut(1000);
            $("#top").animate({scrollTop:0}, 1600);
            return false;
        });
        $("#closen").click(function(){
            $("#breturn").fadeOut(1000);
            $("#top").animate({scrollTop:0}, 1600);
            return false;
        });
    });
</script>