<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>
<script src="../../assets/js/jquery-3.1.1.min.js"> </script>

<?php
session_start();
require 'navbar.php';
$username = $_SESSION['adm'];

?>
<body  id="top">

<?php

require '../../db.php';
$bi = $_POST['btn'];
if (!empty($_POST) && isset($_POST)) {
    $sql = "SELECT * FROM Books WHERE bookid ='$bi'";
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
                        Curl / Book Manager
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
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <form action="removebook.php" method="post">
                                <input type="hidden" value="<?php echo $bi ?>" name="bid">
                            <h2 style=" font-family:'Pacifico.ttf';"><u><input type="submit" style="background-color: transparent" class="subtn"
                                                value = "Remove Book"></a></u></h2>
                            <h5 class="w3-center text-muted"
                                style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Delete a book from the curl database. This will erase all details of the book</h5>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <h2 style=" font-family:'Pacifico.ttf';"><u><a href="editbookcore.php#issue" style="color: white;"
                                                                           id="sissue">Issue Book</a></u></h2>
                            <h5 class="w3-center text-muted"
                                style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Issue a book
                                to a user with his/her admission
                                number (only admin can confirm an issue operation)</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <h2 style="font-family:'Pacifico.ttf';"><u><a href="editbookcore.php#info" style="color: white;"
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
                        <form action="updatebook.php" method="post">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p>
                                Curl / Edit Book Info
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
                        <?php
                        $bid = $row['bookid'];?>
                        <input type="hidden" class="textInput4" name="bid"
                               value="<?php echo $bid ?>">
                        <div class="col-md-2 text-left">
                            <div class="service-box">

                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    echo '<p class="text-muted" style="margin-top: 5%">Book Name : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $bname = $row['name'];?>
                                    <input type="text" class="textInput4" name="bname"
                                            value="<?php echo $bname ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Author : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $bauth = $row['author'];?>
                                    <input type="text" class="textInput4" name = "bauth"
                                           value="<?php echo $bauth ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Publisher : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $bpub = $row['publisher'];?>
                                    <input type="text" class="textInput4" name="bpub"
                                           value="<?php echo $bpub ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Year of publication : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $byear = $row['year'];?>
                                    <input type="text" class="textInput4" name="byear"
                                           value="<?php echo $byear ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Edition : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $bedition = $row['edition'];?>
                                    <input type="text" class="textInput4" name="bedition"
                                           value="<?php echo $bedition ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Volume : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $bvolume = $row['volume'];?>
                                    <input type="text" class="textInput4" name="bvolume"
                                           value="<?php echo $bvolume ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">No. of Pages : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $bpages = $row['pages'];?>
                                    <input type="text" class="textInput4" name="bpages"
                                           value="<?php echo $bpages ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Location : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $blocation = $row['location'];?>
                                    <input type="text" class="textInput4" name="blocation"
                                           value="<?php echo $blocation ?>">
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
                                    echo '<p class="text-muted" style="margin-top: 5%">Quantity : </p>';
                                    ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="service-box">
                                <h3 style="font-family: 'Comfortaa Regular'">

                                    <?php
                                    $bstatus = $row['status'];?>
                                    <input type="text" class="textInput4" name="bstatus"
                                           value="<?php echo $bstatus ?>">
                                </h3>
                            </div>
                        </div>

                    <div class="container">
                        <div class="row">
                            <div class="text-center" style="margin-top: 5%"><br>
                                <div class="col-md-12">
                                    <input type="submit" class="subtn" value="Update info" id="hreturn">
                                </div><br
                            </div>
                        </div>
                    </div>
                    <br><br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="primary">

        <!-- ISSUE BOOKS -->

        <br> <br  id="issue"><br>
        <div id="bissue">
            <div class="container">
                <div class="row">
                    <div class="text-center"><br>
                        <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                            <p>-------------------------------</p><a href="editbookcore.php#top" id="closem"
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

                <form action="../actions/issuebu.php" method="post">

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