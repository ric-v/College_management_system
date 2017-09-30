<?php
require 'navbar.php';
?>

<body id="top">



<div class="w3-main w3-content w3-padding " style="min-width: 100%;margin-top: 2%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="row">
        <div class="text-center"><br>
            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                <p>-------------------------------------</p>
                ADMIN CONTROL CENTER
                <p>-------------------------------------</p>
                <h5 class="text-muted">Student's Card admin page
                </h5>
            </h1>
            <hr class="primary">
        </div>
        <div class="row" style="margin-top: 10%">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <h2 style=" font-family:'Pacifico.ttf';"><u><a href="adminPrev.php#bissue" style="color: white;"
                                                                   id="sissue">User Previlages</a></u></h2>
                    <h5 class="w3-center text-muted"
                        style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Issue a book
                        to a user with his/her adminsssion
                        number (only admin can confirm an issue operation)</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <h2 style="font-family:'Pacifico.ttf';"><u><a href="adminPrev.php#breturn" style="color: white;"
                                                                  id="sreturn">Staff previlages</a></u></h2>
                    <h5 class="w3-center text-muted"
                        style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Get more
                        details about the selected book
                        from the curl database</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <h2 style=" font-family:'Pacifico.ttf';"><u><a href="managestaff.php" style="color: white;"
                                                                   id="sissue">Delete Users</a></u></h2>
                    <h5 class="w3-center text-muted"
                        style="font-family: arial, helvetica, sans-serif;color: rgba(184,181,178,0.68)">Remove a user profile from zenroll database.
                    It can either be a staff account or a user account</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="text-center"><br>

                    <div class="row" id="bissue">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89);margin-top: 5%">
                                <p>-------------------------------</p><a href="adminPrev.php#top" id="closen" onclick="closen()"
                                style="float: right;color: teal">X</a>
                                USER PREVILAGES
                                <p>-------------------------------</p>
                                <h5 class="text-muted">Set User Previlages
                                </h5>
                            </h1>
                            <hr class="primary">
                        </div>

        <?php

        require 'db.php';
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        echo "<form action='adminUpdate.php' method='post'>" ;
          echo      "<table class='w3-center ttable' style='margin-top: 5%'>";
        echo "<tr> <th style='background-color: transparent'><h2 class='w3-center'>Email</h2><br></th>
            <th style='background-color: transparent'><h2 class='w3-center'>Previlage</h2><br></th></tr>";

        echo '<td><select class="sem2" name="email">';
        while($row = mysqli_fetch_array($result))
        {
            
			echo '<option value="'.$row['email'].'" style="padding :2%">'.$row['email'].'</option>';
			
			//echo '<option value="'. $row['email'] .'" style="color:black">'.$row['email'].'</option></select></td>';
            //echo '<option value="'. $row['email'] .'" style="color:black">woief</option></select></td>';
        }

    //echo '<td><input type="text" value="' . $row['email'] . '" class="textInput2" name="email1"></td>';
        echo '<td><select class="sem2" name="prev">
                <option value=0 style="padding :2%">User</option>
                <option value=1 style="padding :2%">SuperUser</option>
                <option value=2 style="padding :2%">Admin</option></select></td>';
        echo "</tr>";

            echo "</table>";
            echo '<br>';
            echo '<input type="submit" value="Update" class="subtn">';

            echo '</form><br><br><hr>';

        ?>   </div>


                    <div class="row" id="breturn">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89);margin-top: 5%">
                                <p>-------------------------------</p><a href="adminPrev.php#top" id="closem" onclick="closem()"
                                                                         style="float: right;color: teal">X</a>
                                STAFF PREVILAGES
                                <p>-------------------------------</p>
                                <h5 class="text-muted">Set Staff Previlages
                                </h5>
                            </h1>
                            <hr class="primary">
                        </div>

                    <?php
                    $sql = "SELECT * FROM staff";
                    $result = mysqli_query($conn, $sql);
                    echo "<form action='SadminUpdate.php' method='post'>" ;
                        echo      "<table class='w3-center ttable' style='margin-top: 5%'>";
                            echo "<tr> <th style='background-color: transparent'><h2 class='w3-center'>Email</h2><br></th>
                                <th style='background-color: transparent'><h2 class='w3-center'>Post</h2><br></th></tr>";

                            echo '<td><select class="sem2" name="semail">';
                                    while($row = mysqli_fetch_array($result))
                                    {

                                    echo '<option value="'.$row['email'].'" style="padding :2%">'.$row['email'].'</option>';

                                    //echo '<option value="'. $row['email'] .'" style="color:black">'.$row['email'].'</option></select></td>';
                            //echo '<option value="'. $row['email'] .'" style="color:black">woief</option></select></td>';
                            }

                            //echo '<td><input type="text" value="' . $row['email'] . '" class="textInput2" name="email1"></td>';
                            echo '<td><select class="sem2" name="sprev">
                                    <option value=0 style="padding :2%">Assistant Proffessor</option>
                                    <option value=1 style="padding :2%">HOD</option>
                                    <option value=2 style="padding :2%">Office Staff</option>
                                    <option value=3 style="padding :2%">Librarian</option></select></td>';
                            echo "</tr>";

                            echo "</table>";
                        echo '<br>';
                        echo '<input type="submit" value="Update" class="subtn">';

                        echo '</form>';

                    ?>
<br><br>
                    <hr class="primary">
                </div>
                </div>
            </div>
        </div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
<script src="assets/js/script.js"> </script>
<script src="assets/js/jquery-3.1.1.min.js"> </script>
            <br><br><br>
<hr>
    </section>
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

        <div class="col-md-12 text-center copyright">
            <p><small class="block">&copy; 2017. All Rights Reserved.</small>
                <small class="block">College of Engineering, Kidangoor</small></p>
        </div>

</body>


<script>
    $(document).ready(function(){
        $("#bissue, #brenew, #breturn").hide();
        $("#top").animate({scrollTop:0}, 500);
        $("#sissue").click(function(){
            $("#bissue").fadeIn(1000);
        });
        $("#srenew").click(function(){
            $("#brenew").fadeIn(1000);
        });
        $("#sreturn").click(function(){
            $("#breturn").fadeIn(1000);
        });
        $("#hinfo").click(function(){
            $("#top").animate({scrollTop:0}, 1000);
            return false;
        });
        $("#closen").click(function(){
            $("#bissue").fadeOut(1000);
            $("#top").animate({scrollTop:0}, 1000);
            return false;
        });
        $("#closem").click(function(){
            $("#breturn").fadeOut(1000);
            $("#top").animate({scrollTop:0}, 1000);
            return false;
        });
    });
</script>