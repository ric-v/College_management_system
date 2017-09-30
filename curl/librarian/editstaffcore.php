<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>
<script src="../../assets/js/jquery-3.1.1.min.js"> </script>

<?php
session_start();
require 'navbar.php';
?>

<body  id="top">

<?php

require '../../db.php';
$adm = $_POST['btn'];
if (!empty($_POST) && isset($_POST)) {
    $sql = "SELECT * FROM staff WHERE adm ='$adm'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}
?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br><br><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Curl / Staff Library
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

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style="font-family:'Pacifico.ttf';"><u><a href="editstaffcore.php#info" style="color: white;"
                                                                      id="sinfo">More info</a></u></h2>
                        <h5 class="w3-center text-muted"
                            style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Get more
                            details about the user
                            from the zenroll database</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style="font-family:'Pacifico.ttf';"><u><a href="editstaffcore.php#return" style="color: white;"
                                                                      id="sreturn">Return Book</a></u></h2>
                        <h5 class="w3-center text-muted"
                            style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Take back the issued book to curl database</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">

                    </div>
                </div>
            </div>


            <!-- MORE INFO ON USER -->


            <br> <br id="info"><br>
            <div id="binfo">
                <div class="container">
                    <div class="row">
                        <form action="updateuser.php" method="post">
                            <div class="text-center"><br>
                                <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                    <p>-------------------------------</p>
                                    Curl / Staff Info
                                    <p>-------------------------------</p>
                                    <h5 class="text-muted">Online Library Management System
                                    </h5>
                                </h1>
                                <hr class="primary">
                            </div>
                    </div>
                </div>

                <div class="container"><br>
                    <form class="row">
                        <input type="hidden" class="textInput4" name="uemail" value="<?php $uemail = $row['email'];
                        echo $uemail ?>">
                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted" style="margin-top: 5%">First Name : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $ufname = $row['fname'];?>
                                    <input type="text" class="textInput4" name="ufname" value="<?php echo $ufname ?>" readonly ?>
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Last Name : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $ulname = $row['lname'];?>
                                    <input type="text" class="textInput4" name = "ulname" style="text-transform: capitalize;"
                                           value="<?php echo $ulname ?>" readonly>
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Age : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $uage = $row['age'];?>
                                    <input type="text" class="textInput4" name="uage"
                                           value="<?php echo $uage ?>" readonly>
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
                                    echo '<p class="text-muted" style="margin-top: 5%">gender : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $ugender = $row['gender'];?>
                                    <input type="text" class="textInput4" name="ugender"
                                           value="<?php echo $ugender ?>" readonly>
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Department : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $udept = $row['dept'];?>
                                    <input type="text" class="textInput4" name="udept"
                                           value="<?php echo $udept ?>" readonly>
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Phone : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $uphone = $row['phone'];?>
                                    <input type="text" class="textInput4" name="uphone"
                                           value="<?php echo $uphone ?>" readonly>
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Staff ID : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $uadm = $row['adm'];?>
                                    <input type="text" class="textInput4" name="uadm"
                                           value="<?php echo $uadm ?>" readonly>
                                </h3>
                            </div>
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="text-center" style="margin-top: 5%"><br>
                                    <div class="col-md-12">

                                        <?php

                                        if($_SESSION['tid']==3)
                                        {

                                        }
                                        else{
                                            echo '<input type="submit" class="subtn" value="Update info" id="hreturn">';
                                        }

                                        ?>

                                    </div><br
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>

            <!-- RETURN BOOKS -->

            <br> <br  id="return"><br>
            <div id="breturn">
                <div class="container">
                    <div class="row">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p><a href="editstaffcore.php#top" id="closem" onclick="closem()"
                                                                         style="float: right;color: teal">X</a>
                                Curl / Return Book
                                <p>-------------------------------</p>
                                <h5 class="text-muted">Online Library Management System
                                </h5>
                            </h1>
                            <hr class="primary">
                        </div>
                    </div>
                </div>


                <div class="container"><br>
                    <form action="../actions/returnbs1.php" method="post">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                    <br><br><input type="text" name="b1" class="textInput2" value ="<?php echo $row['b1']; ?>" readonly>
                                </div>
                            </div>
                            <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>

                            <div class="col-md-6 text-center">
                                <div class="service-box">
                                    <?php
                                    if($row['b1']=="")
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Return" id="hrenew" 
                                            style ="background-color: rgba(122,118,122,0.89)" disabled>';
                                    }
                                    else
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Return" id="hrenew">';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>


                        <form action="../actions/returnbs2.php" method="post">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <div class="service-box">
                                        <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                        <br><br><input type="text" name="b2" class="textInput2" value ="<?php echo $row['b2']; ?>" readonly>
                                    </div>
                                </div>
                                <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>

                                <div class="col-md-6 text-center">
                                    <div class="service-box">
                                        <?php
                                        if($row['b2']=="")
                                        {
                                            echo '<input type="submit" class="renewbutn" value="Return" id="hrenew" 
                                            style ="background-color: rgba(122,118,122,0.89)" disabled>';
                                        }
                                        else
                                        {
                                            echo '<input type="submit" class="renewbutn" value="Return" id="hrenew">';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </form>

                    <form action="../actions/returnbs3.php" method="post">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                    <br><br><input type="text" name="b3" class="textInput2" value ="<?php echo $row['b3']; ?>" readonly>
                                </div>
                            </div>
                            <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>

                            <div class="col-md-6 text-center">
                                <div class="service-box">
                                    <?php
                                    if($row['b3']=="")
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Return" id="hrenew" 
                                            style ="background-color: rgba(122,118,122,0.89)" disabled>';
                                    }
                                    else
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Return" id="hrenew">';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="../actions/returnbs4.php" method="post">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                    <br><br><input type="text" name="b2" class="textInput2" value ="<?php echo $row['b4']; ?>" readonly>
                                </div>
                            </div>
                            <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>

                            <div class="col-md-6 text-center">
                                <div class="service-box">
                                    <?php
                                    if($row['b4']=="")
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Return" id="hrenew" 
                                            style ="background-color: rgba(122,118,122,0.89)" disabled>';
                                    }
                                    else
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Return" id="hrenew">';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>

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