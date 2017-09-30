<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%; min-height: 100%; background-color: rgba(0, 0, 0, 0.55)">

<?php
require '../../db.php';
$bid = $_POST['bid'];
$uname = $_POST['uname'];
$date = $_POST['date1'];
$date2 = $_POST['date2'];
$sql = "SELECT * FROM student WHERE adm ='" . $uname . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$un = $row['fname'];
$un2 = $row['lname'];
$b1 = $row['b1'];
$b2 = $row['b2'];
$sqls = "SELECT * FROM staff WHERE adm ='" . $uname . "'";
$results = mysqli_query($conn, $sqls);
$rows = mysqli_fetch_array($results);
$t1 = $rows['fname'];
$t2 = $rows['lname'];
$c1 = $rows['b1'];
$c2 = $rows['b2'];
$c3 = $rows['b3'];
$c4 = $rows['b4'];
$sql1 = "SELECT * FROM Books WHERE bookid ='" . $bid . "'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);
//echo $date;
//echo $row['email'];

if($b1=="")
{
    $quantity = $row1['status'];
    $q = $quantity - 1;
    $sql = "UPDATE student SET b1 = ('" . $bid . "'),d1 = ('" . $date . "'),fd1 = ('" . $date2 . "') WHERE adm = ('".$uname."')";
    $result = mysqli_query($conn, $sql);
    $sql2 = "UPDATE Books SET status = ('" . $q . "') WHERE bookid = ('".$bid."')";
    $result2 = mysqli_query($conn, $sql2);
    echo 'success';
}
else if($b2=="")
{
    $quantity = $row1['status'];
    $q = $quantity - 1;
    $sql = "UPDATE student SET b2 = ('" . $bid . "'),d2 = ('" . $date . "'),fd2 = ('" . $date2 . "')  WHERE adm = ('".$uname."')";
    $result = mysqli_query($conn, $sql);
    $sql2 = "UPDATE Books SET status = ('" . $q . "') WHERE bookid = ('".$bid."')";
    $result2 = mysqli_query($conn, $sql2);
    echo 'success';
}

if($c1=="")
{
    $quantity = $row1['status'];
    $q = $quantity - 1;
    $sql1 = "UPDATE staff SET b1 = ('" . $bid . "') WHERE adm = ('".$uname."')";
    $result1 = mysqli_query($conn, $sql1);
    $sql2 = "UPDATE Books SET status = ('" . $q . "') WHERE bookid = ('".$bid."')";
    $result2 = mysqli_query($conn, $sql2);
    echo 'success';
}
elseif($c2=="")
{
    $quantity = $row1['status'];
    $q = $quantity - 1;
    $sql1 = "UPDATE staff SET b2 = ('" . $bid . "') WHERE adm = ('".$uname."')";
    $result1 = mysqli_query($conn, $sql1);
    $sql2 = "UPDATE Books SET status = ('" . $q . "') WHERE bookid = ('".$bid."')";
    $result2 = mysqli_query($conn, $sql2);
    echo 'success';
}
elseif ($c3=="")
{
    $quantity = $row1['status'];
    $q = $quantity - 1;
    $sql1 = "UPDATE staff SET b3 = ('" . $bid . "') WHERE adm = ('".$uname."')";
    $result1 = mysqli_query($conn, $sql1);
    $sql2 = "UPDATE Books SET status = ('" . $q . "') WHERE bookid = ('".$bid."')";
    $result2 = mysqli_query($conn, $sql2);
    echo 'success';
}
elseif($c4=="")
{
    $quantity = $row1['status'];
    $q = $quantity - 1;
    $sql1 = "UPDATE staff SET b4 = ('" . $bid . "') WHERE adm = ('".$uname."')";
    $result1 = mysqli_query($conn, $sql1);
    $sql2 = "UPDATE Books SET status = ('" . $q . "') WHERE bookid = ('".$bid."')";
    $result2 = mysqli_query($conn, $sql2);
    echo 'success';
}
else
{
    echo 'No cards are available';
}

?>


    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Curl
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1><br><br><hr><br>
                    <?php

                    if($b1=="" or $b2=="") {
                        echo '<h3 class="text-muted">issued book </h3><h2>';
                        echo $row1['name'];
                        echo '</h2><h3 class="text-muted"> to </h3> <h2>';
                        echo $un." ".$un2 . " ".$t1." ".$t2." ".'</h2><br><br>';
                    }
                    else
                    {
                        echo 'Transaction failed as no card slots are free';
                    }
                    ?>
                    <h4 style="color: tomato">Redirecting...</h4>
                    or you can <a href="../search.php">click here</a> to return
                    <hr class="primary">
                </div><br><br>
            </div>
        </div>
    </section>
</div>


<script src="../../assets/js/jquery-3.1.1.min.js"> </script>
<script>
    $(document).ready(function () {
        alert("click 'OK' to continue");
    });
</script>

<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("http://localhost/Project/Student's Card/curl/dashboard.php");
    }
    setTimeout("pageRedirect()", 5000);
</script>