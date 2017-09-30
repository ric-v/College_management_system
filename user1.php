<?php

require 'db.php';
$uname = $_SESSION['user'];
$sql = "SELECT * FROM staff WHERE email = '".$uname."'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
<script src="assets/js/script.js"> </script>
<script src="assets/js/jquery-3.1.1.min.js"> </script>


<!-- User Info -->

<div class="container">
    <div class="row">
        <div class="text-center"><br>
            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                <p>-------------------------------</p>
                Curl
                <p>-------------------------------</p>
                <h5 class="text-muted">Online Library Management System
                </h5>
            </h1>
            <hr class="primary">
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
