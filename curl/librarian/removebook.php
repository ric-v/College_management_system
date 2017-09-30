<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/navigation-bar.css">
<script src="../../assets/js/script.js"> </script>

<?php
require '../../db.php';
require 'navbar.php';
$bid = $_POST['bid'];
echo $bid;
$sql = "DELETE FROM Books WHERE bookid = '".$bid."'";
$result = mysqli_query($conn, $sql);
?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; min-height: 100%; background-color: rgba(0, 0, 0, 0.55)">


    <section id="services">
        <div class="container" style="min-height: 100%">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Curl / Delete Book
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1><br><br><hr><br>


                    <?php

                    $sql2 = "SELECT * FROM Books WHERE bookid ='" . $bid . "'";
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_array($result2);

                    if($row2['name']=="") {
                        echo '<h3 class="text-muted">Book removed successfully</h3><h2>';
                    }
                    else
                    {
                        echo 'Removal failed';
                    }
                    ?>
                    <h4 style="color: tomato">Redirecting...</h4>
                    or you can <a href="../search.php">click here</a> to return
                    <hr class="primary">
                </div><br><br><br><br>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("http://localhost/Project/Student's Card/index.php");
    }
    setTimeout("pageRedirect()", 5000);
</script>