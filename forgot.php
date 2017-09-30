<?php

session_start();
require 'db.php';
require 'navbar.php';

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
<script src="assets/js/script.js"> </script>

<?php
require 'PHPMailerAutoload.php';
$email = $_POST['email'];

$sql = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$pass = $row['password'];
if($email == "")
{
    header("Location: http://localhost/Project/Student's Card/forget.php");
}
if($row['email']==$email) {
    $mail = new PHPMailer;
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'richie.euphoros36';          // SMTP username
    $mail->Password = '1412ammuchechy36#'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to

    $mail->setFrom('info@studentscard.org', 'CEK - student card');
    $mail->addReplyTo('info@studentscard.org', 'CEK - student card');
    $mail->addAddress($email);   // Add a recipient
    $mail->addCC('info@studentscard.org');
    $mail->addBCC('info@studentscard.org');

    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = '<h1>Passsword recovery for Student\'s Card account from CEK</h1>';
    $bodyContent .= '<p>This mail was sent to you as you requested for your lost password for the lost account ' . $email . 'on
                 ' . date("d-m-Y") . '. Your previous password is provided below :</p><br>
                 <h2 style="font-family: \'Comfortaa Regular\';">Your password is ' . $pass . '</h2><br>
                 Call us on : +91 8281 7567 33';

    $mail->Subject = 'Password recovery for Student\' Card CEK';
    $mail->Body = $bodyContent;

    if (!$mail->send()) {

echo '<div class="w3-main w3-content w3-padding " style="max-width:100%;min-height: 100%; margin-top: 0%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br><br><br>
                    <h1 class="section-heading" style="font-family: \'URW Gothic\';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Password Recovery
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Student\'s Card
                        </h5>
                    </h1><br><br><hr><br>';
                    ?>
                    <?php

                         echo ' <div class="container">
                                <div class="row">
                                <div class="col-lg-12 text-center"><br>';
                         echo '<h3>Message could not be sent.</h3>';
                         echo 'Mailer Error: ' . $mail->ErrorInfo;
                            echo '</div></div></div>';
                        } else {
                                echo ' <div class="container">
                                <div class="row">
                                <div class="col-lg-12 text-center"><br>';

                            echo '<h2>Message has been sent</h2>';
                            echo '</div></div></div>';
                        }
                    }
                    else
                    {
                        echo ' <div class="container">
                                <div class="row">
                                <div class="col-lg-12 text-center"><br>';
                        echo 'Account not found';
                        echo '</div></div></div>';
                    }
                    ?>

                    <h3 style="color: tomato">Redirecting...</h3>
                    or you can <a href="index.php">click here</a> to return
                    <hr class="primary">
                    <br>
                </div><br><br><br><br>
            </div>
        </div>
    </section>
</div>

<script src="assets/js/jquery-3.1.1.min.js"> </script>
<script>
    $(document).ready(function () {
        alert("click 'OK' to continue");
    });
</script>

<script type="text/javascript">
    function pageRedirect() {
           window.location.replace("http://localhost/Project/Student's Card/index.php");
    }
    setTimeout("pageRedirect()", 5000);
</script>