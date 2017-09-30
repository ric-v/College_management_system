
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">

<?php
//require 'navbar.php';
require '../db.php';
?>

<?php

session_start();
$post = $_SESSION['tid'];
$dept = $_SESSION['dept'];
$sem = $_POST['sem'];
echo $sem;
if($post<>1)
{
    header("Location:http://localhost/Project/Student's Card/zenroll/index.php");
}
else {
    $c = 0;
    $fine = 0;
    $sql = "SELECT * FROM student WHERE dept = '$dept'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $f1 = $row['fine'];
        $fine = $fine + $f1;
        $c = $c+1;
    }
        if ($fine <> 0) {

           echo '<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%;padding-top: 10%; background-color: rgba(0, 0, 0, 0.55)">
                <section id="services"><br>
                    <div class="w3-main " style="max-width:100%;margin-top: 3%;">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center"><br>
                                    <h1 class="section-heading"
                                        style="font-family: \'URW Gothic\';color: rgba(81,191,152,0.89)">
                                        <p>-------------------------------</p>
                                        ZENROLL / Start new semester
                                        <p>-------------------------------</p>
                                    </h1>
                                    <h5 class="text-muted">Online Semester Enrollment
                                    </h5>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="service-box">
                                        <img src="../assets/icons/smartphone-with-sad-face-on-screen.svg"
                                             style="width: 80%;">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 text-center">
                                    <div class="service-box">
                                        <h2 style="font-family:\'Pacifico.ttf\';"><u>Start New Semester</u></h2><br>
                                        <h3 class="w3-center "
                                            style=" font-family: \'Comfortaa Regular\'; color: tomato">
                                            Can\'t start new semester as not all students have cleared their
                                            dues.<br><br>
                                            <a href="duelist.php" style="color: #81aed3"><u>Click here</u></a> to get
                                            the list of students, still to clear dues
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <hr>
                    <br><br><br><br><br>
                </section>
            </div>';


        } else {
            $sqls = "DELETE FROM student WHERE dept = '$dept' AND sem =";
            $results = mysqli_query($conn, $sqls);

            echo '<div class="w3-main w3-content w3-padding "
                 style="max-width:100%;margin-top: 0%;padding-top: 10%; background-color: rgba(0, 0, 0, 0.55)">
                <section id="services"><br>
                    <div class="w3-main " style="max-width:100%;margin-top: 3%;">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center"><br>
                                    <h1 class="section-heading"
                                        style="font-family: \'URW Gothic\';color: rgba(81,191,152,0.89)">
                                        <p>-------------------------------</p>
                                        ZENROLL / Start new semester
                                        <p>-------------------------------</p>
                                    </h1>
                                    <h5 class="text-muted">Online Semester Enrollment
                                    </h5>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="service-box">
                                        <img src="../assets/icons/smartphone-with-a-smile.svg" style="width: 80%;">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 text-center">
                                    <div class="service-box">
                                        <h2 style="font-family:\'Pacifico.ttf\';"><u>Start New Semester</u></h2><br>
                                        <h3 class="w3-center "
                                            style="font-family: \'Comfortaa Regular\'; color: #81aed3">
                                            New Sem started successfully<br><br>Ask all students to register to the new
                                            sem</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <hr>
                    <br><br><br><br><br>
                </section>
            </div>';

        }
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


