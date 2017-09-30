

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">

<?php
require 'navbar.php';

?>

<?php

session_start();
$dept = $_SESSION['dept'];
require '../db.php';
$sem = $_POST['sem'];
$sql = "UPDATE student SET fine = '', ofine = '' WHERE dept = '$dept' AND sem = '$sem'";
$result = mysqli_query($conn, $sql);


?>
<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%; min-height: 100%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Zenroll /Clear dues
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Semester Enrollment System
                        </h5>
                    </h1><br><br><hr><br>
                    <h3>Dues cleared for all students of </h3><h2><?php echo $sem ?>th Semester</h2><h3>of</h3>
                    <h2><?php echo $dept ?></h2><h3> Department</h3>
                    <h4 style="color: tomato">Redirecting...</h4>
                    or you can <a href="index.php">click here</a> to return
                    <hr class="primary">
                </div><br><br>
            </div>
        </div>
    </section>
</div>

<script src="../assets/js/jquery-3.1.1.min.js"> </script>
<script>
    $(document).ready(function () {
        alert("click 'OK' to continue");
    });
</script>

<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("http://localhost/Project/Student's Card/zenroll/index.php");
    }
    setTimeout("pageRedirect()", 5000);
</script>
