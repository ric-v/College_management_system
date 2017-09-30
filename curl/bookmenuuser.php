<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
<script src="../assets/js/script.js"> </script>
<script src="../assets/js/jquery-3.1.1.min.js"> </script>

<?php
session_start();
require 'navbar.php';
$post = $_SESSION['tid'];
if ($post==3)
{
    header("location:http://localhost/Project/Student's Card/curl/bookmenu.php");
}
?>
<body  id="top">

<?php

require '../db.php';
$bi = $_POST['btn'];
if (!empty($_POST) && isset($_POST)) {
$sql = "SELECT * FROM Books WHERE bookid ='$bi'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($row['status']>0) {
    //echo 'yes';
}
else{
    //echo 'no';
    header("Location: http://localhost/Project/Student's Card/curl/actions/error.php");
}

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
        <div class="container w3-animate-opacity"><br>
            <div class="row"><br><br>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style="font-family:'Pacifico.ttf';"><u><a href="bookmenuuser.php#info" style="color: white;"
                                                                      id="sinfo">More info</a></u></h2>
                        <h5 class="w3-center text-muted"
                            style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Get more
                            details about the selected book
                            from the curl database</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style="font-family:'Pacifico.ttf';">
                            <u>
                                <?php
                                $prev = $_SESSION['prev'];
                                if($prev == 0) {
                                    echo '<a href="curlprofileuser.php" style="color: white">My Curls</a>';
                                }
                                elseif($prev == 1){
                                    echo '<a href="curlprofilestaff.php" style="color: white">My Curls</a>';
                                }
                                ?>
                            </u>
                        </h2>
                        <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Manage books taken from the college library.</h5>
                    </div>
                </div>
            </div>


            <!-- MORE INFO ON BOOK -->


            <br> <br id="info"><br>
            <div id="binfo">
                <div class="container">
                    <div class="row">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p>
                                Curl / Book Info
                                <p>-------------------------------</p>
                                <h5 class="text-muted">Online Library Management System
                                </h5>
                            </h1>
                            <hr class="primary">
                        </div>
                    </div>
                </div>

                <div class="container"><br>
                    <div class="row">
                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Book Name : </p>';
                                    }
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo $row['name']
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Author : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo $row['author']
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Publisher : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo $row['publisher']
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Year of Publication : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo $row['year']
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Edition : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo $row['edition']
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Volume : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo $row['volume']
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Pages : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo $row['pages']
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Location : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<h2 style="color: lightcoral">'.$row['location'].'</h3>';
                                    ?>

                                </h3>
                            </div>
                        </div>

                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted">Availability status : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $num = $row['status'];
                                    if($num>0)
                                    {
                                        echo '<h3 style="color:lightgreen">available</h3>';
                                    }
                                    else
                                    {
                                        echo '<h3 style="color: lightcoral">no stock available';
                                    }
                                    ?>

                                </h3>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <hr class="primary">


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

