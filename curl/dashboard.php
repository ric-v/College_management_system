<?php
session_start();
require 'navbar.php';
if(!isset($_SESSION['user']))
{
    header("Location: http://localhost/Project/Student's Card/index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
    <meta charset="UTF-8">
    <title>Curl - online library manager</title>
    <meta charset="UTF-8">

</head>


<body>




    <?php
    //require '../db.php';

    if ($_SESSION['prev']==0)
    {
        require 'user0.php';
    }
    else if($_SESSION['prev']==1)
    {
        if($_SESSION['tid']==3) {
            require 'user1.php';
        }
        elseif ($_SESSION['tid']==2)
        {
            header("Location: http://localhost/Project/Student's Card/index.php");
        }
        else{
            require 'userstaff.php';
        }
    }
    else if($_SESSION['prev']==2)
    {
        require 'user2.php';
    }
    else
    {
        header("Location: http://localhost/Project/Student's Card/index.php");
    }

    ?>



    <footer class="my-footer" id="footer1">
        <div class="container">
            <div class="row row-pb-md">
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
</html>