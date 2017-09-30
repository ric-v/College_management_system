<?php
session_start();
//require 'navbar.php';
require '../../db.php';
$username = $_SESSION['user'];
if(!isset($_SESSION['user']))
{
    header("Location: http://localhost/Project/Student's Card/index.php");
}
?>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
    <meta charset="UTF-8">
    <title>Semester Enrollment</title>
    <meta charset="UTF-8">

</head>

<script src="../../assets/js/script.js"> </script>


<div id="main" >
    <div class="w3-top" style="margin-left: -15px;background-color: rgba(50,50,50,1);box-shadow: 5px 5px 15px 8px black">
        <div class="w3-xlarge w3-padding-small" style='max-width:100%;rgba(50,50,50,1);'>
        <span style="font-size:30px; cursor:pointer; text-align: left;" onclick="openNav()">&#9776;
            <a href="../dashboard.php" style="text-decoration: none" class="hd web_header">
        </span>
            <span style="padding-left: 15px; text-align: center" class="w3-animate-opacity">Curl</span></a>
            <?php
            if(isset($_SESSION['user']))
                echo '<span id="test1" class="w3-text-black w3-hover-text-white w3-text-white w3-large" style="float: right;margin-top:10px;padding-right:40px"> <a href="../logout.php">logout </a></span>
                <span id="test" class="w3-text-white w3-hover-text-white w3-large" style="float: right; margin-top: 10px;padding-right: 20px; cursor:pointer;">'.$_SESSION['user'].' |</span>';?>
        </div>
    </div>

</div>

<div id="mySidenav" class="sidenav"  style="background-color: rgba(50,50,50,1)">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <img src="../../assets/icons/man.svg" style="width: 80%;margin-top: 15%; margin-bottom: 25%;margin-left: 10%;">
    <a href="../../index.php">Home</a>
    <a href="../../curl/dashboard.php">Curl</a>
    <a href="../../zenroll/dashboard.php">Zenroll</a>
    <a href="../../logout.php">Signout</a>
</div>


<!DOCTYPE html>
<html lang="en">

<body>


<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 5% ">

    <form action="bookadded.php" method="POST">
        <div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%; background-color: rgba(0, 0, 0, 0.55)">
            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p>
                                CURL / ADD BOOK
                                <p>-------------------------------</p>
                                <h5 class="text-muted">Online Library Management
                                </h5>
                            </h1>
                            <hr class="primary">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                Book Name:
                            </span>
                                <span class="col-md-6"><input type="text" name="bname" class="textInput2"
                                                              placeholder="Enter the book name" style="text-transform: capitalize"></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                Author:
                            </span>
                                <span class="col-md-6"><input type="text" name="bauth" class="textInput2"
                                                              placeholder="Enter the author name" style="text-transform: capitalize"required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                Publisher:
                            </span>
                                <span class="col-md-6"><input type="text" name="bpub" class="textInput2"
                                                              placeholder="Enter publisher" required></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                                <span class="col-md-4 w3-left-align">
                                    Book ID:
                                </span>
                                <span class="col-md-6"><input type="text" name="bid" class="textInput2"
                                                              placeholder="Enter Book ID" required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                                   <span class="col-md-4 w3-left-align">
                                        Location:
                                   </span>
                                <span class="col-md-6">
                                        <input type="text" name="blocation" class="textInput2"
                                               placeholder="Enter book location" required>
                                   </span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                                    <span class="col-md-4 w3-left-align">
                                        pages:
                                    </span>
                                <span class="col-md-6"><input type="text" name="bpages" class="textInput2"
                                                              placeholder="Enter the number of pages" required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                                         <span class="col-md-4 w3-left-align">
                                             Year  of publication:
                                         </span>
                                <span class="col-md-6"><input type="text" name="byear" style="text-transform: capitalize"
                                                              class="textInput2" placeholder="Enter the year of publication" required></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                                         <span class="col-md-4 w3-left-align">
                                             Quantity:
                                         </span>
                                <span class="col-md-6"><input type="text" name="bquantity" class="textInput2"
                                                              placeholder="Enter the quantity" style="text-transform: capitalize" required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                                         <span class="col-md-4 w3-left-align">
                                             Edition:
                                         </span>
                                <span class="col-md-6"><input type="text" name="bedition" style="text-transform: capitalize"
                                                              class="textInput2" placeholder="Enter Edition" required></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                                         <span class="col-md-4 w3-left-align">
                                             Volume:
                                         </span>
                                <span class="col-md-6"><input type="text" name="bvolume" class="textInput2"
                                                              placeholder="Enter Volume" style="text-transform: capitalize" required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="w3-center">
                        <input type="submit" value="Add book" class="subtn">
                    </div>
                    <br><br>

                </div>
            </section>
        </div>
    </form>

    <hr id="about">

    <hr>


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


</body>
</html>