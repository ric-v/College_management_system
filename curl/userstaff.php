<?php

require '../db.php';
$uname = $_SESSION['user'];
$sql = "SELECT * FROM staff WHERE email = '".$uname."'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
<script src="../assets/js/script.js"> </script>
<script src="../assets/js/jquery-3.1.1.min.js"> </script>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
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

        <div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%;min-height: 100%">
            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style=" font-family:'Pacifico.ttf';">
                                    <u>
                                        <a href="search.php" style="color: white">Browse Books</a>
                                    </u>
                                </h2>
                                <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Search and find books available in the library.
                                    Search can be filtered with bookID or name or author name or publisher. Authority to issue a book
                                    rests with the librarian. You can view the available book list from curl</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:'Pacifico.ttf';">
                                    <u>
                                        <a href="curlprofileuser.php" style="color: white">My Curls</a>
                                    </u>
                                </h2>
                                <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Manage books taken from the college library.
                                    This division mainly includes renewal of books already taken. Every book can be renewed exactly once and
                                    not after the return date</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:'Pacifico.ttf';"><u> <a href="dashboard.php#footer1" style="color: white">Contact Us</a></u></h2>
                                <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Get in touch with us for your queries
                                    and suggestions to improve the library system</h5>
                            </div>
                        </div>
                    </div>
                </div><br>
                <hr>
            </section>
        </div>

        <!-- User Info -->

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
                                echo '<p class="text-muted">User Name : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo $row['fname']." ".$row['lname'];
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
                                echo '<p class="text-muted">Staff ID : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo $row['adm']
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
                                echo '<p class="text-muted">Department : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo $row['dept']
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
                                echo '<p class="text-muted">Gender : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo $row['gender']
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
                                echo '<p class="text-muted">Date Of Birth : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo $row['dob']
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
                                echo '<p class="text-muted">Phone : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">
                                <?php
                                echo $row['phone'];
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
                                echo '<p class="text-muted">email : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">
                                <?php
                                echo $row['email'];
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
                                echo '<p class="text-muted">Current address : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">
                                <?php
                                echo $row['caddr'];
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
                                echo '<p class="text-muted">Permenant address : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">
                                <?php
                                echo $row['paddr'];
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>


        <br><br><br>



    </section>
</div>


