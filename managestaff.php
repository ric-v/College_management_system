
<?php
require 'navbar.php';
?>

<body id="top">

<div class="w3-main w3-content w3-padding " style="min-width: 100%;margin-top: 2%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">

<div class="row" id="bissue">
    <div class="text-center"><br>
        <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89);margin-top: 5%">
            <p>-------------------------------</p>
            MANAGE ACCOUNTS
            <p>-------------------------------</p>
            <h5 class="text-muted">Set User Previlages
            </h5>
        </h1>
        <hr class="primary">
    </div>

    <?php

    require 'db.php';
    $sql = "SELECT * FROM staff";
    $result = mysqli_query($conn, $sql);

    ?>
    <div class="row" style="margin-top: 0%">
        <div class="col-lg-12 text-center">
            <div class="service-box">
                <form action='admindelete.php' method='post'>
                    <h2 style="font-family: 'Comfortaa Regular'">Staff</h2>
                    <select class="sem2" name="email">
                <?php
                while($row=mysqli_fetch_array($result))
                {
                    echo '<option value="'.$row['email'].'" style="padding :0%">'.$row['email'].'></option>';
                }
                ?>
                    </select><br>
                    <input type="submit" style="border-radius: 0px;padding: 2%" value="delete" class="subtn">
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">

            </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">

            </div>
        </div>
    </div>
</div>

