<?php

require '../../db.php';
$bname = $_POST['bname'];
$bauth = $_POST['bauth'];
$bpub = $_POST['bpub'];
$bedition = $_POST['bedition'];
$bvolume = $_POST['bvolume'];
$blocation = $_POST['blocation'];
$bpages = $_POST['bpages'];
$byear = $_POST['byear'];
$bid = $_POST['bid'];
$bquantity = $_POST['bquantity'];
$sql = "INSERT INTO Books (bookid,`name`,author,publisher,edition,status,volume,location,pages,`year`)
        VALUES ('" . $bid . "','" . $bname . "','" . $bauth . "','" . $bpub . "','" . $bedition . "','" . $bquantity . "'
        ,'" . $bvolume . "','" . $blocation . "','" . $bpages . "','" . $byear . "')";
$result = mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($result);
//header("Location: http://localhost/Project/Student's Card/curl/dashboard.php");

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%; min-height: 100%; background-color: rgba(0, 0, 0, 0.55)">
<br><br><br>
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
                    </h1><br><br><hr><br><br><br>
<h4 style="color: tomato">Redirecting...</h4>
or you can <a href="../search.php">click here</a> to return
<hr class="primary">

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