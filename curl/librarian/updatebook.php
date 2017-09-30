<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>

<?php
require '../../db.php';
$bid = $_POST['bid'];
$bname = $_POST['bname'];
$bauth = $_POST['bauth'];
$bpub = $_POST['bpub'];
$byear = $_POST['byear'];
$bedition = $_POST['bedition'];
$bvolume = $_POST['bvolume'];
$bpages = $_POST['bpages'];
$blocation = $_POST['blocation'];
$bstatus = $_POST['bstatus'];
$sql="UPDATE Books "." SET name = '$bname',author = '$bauth',publisher = '$bpub',year = '$byear',
        edition = '$bedition',volume = '$bvolume',pages = '$bpages',location = '$blocation',status = '$bstatus'
         "." WHERE bookid ='$bid'" ;
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

                    echo '<h3 class="text-muted">Updated book info for </h3><h2>';
                    echo $bid;

                ?>
                <h4 style="color: tomato">Redirecting...</h4>
                or you can <a href="../search.php">click here</a> to return
                <hr class="primary">
            </div><br><br><br><br>
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

