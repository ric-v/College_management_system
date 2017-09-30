
<?php

require 'db.php';
$name = $pass = $error_Email = "";

if (!empty($_POST) && isset($_POST))
{
    $name = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT email FROM user WHERE email ='" . $name . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if (!empty($row))
    {
        $em_check = $row['email'];
        if ($em_check == $name)
        {
            $error_Email = "This email-id is already registered!<br> Try <a href='index.php'>Forgot password</a>";
        }
    }

   else
    {
        $prev = 0;
        $sql = "INSERT INTO user (email,password,prev) VALUES ('" . $name . "','" . $pass . "','" . $prev . "')";
        $result = mysqli_query($conn, $sql);
        //echo "success";
       session_start();
       header("Location: http://localhost/Project/Student's Card/Sign-in.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en" xmlns="">

<head>

    <meta charset="UTF-8">
    <title>Student Card</title>
    <meta charset="UTF-8">

</head>

<body>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<script src="assets/js/script.js"> </script>

<div class="container-fluid">

    <div class="header w3-top" style="background-image: url(assets/img/ui.png");>
        <a href="index.php"><h1 class="web_header">Student card</h1></a>
    </div>
<form onsubmit="return passValidation()" action="Sign-up.php" method="POST">
    <div class="login_panel w3-animate-zoom">
        <br>
        <img src="assets/icons/man.svg" class="login_image">
        <p><h2 style="font-family: 'Comfortaa Regular' , cursive">Sign-up</h2>or <a href="Sign-in.php">Sign-in</a></p>
        <input id="email" onblur="formValidation()" name="email" class="textInput" placeholder="enter your email-id" type="email">
        <p id="head"><br></p>
        <input id="pass"  name="password" class="textInput" placeholder="enter your password" type="password">
        <p id="head2"><br></p>
        <input id="pass2" onfocus="formValidation()" name="cpassword" class="textInput" placeholder="confirm your password" type="password">
        <p id="head3"></p>
        <span id = "head"><?php echo $error_Email; ?></span>
        <br><br>
        <input type="submit" class="subtn" value="Sign-up">
        <br>
    </div>

</form>

</div>


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


</body>
</html>
}