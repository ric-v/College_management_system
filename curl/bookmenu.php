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
if($post<>3)
{
    header("Location: http://localhost/Project/Student's Card/curl/bookmenuuser.php");
}
?>
<body  id="top">

<?php

require '../db.php';
$bi = $_POST['btn'];
//$bn = $_POST['bname'];
if (!empty($_POST) && isset($_POST)) {
$sql = "SELECT * FROM Books WHERE bookid ='$bi'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$bname = $row['name'];
if($row['status']>0) {
    //echo 'yes';
}
else{
    echo $bi;
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
            <div class="row">
                <div class="col-lg-2 col-md-6 text-center">
                <div class="service-box">

                </div>
            </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style=" font-family:'Pacifico.ttf';"><u><a href="bookmenu.php#issue" style="color: white;"
                                                                       id="sissue">Issue Book</a></u></h2>
                        <h5 class="w3-center text-muted"
                            style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Issue a book
                            to a user with his/her adminsssion
                            number (only admin can confirm an issue operation)</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style="font-family:'Pacifico.ttf';"><u><a href="bookmenu.php#info" style="color: white;"
                                                                      id="sinfo">More info</a></u></h2>
                        <h5 class="w3-center text-muted"
                            style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Get more
                            details about the selected book
                            from the curl database</h5>
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
                    <div class="container">
                        <div class="row">
                            <div class="text-center"><br>
                                <div class="col-md-12">
                                    <input type="submit" class="subtn" value="Get more options" id="hinfo">
                                </div><br
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <hr class="primary">



            <!-- ISSUE BOOKS -->

            <br> <br  id="issue"><br>
            <div id="bissue">
            <div class="container">
                <div class="row">
                    <div class="text-center"><br>
                        <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                            <p>-------------------------------</p><a href="bookmenu.php#top" id="closem" onclick="closem()"
                                                                     style="float: right;color: teal">X</a>
                            Curl / Issue Book
                            <p>-------------------------------</p>
                            <h5 class="text-muted">Online Library Management System
                            </h5>
                        </h1>
                        <hr class="primary">
                    </div>
                </div>
            </div>


            <div class="container"><br>

                <form action="actions/issuebu.php" method="post">

                <div class="row">
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="service-box">
                            <h2 style="font-family: 'Comfortaa Regular'">User ID</h2>
                            <br><input type="text" name="uname" class="textInput2" placeholder="Enter user id"
                                       style="text-transform: uppercase" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <?php
                            $d=strtotime("+2 Weeks ");?>
                                <input type="hidden" name="date1" class="textInput2" value="<?php echo date("d-m-Y", $d) ?> ">
                            <?php
                            $d2=strtotime("+4 Weeks ");?>
                            <input type="hidden" name="date2" class="textInput2" value="<?php echo date("d-m-Y", $d2) ?> ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="service-box">
                            <input type="hidden" class="textInput2" name="bid" value="<?php echo $bi ?>">
                            <h2 style="font-family: 'Comfortaa Regular'">Book Name</h2>
                            <br><input type="text" class="textInput2" value="<?php echo $bname ?>">
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="container">
                    <div class="row">
                        <div class="text-center"><br>
                            <div class="col-md-12">
                                <input type="submit" class="subtn" value="Issue" id="hissue">
                            </div><br>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            </div>


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
