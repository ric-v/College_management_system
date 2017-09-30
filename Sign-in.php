<?php

require 'db.php';
$name = $pass = $error_Email = "";

if (!empty($_POST) && isset($_POST))
{
    $name = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT email,prev FROM user WHERE email ='" . $name . "' AND password ='".$pass."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $prev = $row['prev'];
    if (!empty($row))
    {
        session_start();
        $_SESSION['user'] = $name;
        $_SESSION['prev'] = $prev;
        $sql = "SELECT * FROM student WHERE email = '".$_SESSION['user']."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $sql2 = "SELECT * FROM staff WHERE email = '".$_SESSION['user']."'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $_SESSION['tid'] = $row2['post'];
        $_SESSION['dept'] = $row2['dept'];
        if(!empty($row))
        {
            header("Location: http://localhost/Project/Student's Card/index.php");
        }
        elseif (!empty($row2))
        {
            header("Location: http://localhost/Project/Student's Card/index.php");
        }
        else
        {
            //echo $row['adm'];
            header("Location: http://localhost/Project/Student's Card/zenroll/dashboard.php");
        }
    }
    else
    {
        $error_Email = "check your Email-id or Password! <br> Try";
    }
}
else
{

}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Sign-in</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
    <script src="assets/js/script.js"> </script>

</head>

<body>

<div id="container">

    <div class="header w3-top" style="background-image: url(assets/img/ui.png");>
        <a href="index.php"><h1 class="web_header">Student card</h1></a>
    </div>

    <form onsubmit="return passValidation()" action="Sign-in.php" method="POST">
        <div class="login_panel w3-animate-zoom" style="margin-top:12%;">
            <br>
            <img src="assets/icons/man.svg" class="login_image">
            <p><h2 style="font-family: 'Comfortaa Regular' , cursive">Sign-in</h2>or <a href="Sign-up.php">Sign-up</a></p>
            <input id="email" onblur="formValidation()" class="textInput" placeholder="enter your email-id" type="email" name="email">
            <p id="head"><br></p>
            <input id="pass" onblur="formValidation()" class="textInput" placeholder="enter your password" type="password" name="password">
            <p id="head2"></p>
            <span id = "head"><?php echo $error_Email; ?></span>
            <br><a href='forget.php'>Forgot Password?</a><br><br>
            <input type="submit" class="subtn" value="Sign-in">
            <br><br>
        </div>
    </form>

    <footer class="my-footer" style="margin-top:10%;">
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