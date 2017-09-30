
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">

<?php
require 'navbar.php';
require '../db.php';
?>

<?php

session_start();
$post = $_SESSION['tid'];
$uname = $_SESSION['user'];
$sql1 = "SELECT * FROM staff WHERE email = '$uname'";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result1);

if($post<>1)
{
    header("Location:http://localhost/Project/Student's Card/zenroll/index.php");
}
else
{
?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container" style="">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                         Zenroll / Students to clear dues
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1>
                    <hr class="primary">
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-12 col-md-6 text-center">
                <div class="service-box">
                    <input class="printbtn" type="button" onclick="printDiv('print')" value="print the list" />
                </div><br>
            </div>
<div id="print">
    <?php
        $dept = $row['dept'];
        $sql = "SELECT * FROM student WHERE dept = '$dept' AND NOT fine = 0";
        $result = mysqli_query($conn,$sql);
        echo '<table class="tftable" border="1"><tr><th>Name</th><th>Gender</th><th>Semester</th><th>Department</th>
                      <th>Roll Number</th><th>Phone</th><th>Email</th><th style="background-color: darkred">Fine amount</th><th>Admission No</th></tr>';
        while ($row = mysqli_fetch_array($result)) {
            $bname=$row['adm'];
            $fine=$row['fine'];
            echo '<tr>
                <td style="width:20%">'.$row['fname']." ".$row['lname'].'</td>
                <td>'.$row['gender'].'</td>
                <td>'.$row['sem'].'</td>
                <td>'.$row['dept'].'</td>
                <td>'.$row['rno'].'</td>
                <td style="width:10%">'.$row['phone'].'</td>
                <td style="width: 22%;">'.$row['email'].'</td>
                <td style="color:black;background-color:tomato;font-size: x-large;font-family: "Arial Black", arial-black">
                ₹ '.$fine.'</td>
                <td ><input type="submit" name="btn" class="butt" value="'.$bname.'"></td></tr>';
        }
        echo '</table>';
        }
        ?>
</div>

        <br><br><br>
    </section>
</div>
        <footer class="my-footer" id="footer1">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-12 text-center">
                        <br><br>
                        <h3><u style="color: rgba(229,212,67,0.84);">Get In Touch</u></h3>
                        <div class="contact">
                            <br>
                            <span style="color: rgba(214,210,209,0.80)">Call us on :<b style="color: white;margin-right: 20px"> +91 8281 7567 33</b></span>
                            <span style="margin-right:10px;"> | </span>
                            <span style="color: rgba(214,210,209,0.80)">Mail us at :<b style="color: white"> info@studentscard.org</b></span><br><br><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center copyright">
                    <p><small class="block">&copy; 2017. All Rights Reserved.</small>
                        <small class="block">College of Engineering, Kidangoor</small></p>
                </div>

            </div>
        </footer>

<script>
    function myFunction() {
        window.print();
    }
</script>

<script>
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;
}
</script>