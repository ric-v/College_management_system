<!DOCTYPE html>
<html lang="en" xmlns:rgba="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="UTF-8">
    <title>Student's Card</title>
    <meta charset="UTF-8">

</head>

<body>

<?php

require 'navbar.php';
if(isset($_SESSION['user'])) {
    $sql2 = "SELECT * FROM student WHERE email = '" . $_SESSION['user'] . "'";
    $result1 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_array($result1);
    if (isset($_SESSION['user'])) {
        if ($_SESSION['prev'] == 2) {
            header("location:http://localhost/Project/Student's Card/adminPrev.php");
        }
    }
}
?>

<div class="w3-main w3-content w3-padding" style="max-width:100%;margin-top: 0%;padding-top: 10%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services"><br>
    <div class="w3-main " style="max-width:100%;margin-top: 3%;">

        <?php

        if(!isset($_SESSION['user']))
        {
            echo '<br><div class="text-center h2" style=" margin: 4%;">
                  <a href="Sign-in.php">Sign-in</a> or <a href="Sign-up.php">Sign-up</a>
                  <br><br></div><hr>';
        }
        else
        {
            $_SESSION['adm'] = $row['adm'];
            if($_SESSION['tid']==3)
            {
                echo '<h4 class="w3-center" style="font-family: \'Comfortaa Regular\'">Logged in as Librarian</h4>';
                require 'userlib.php';
            }
            if($_SESSION['tid']==2)
            {
                echo '<h4 class="w3-center" style="font-family: \'Comfortaa Regular\'">Logged in as Office staff</h4>';
                require 'useroffice.php';
            }
        }

        ?>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)"><p>----------------------------------------------</p>
                                    Student activities made easy
                            <p>-----------------------------------------------</p></h1>
                            <br><hr>
                        </div>
                    </div>
                </div><br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style=" font-family:'Pacifico.ttf';"><u><a href="curl/dashboard.php" style="color: white;">Curl</a></u></h2>
                                <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Curl is an online library management
                                system administered by the librarian. Students and teachers can surf and aquire the book they desire, perform a renewal
                                or request a return for books</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:'Pacifico.ttf';"><u><a href="zenroll/index.php" style="color: white;">Zenroll</a></u></h2>
                                <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Enroll to the
                                semester with ease with Zenroll. Fill in the queries and clear your dues to automate your semester enrollment.
                                Teachers administer the input queries and validates the input data</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:'Pacifico.ttf';"><u>Up to Date</u></h2>
                                <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Student card
                                is a collective work of students and teachers which ensures the most authentic information will be published.
                                Students can keep track of their progress. teachers can keep track of dues and other student details, all maitained in one single
                                database</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <h2 style="font-family:'Pacifico.ttf';"><u>Simple</u></h2>
                                <h5 class="w3-center text-muted" style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Student card
                                is made with simplicity in mind and without omiting any functionalities or services. Almost all activities of the college are covered under
                                student card making the task of teachers and students simple</h5>
                            </div>
                        </div>
                    </div>
                </div>

        <hr id="about">

            <?php

            if(isset($_SESSION['user']))
            {
                if($row['sem']<>"") {
                    if ($_SESSION['prev'] == 0) {
                        if ($row['adm'] == "") {
                            echo '<h3 class="text-center" style = "color: tomato">Please complete your profile <a href="zenroll/dashboard.php"> here </a></h3><hr>';
                        }
                        require 'user0.php';
                    } elseif ($_SESSION['prev'] == 1) {
                        if ($_SESSION['tid'] <> 3) {
                            require 'user1.php';
                        }
                    }
                }
            }
            ?>


            </section><br><br>
        </div>

        <div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%; background-color: rgba(0, 0, 0, 0.55)">
            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">

                            </div>
                        </div>
                    </div>
                </div>
            </section><br><br>
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
                <input type="hidden" value="
                <?php
                $sql = "SELECT * FROM student WHERE email = '".$_SESSION['user']."'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                echo $row['adm'];
                if(!empty($row))
                {
                //echo 'enter';
                header("Location: http://localhost/Project/Student's Card/index.php");
                }
                else
                {
                //echo $row['adm'];
                header("Location: http://localhost/Project/Student's Card/zenroll/dashboard.php");
                }
                ?> ">
                <div class="col-md-12 text-center copyright">
                    <p><small class="block">&copy; 2017. All Rights Reserved.</small>
                        <small class="block">College of Engineering, Kidangoor</small></p>
                </div>

            </div>
        </footer>


        </div>

    </body>
</html>

