<!DOCTYPE html>
<html lang="en" xmlns:rgba="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="UTF-8">
    <title>Student's Card</title>
    <meta charset="UTF-8">

</head>

<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">

<?php
session_start();
require 'navbar.php'
?>
<?php

require '../db.php';

if($_SESSION['prev']==0)
{
    header("Location: http://localhost/Project/Student's Card/zenroll/dashboard.php");
}
$uname = $_SESSION['user'];
$sql = "SELECT * FROM staff WHERE email = '$uname'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$post = $row ['post'];
if($post==1) {
    echo '<div class="w3-main w3-content w3-padding w3-animate-opacity"
         style="max-width:100%;margin-top: 0%;padding-top: 10%; background-color: rgba(0, 0, 0, 0.55)">
        <section id="services"><br>
            <div class="w3-main " style="max-width:100%;margin-top: 3%;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center"><br>
                            <h1 class="section-heading" style="font-family: \'URW Gothic\';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p>
                                ZENROLL
                                <p>-------------------------------</p>
                            </h1>
                            <h5 class="text-muted">Online Semester Enrollment
                            </h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:\'Pacifico.ttf\';"><u><a href="newsemsel.php"
                                                                              style="color: white;">New semester</a></u>
                                </h2>
                                <h5 class="w3-center text-muted"
                                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">
                                    Start new semester by clearing previous student activities
                                    such as books taken and fine amount. To do so
                                    all students must clear their dues. This power rests with the HOD of the
                                    department</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:\'Pacifico.ttf\';"><u><a href="searchuser.php"
                                                                              style="color: white;">Manage
                                            account</a></u></h2>
                                <h5 class="w3-center text-muted"
                                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">
                                    Edit, Update or remove a certain user account from the
                                    zenroll database. The HOD or the assistant proffessors can only manipulate these
                                    details</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:\'Pacifico.ttf\';"><u><a href="fine.php" style="color: white;">Add
                                            or clear fine</a></u></h2>
                                <h5 class="w3-center text-muted"
                                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Add
                                    or remove fine amount from a student database.
                                    Staff can assign an amount to the user account</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:\'Pacifico.ttf\';"><u><a href="staffroll.php"
                                                                              style="color: white;">Complete Profile</a></u>
                                </h2>
                                <h5 class="w3-center text-muted"
                                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">
                                    Complete your profile as a staff of this institute.
                                    To get access to the zenroll database staff must fill up their credentials. The
                                    admin must first
                                    elevate the user to super-user inorder to complete staff profile</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>


        </section>
        <br><br>
    </div>';
    }
    elseif ($post==0 or $post == 2)
    {
        echo '<div class="w3-main w3-content w3-padding w3-animate-opacity"
         style="max-width:100%;margin-top: 0%;padding-top: 10%; background-color: rgba(0, 0, 0, 0.55)">
        <section id="services"><br>
            <div class="w3-main " style="max-width:100%;margin-top: 3%;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center"><br>
                            <h1 class="section-heading" style="font-family: \'URW Gothic\';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p>
                                ZENROLL
                                <p>-------------------------------</p>
                            </h1>
                            <h5 class="text-muted">Online Semester Enrollment
                            </h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:\'Pacifico.ttf\';"><u><a href="searchuser.php"
                                                                              style="color: white;">Manage account</a></u></h2>
                                <h5 class="w3-center text-muted"
                                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">
                                        Edit, Update or remove a certain user account from the
                                    zenroll database. The HOD or the assistant proffessors can only manipulate these
                                    details</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:\'Pacifico.ttf\';"><u><a href="fine.php" style="color: white;">Add or clear fine</a></u></h2>
                                <h5 class="w3-center text-muted"
                                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Add
                                    or remove fine amount from a student database.
                                    Staff can assign an amount to the user account</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:\'Pacifico.ttf\';"><u><a href="staffroll.php"
                                                                              style="color: white;">Complete Profile</a></u>
                                </h2>
                                <h5 class="w3-center text-muted"
                                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">
                                        Complete your profile as a staff of this institute.
                                    To get access to the zenroll database staff must fill up their credentials. The
                                    admin must first
                                    elevate the user to super-user inorder to complete staff profile</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>


        </section>
        <br><br>
    </div>';
    }
else
{
    header("Location: http://localhost/Project/Student's Card/index.php");
}
?>
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
        <input type="hidden" value="

        <div class="col-md-12 text-center copyright">
            <p><small class="block" style="margin-left: 35%">&copy; 2017. All Rights Reserved.</small>
                <small class="block">College of Engineering, Kidangoor</small></p>
        </div>

    </div>
</footer>


</div>

</body>
</html>

