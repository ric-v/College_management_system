<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
<script src="../assets/js/script.js"> </script>

<?php
require '../db.php';
$uadm = $_POST['uadm'];
$ufname = $_POST['ufname'];
$ulname = $_POST['ulname'];
$udob = $_POST['udob'];
$uage = $_POST['uage'];
$ugender = $_POST['ugender'];
$usem = $_POST['usem'];
$udept = $_POST['udept'];
$urno = $_POST['urno'];
$uuno = $_POST['uuno'];
$ureligion = $_POST['ureligion'];
$ucaste = $_POST['ucaste'];
$uphone = $_POST['uphone'];
$uemail = $_POST['uemail'];
$ugname = $_POST['ugname'];
$ugphone = $_POST['ugphone'];
$fine = $_POST['fine'];
$sql="UPDATE student "." SET fname = '$ufname',lname = '$ulname',dob = '$udob',age = '$uage',
        gender = '$ugender',sem = '$usem',dept = '$udept',rno = '$urno',uno = '$uuno',religion = '$ureligion',
        caste = '$ucaste',phone = '$uphone',adm = '$uadm',gname = '$ugname',gphone = '$ugphone',fine = '$fine'
         "." WHERE email ='$uemail'" ;
$result = mysqli_query($conn, $sql);
?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;min-height: 100%; margin-top: 0%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br><br><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Curl / Updating database
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1><br><br><hr><br>
                    <?php

                    echo '<h3 class="text-muted">Updated User info for </h3><h2>';
                    echo $ufname." ".$ulname;

                    ?>
                    <h4 style="color: tomato">Redirecting...</h4>
                    or you can <a href="search.php">click here</a> to return
                    <hr class="primary">
                </div><br><br><br><br>
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