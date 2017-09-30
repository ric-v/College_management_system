<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>

<?php
session_start();
require 'navbar.php';
require '../../db.php';
$bid = $_POST['b1'];
$date = $_POST['d1'];
$uname = $_POST['adm'];
//$fi = $fi*-1;

?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; min-height: 100%; background-color: rgba(0, 0, 0, 0.55)">

    <?php
    $sql = "SELECT * FROM student WHERE adm ='" . $uname . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $sql2 = "SELECT * FROM Books WHERE bookid ='" . $bid . "'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $bname = $row2['name'];
    ?>


    <section id="services">
        <div class="container" style="min-height: 100%">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Curl / Renew
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1><br><br><hr><br>

                    <?php
                        $d=strtotime("+2 Weeks ");
                        $date = date("d-m-Y", $d);
                        $sqlu1 = "UPDATE student " . " SET d1 = '$date' " . " WHERE adm ='$uname'";
                        $resultu1 = mysqli_query($conn, $sqlu1);
                        echo '<h3 style="font-family: \'Comfortaa Regular\'" class="text-muted">
                        Return date extended for <h3 style="font-family: \'Comfortaa Regular\'">'.$bname.'</h3>
                        <h3 style="font-family: \'Comfortaa Regular\'" class="text-muted"> to </h3> <h3 style="font-family: \'Comfortaa Regular\'">'.$date.'';
                    ?>

                    </h3><h4 style="color: tomato">Redirecting...</h4>
                        or you can <a href="../search.php">click here</a> to return
                        <hr class="primary"><br><br><br>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("http://localhost/Project/Student's Card/curl/dashboard.php");
    }
  setTimeout("pageRedirect()", 5000);
</script>