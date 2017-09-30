
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
    <meta charset="UTF-8">
    <title>Semester Enrollment</title>
    <meta charset="UTF-8">

</head>

<body class="w3-animate-opacity">

<?php require 'navbar.php' ?>

<?php

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);

?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%;background-color: rgba(0, 0, 0, 0.55)">
    <div id="print">
        <form action="reg-user.php" method="POST">
            <div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 0%; ">
                <section id="services">
                    <div class="container">
                        <div class="row">
                            <div class="text-center"><br>
                                <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                    <p>-------------------------------</p>
                                    ZENROLL
                                    <p>-------------------------------</p>
                                    <h5 class="text-muted">Online Semester Enrollment
                                    </h5>
                                </h1>
                                <input class="printbtn" type="button" onclick="printDiv('print')" value="print the form" />
                                <hr class="primary">
                            </div>
                        </div>
                    </div>

                <?php

                echo '<br><br><table class="tftable" border="1"><tr><th>Admission No</th><th>Name</th><th>Gender</th><th>Semester</th><th>Department</th>
                                  <th>Roll Number</th><th>University Register Number</th>
                                  <th>Phone</th><th>Email</th></tr>';
                while ($row = mysqli_fetch_array($result)) {
                    $bname=$row['adm'];
                    echo '<tr>
                        <td>'.$row['adm'].'</td>
                        <td style="width:25%">'.$row['fname']." ".$row['lname']. '</td>
                        <td>'.$row['gender'].'</td>
                        <td>'.$row['sem'].'</td>
                        <td>'.$row['dept'].'</td>
                        <td>'.$row['rno'].'</td>
                        <td>'.$row['uno'].'</td>
                        <td style="width:10%">'.$row['phone'].'</td>
                        <td style="width: 22%;">'.$row['email'].'</td></tr>';
                }
                echo '</table>';


                ?>

                    <script>
                        function myFunction() {
                            window.print();
                        }
                    </script>

