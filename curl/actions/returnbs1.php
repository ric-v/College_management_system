<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>

<?php

session_start();
//require 'navbar.php';
require '../../db.php';
$bid = $_POST['b1'];
$adm = $_POST['adm'];

?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; min-height: 100%; background-color: rgba(0, 0, 0, 0.55)">

    <?php

    $sql = "SELECT * FROM staff WHERE adm ='" . $adm . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $sql2 = "SELECT * FROM Books WHERE bookid ='" . $bid . "'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $bname = $row2['name'];

    ?>


    <section id="services">
        <div class="container" style="min-height: 100%">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Curl / Return
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1><br><br><hr><br>

                    <?php
                    $quantity = $row2['status'];
                    $q = $quantity + 1;
                    $sqlu1="UPDATE staff "." SET b1 = '' "." WHERE adm ='$adm'" ;
                    $resultu1 = mysqli_query($conn, $sqlu1);
                    $sql2 = "UPDATE Books SET status = ('" . $q . "') WHERE bookid = ('".$bid."')";
                    $result2 = mysqli_query($conn, $sql2);
                    ?>
                    <h3 style="font-family: 'Comfortaa Regular'" class="text-muted">
                        <h3 style="font-family: 'Comfortaa Regular'">
                            <?php
                            echo $bname;
                            ?></h3>
                        <h3 style="font-family: 'Comfortaa Regular'" class="text-muted">
                            Returned successfully
                        </h3><h4 style="color: tomato">Redirecting...</h4>
                        or you can <a href="../search.php">click here</a> to return
                        <hr class="primary"><br><br><br>
                        <!--
                        <script src="../../assets/js/jquery-3.1.1.min.js"> </script>
                        <script>
                            $(document).ready(function () {
                                alert("click 'OK' to continue");
                            });
                        </script>
                        -->

                        <script type="text/javascript">
                            function pageRedirect() {
                                window.location.replace("http://localhost/Project/Student's Card/curl/dashboard.php");
                            }
                            setTimeout("pageRedirect()", 5000);
                        </script>