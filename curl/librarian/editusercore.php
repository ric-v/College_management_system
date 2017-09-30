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
    $sql = "SELECT * FROM student WHERE adm ='$adm'";
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
                        Curl / Account Manager
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
                        <form action="clear.php" method="post">
                            <input type="hidden" value="0" name="clear">
                            <input type="hidden" value="<?php echo $adm ?>" name="uname">
                            <h2 style="font-family:'Pacifico.ttf';"><u><input type="submit" class="subtn" style="background-color: transparent;"
                                    value="Clear dues"></u></h2>
                            <h5 class="w3-center text-muted"
                                style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Clear the fine amount entered from the curl system</h5>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style="font-family:'Pacifico.ttf';"><u><a href="editusercore.php#info" style="color: white;"
                                                                      id="sinfo">More info</a></u></h2>
                        <h5 class="w3-center text-muted"
                            style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Get more
                            details about the user
                            from the zenroll database</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                <h2 style="font-family:'Pacifico.ttf';"><u><a href="editusercore.php#renew" style="color: white;"
                                                              id="srenew">Renew Book</a></u></h2>
                <h5 class="w3-center text-muted"
                    style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Update the
                    return date for a book
                    already taken by the user. Can be done twice for a book</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h2 style="font-family:'Pacifico.ttf';"><u><a href="editusercore.php#return" style="color: white;"
                                                                      id="sreturn">Return Book</a></u></h2>
                        <h5 class="w3-center text-muted"
                            style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Take back the issued book to curl database</h5>
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
                                    Curl / Edit User Info
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
                                    <input type="text" class="textInput4" name="ufname" ;"
                                           value="<?php echo $ufname ?>">
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
                                           value="<?php echo $ulname ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Date of birth : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $udob = $row['dob'];?>
                                    <input type="date" class="textInput4" name="udob"
                                           value="<?php echo $udob ?>">
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
                                           value="<?php echo $uage ?>">
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
                                           value="<?php echo $ugender ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Semester : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $usem = $row['sem'];?>
                                    <input type="text" class="textInput4" name="usem"
                                           value="<?php echo $usem ?>">
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
                                           value="<?php echo $udept ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Roll No. : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $urno = $row['rno'];?>
                                    <input type="text" class="textInput4" name="urno"
                                           value="<?php echo $urno ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">University Register No. : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $uuno = $row['uno'];?>
                                    <input type="text" class="textInput4" name="uuno"
                                           value="<?php echo $uuno ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Religion : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $ureligion = $row['religion'];?>
                                    <input type="text" class="textInput4" name="ureligion"
                                           value="<?php echo $ureligion ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Caste : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $ucaste = $row['caste'];?>
                                    <input type="text" class="textInput4" name="ucaste"
                                           value="<?php echo $ucaste ?>">
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
                                           value="<?php echo $uphone ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Admission Number : </p>';
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
                                           value="<?php echo $uadm ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Guardian\'s Name : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $ugname = $row['gname'];?>
                                    <input type="text" class="textInput4" name="ugname"
                                           value="<?php echo $ugname ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Guardian\'s Phone No. : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $ugphone = $row['gphone'];?>
                                    <input type="text" class="textInput4" name="ugphone"
                                           value="<?php echo $ugphone ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Library fine : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php ?>
                                    <input type="text" class="textInput4" name="Library fine"
                                           value="<?php echo $row['fine'] ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Other fine : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php ?>
                                    <input type="text" class="textInput4" name="Other fine"
                                           value="<?php echo $row['ofine'] ?>">
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


            <!-- RENEW BOOKS -->


            <br> <br  id="renew"><br>
            <div id="brenew">
                <div class="container">
                    <div class="row">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p><a href="editusercore.php#top" id="closem" onclick="closem()"
                                                                         style="float: right;color: teal">X</a>
                                Curl / Renew Book
                                <p>-------------------------------</p>
                                <h5 class="text-muted">Online Library Management System
                                </h5>
                            </h1>
                            <hr class="primary">
                        </div>
                    </div>
                </div>


                <div class="container"><br>
                    <form action="../actions/renewbu1.php" method="post">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                    <br><input type="text" name="b1" class="textInput2" value ="<?php echo $row['b1']; ?>" readonly>
                                </div>
                            </div>
                            <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>
                            <div class="col-md-4 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">
                                        <?php
                                            $d=strtotime("+2 Weeks ");
                                            $de = date("d-m-Y", $d);
                                            $today = date("d-m-Y");
                                            $now = time();
                                            $your_date = strtotime($row['fd1']);
                                            $datediff = $now - $your_date;
                                            $sum = floor($datediff/(60*60*24));

                                            if($sum<=0)
                                            {
                                                echo 'Extended date</h3><br><input type="text" name="d1" class="textInput2" value ="'.$de.'" readonly>';
                                            }
                                            if($sum>0)
                                            {
                                                echo '<h3 style="font-family: \'Comfortaa Regular\';color: tomato;">';
                                                //echo 'hi';
                                                echo 'Return date expired on</h3><br>
                                                <input type="text" name="d1" class="textInput2" value ="'.$row['d1'].'" readonly>';
                                                echo '<input type="hidden" name="s1" class="textInput2" value="'. $sum.'" readonly>';
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="service-box">

                                    <?php
                                    $d=strtotime("+2 Weeks ");
                                    $de = date("d-m-Y", $d);
                                    if($sum<=0)
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Renew" id="hrenew">';
                                    }
                                    ?>
                                        <?php
                                        if($sum>0)
                                        {
                                            echo '<input type="submit" class="renewbutn" value="Renew" id="hrenew"
                                                style="background-color: #929292" disabled>';
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="../actions/renewbu2.php" method="post">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                    <br><input type="text" name="b2" class="textInput2" value ="<?php echo $row['b2']; ?>" readonly>
                                </div>
                            </div>
                            <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>
                            <div class="col-md-4 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">
                                        <?php
                                            $d=strtotime("+2 Weeks ");
                                            $de = date("d-m-Y", $d);
                                            $today = date("d-m-Y");
                                            $now = time();
                                            $your_date = strtotime($row['fd2']);
                                            $datediff = $now - $your_date;
                                            $sum = floor($datediff/(60*60*24));
                                            if($sum<=0)
                                            {
                                                echo 'Extended date</h3><br><input type="text" name="d2" class="textInput2" value ="'.$de.'" readonly>';
                                            }
                                            if($sum>0)
                                            {
                                                echo '<h3 style="font-family: \'Comfortaa Regular\';color: tomato;">';
                                                //echo 'hi';
                                                echo 'Return date expired on</h3><br>
                                                <input type="text" name="d2" class="textInput2" value ="'.$row['d2'].'" readonly>';
                                                echo '<input type="hidden" name="s2" class="textInput2" value="'. $sum.'" readonly>';
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="service-box">

                                    <?php
                                    if($sum<0)
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Renew" id="hrenew">';
                                    }
                                    ?>
                                    <?php
                                    if($sum>=0)
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Renew" id="hrenew"
                                                style="background-color: #929292" disabled>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>



            <!-- RETURN BOOKS -->

            <br> <br  id="return"><br>
            <div id="breturn">
                <div class="container">
                    <div class="row">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p><a href="editusercore.php#top" id="closem" onclick="closem()"
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
                    <form action="../actions/returnbu1.php" method="post">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                    <br><input type="text" name="b1" class="textInput2" value ="<?php echo $row['b1']; ?>" readonly>
                                </div>
                            </div>
                            <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>
                            <div class="col-md-4 text-center">
                                <div class="service-box">
                                    <h3 style="font-family: 'Comfortaa Regular'">
                                        <?php
                                        $d=strtotime("+2 Weeks ");
                                        $de = date("d-m-Y", $d);
                                        $today = date("d-m-Y");
                                        $now = time();
                                        $your_date = strtotime($row['fd1']);
                                        $datediff = $now - $your_date;
                                        $sum = floor($datediff/(60*60*24));
                                        if($sum<=0)
                                        {
                                            echo 'Return date</h3>
                                                  <br><input type="text" name="d1" class="textInput2" value ="'.$row['d1'].'" readonly>';
                                        }
                                        if($sum>0)
                                        {
                                            echo 'fine amount</h3>';
                                            echo '<input type="text" class="textInput2" value="' . $sum . '" name="fine">';
                                            echo '<h3 style="font-family: \'Comfortaa Regular\';color: tomato;">';
                                            echo 'Return date expired on</h3>
                                                    <br><input type="text" name="d1" class="textInput2" value ="'.$row['d1'].'" readonly>';
                                        }
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="service-box">
                                    <?php
                                    if($row['d1']=="")
                                    {
                                        echo '<input type="submit" class="renewbutn" value="Return" id="hrenew" disabled
                                            style="background-color: #929292">';
                                    }
                                    else
                                    {
                                        if ($sum <= 0) {
                                            echo '<input type="submit" class="renewbutn" value="Return" id="hrenew">';
                                        }
                                        ?>
                                        <?php
                                        if ($sum > 0) {
                                            echo '<input type="submit" class="renewbutn" value="Return with fine" id="hrenew"
                                                    style="background-color: #929292">';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </form>
<br>
<hr>

                    <div class="container"><br>
                        <form action="../actions/returnbu2.php" method="post">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <div class="service-box">
                                        <h3 style="font-family: 'Comfortaa Regular'">Book id</h3>
                                        <br><input type="text" name="b2" class="textInput2" value ="<?php echo $row['b2']; ?>" readonly>
                                    </div>
                                </div>
                                <input type="hidden" name ="adm" value="<?php echo $adm ?>"/>
                                <div class="col-md-4 text-center">
                                    <div class="service-box">
                                        <h3 style="font-family: 'Comfortaa Regular'">
                                            <?php
                                            $d=strtotime("+2 Weeks ");
                                            $de = date("d-m-Y", $d);
                                            $today = date("d-m-Y");
                                            $now = time();
                                            $your_date = strtotime($row['fd2']);
                                            $datediff = $now - $your_date;
                                            $sum = floor($datediff/(60*60*24));
                                            if($sum<=0)
                                            {
                                                echo 'Return date</h3>
                                                  <br><input type="text" name="d2" class="textInput2" value ="'.$row['d2'].'" readonly>';
                                            }
                                            if($sum>0)
                                            {
                                                echo 'Fine amount</h3>';
                                                echo '<input type="text" class="textInput2" value="' . $sum . '" name="fine">';
                                                echo '<h3 style="font-family: \'Comfortaa Regular\';color: tomato;">';
                                                echo 'Return date expired on</h3>
                                                    <br><input type="text" name="d1" class="textInput2" value ="'.$row['d2'].'" readonly>';
                                            }
                                            ?>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="service-box">
                                        <?php
                                        if($row['d2']=="")
                                        {
                                            echo '<input type="submit" class="renewbutn" value="Return" id="hrenew" disabled
                                                    style="background-color: #929292">';
                                        }
                                        else
                                        {
                                            if ($sum <= 0) {
                                                echo '<input type="submit" class="renewbutn" value="Return" id="hrenew">';
                                            }
                                            ?>
                                            <?php
                                            if ($sum > 0) {
                                                echo '<input type="submit" class="renewbutn" value="Return with fine" id="hrenew"
                                                    style="background-color: #929292" >';
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </form>
                    <hr>
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