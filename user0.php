<?php

require 'db.php';
$uname = $_SESSION['user'];
$sum = 0;
$sql = "SELECT * FROM student WHERE email = '".$uname."'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$adm = $row['adm'];
$bo1 = $row['b1'];
$bo2 = $row['b2'];

$sql1 = "SELECT * FROM dues WHERE adm = '$adm'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);
$dfine = $row1['dfine'];
$ofine = $row1['ofine'];
$lfine = $row1['lfine'];

$sql2 = "SELECT * FROM Books WHERE bookid = '$bo1'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);
$b1 = $row2['name'];

$sql3 = "SELECT * FROM Books WHERE bookid = '$bo2'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_array($result3);
$b2 = $row3['name'];

$sql4 = "SELECT * FROM dues WHERE adm = '$adm'";
$result4 = mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_array($result4);
$dfine = $row4['dfine'];
$ofine = $row4['ofine'];
$lfine = $row4['lfine'];

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
<script src="assets/js/script.js"> </script>
<script src="assets/js/jquery-3.1.1.min.js"> </script>


            <!-- User Info -->

<div class="container">
    <div class="row">
        <div class="text-center"><br>
            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                <p>-------------------------------</p>
                Quick Look
                <p>-------------------------------</p>
                <h5 class="text-muted">User profile quick view
                </h5>
            </h1>
            <hr class="primary">
        </div>
    </div>
</div>

<div class="col-md-2 text-left">
    <div class="service-box">
        <br>
    </div>
</div>
<div class="col-md-4 text-left">

    <div class="service-box">
        <h3 style="font-family: 'Comfortaa Regular'">
            <br><p class="text-muted">Name : </p>
        </h3>
    </div>
</div>
<div class="col-md-6 text-left">
    <div class="service-box">
        <h3 style="font-family: 'Comfortaa Regular'">
            <br><?php echo $row['fname']." ".$row['lname'] ?></h3>
    </div>
</div>

<div class="col-md-2 text-left">
    <div class="service-box">
        <br>
    </div>
</div>
<div class="col-md-4 text-left">

    <div class="service-box">
        <h3 style="font-family: 'Comfortaa Regular'">
            <p class="text-muted">Department : </p>
        </h3>
    </div>
</div>
<div class="col-md-6 text-left">
    <div class="service-box">
        <h3 style="font-family: 'Comfortaa Regular'">
            <?php echo "S".$row['sem']." ".$row['dept'] ?></h3>
    </div>
</div>

                    <div class="col-md-2 text-left">
                        <div class="service-box">

                        </div>
                    </div>
                    <div class="col-md-4 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo '<p class="text-muted">Book 1 : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">
                                <?php
                                if($row['fd1']<>"") {
                                    $d = strtotime("+2 Weeks ");
                                    $de = date("d-m-Y", $d);
                                    $today = date("d-m-Y");
                                    $now = time();
                                    $your_date = strtotime($row['fd1']);
                                    $datediff = $now - $your_date;
                                    $sum = floor($datediff / (60 * 60 * 24));

                                    if ($sum <= 0) {
                                        $sum = 0;
                                        echo $bo1 . " - " . $b1;
                                    }
                                    if ($sum > 0) {
                                        echo '<h3 style="font-family: \'Comfortaa Regular\';color: tomato;">';
                                        echo $bo1 . " | " . $b1 . ' | <span style = "color:white"> Fine - ₹ ' . $sum . '/- </span></h3>';
                                    }
                                }
                                else
                                {
                                    echo '<h3 style="color:lightgreen">free slot</h3>';
                                }
                                ?>
                            </h3>
                        </div>
                    </div>

                    <div class="col-md-2 text-left">
                        <div class="service-box">

                        </div>
                    </div>
                    <div class="col-md-4 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo '<p class="text-muted">Book 2 : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">
                                <?php
                                if($row['fd2']<>"") {
                                    $d = strtotime("+2 Weeks ");
                                    $de = date("d-m-Y", $d);
                                    $today = date("d-m-Y");
                                    $now = time();
                                    $your_date = strtotime($row['fd2']);
                                    $datediff = $now - $your_date;
                                    $sum = floor($datediff / (60 * 60 * 24));

                                    if ($sum <= 0) {
                                        $sum = 0;
                                        echo $bo2 . " - " . $b2;
                                    }
                                    if ($sum > 0) {
                                        echo '<h3 style="font-family: \'Comfortaa Regular\';color: tomato;">';
                                        echo $bo2 . " | " . $b2 . ' | <span style = "color:white"> Fine - ₹ ' . $sum . '/- </span></h3>';
                                    }
                                }
                                else{
                                    echo '<h3 style="color:lightgreen">free slot</h3>';
                                }
                                ?>
                            </h3>
                        </div>
                    </div>

<?php

if($dfine<>0)
{
    echo ' <div class="col-md-2 text-left">
                        <div class="service-box">
                            <br>
                        </div>
                    </div>
                    <div class="col-md-4 text-left">

                        <div class="service-box">
                            <h3 style="font-family: \'Comfortaa Regular\'">';
                                echo '<br><p class="text-muted">Department Due : </p>';
                                echo '</h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: \'Comfortaa Regular\'">';
                                echo '<br>₹ '.$dfine .'/-';
                            echo '</h3>
                        </div>
                    </div>';
}
else{

}

?>

<?php

if($ofine<>0)
{
echo ' <div class="col-md-2 text-left">
    <div class="service-box">

    </div>
</div>
<div class="col-md-4 text-left">

    <div class="service-box">
        <h3 style="font-family: \'Comfortaa Regular\'">';
            echo '<p class="text-muted">Office Due : </p>';
            echo '</h3>
    </div>
</div>
<div class="col-md-6 text-left">
    <div class="service-box">
        <h3 style="font-family: \'Comfortaa Regular\'">';
    echo '₹ '.$ofine .'/-';
            echo '</h3>
    </div>
</div>';
}
else{

}

?>

<?php

if($lfine<>0)
{
echo '<div class="col-md-2 text-left">
    <div class="service-box">

    </div>
</div>
<div class="col-md-4 text-left">

    <div class="service-box">
        <h3 style="font-family: \'Comfortaa Regular\'">';
            echo '<p class="text-muted">Lab Due : </p>';
            echo '</h3>
    </div>
</div>
<div class="col-md-6 text-left">
    <div class="service-box">
        <h3 style="font-family: \'Comfortaa Regular\'">';
            echo '₹ '.$lfine .'/-';
            echo '</h3>
    </div>
</div>';
}
else{

}

?>


                    <div class="col-md-2 text-left">
                        <div class="service-box">
<br>
                        </div>
                    </div>
                    <div class="col-md-4 text-left">

                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">

                                <?php
                                echo '<br><p class="text-muted">Total Due Amount : </p>';
                                ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="service-box">
                            <h3 style="font-family: 'Comfortaa Regular'">
                                <?php
                                $a = $row['fine'];
                                $fine = $a+$dfine+$ofine+$lfine+$sum;
                                echo '<br>₹ '.$fine .'/-';
                                ?>
                            </h3>
                        </div>
                    </div>

                <br><br><br>