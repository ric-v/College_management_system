
<?php
session_start();
require 'navbar.php';
require '../db.php';
$username = $_SESSION['user'];
$prev = $_SESSION['prev'];
if(!isset($_SESSION['user']))
{
    header("Location: http://localhost/Project/Student's Card/index.php");
}
if($prev==0)
{
    header("Location: http://localhost/Project/Student's Card/zenroll/notstaff.php");
}
$sql = "SELECT * FROM staff WHERE email = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
    <meta charset="UTF-8">
    <title>Semester Enrollment</title>
    <meta charset="UTF-8">

</head>

<body class="w3-animate-opacity">


<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 5% ">

    <form action="reg-staff.php" method="POST">
        <div class="w3-main w3-content w3-padding "
             style="max-width:100%;margin-top: 0%; background-color: rgba(0, 0, 0, 0.55)">
            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="text-center"><br>
                            <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                                <p>-------------------------------</p>
                                ZENROLL / Staff
                                <p>-------------------------------</p>
                                <h5 class="text-muted">Online Semester Enrollment
                                </h5>
                            </h1>

                        <hr class="primary">
                        </div>
                    </div>
                </div>
                <div class="container">


                    <br>
                    <input type="hidden" value="<?php echo $username ?>" name="email1" class="textInput2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                First Name:
                            </span>
                                <span class="col-md-6"><input type="text" name="fname" class="textInput2"
                                                              placeholder="Enter your first name" style="text-transform: capitalize"
                                                              value="<?php echo $row['fname'] ?>"></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                Last Name:
                            </span>
                                <span class="col-md-6"><input type="text" name="lname" class="textInput2"
                                                              placeholder="Enter your last name" style="text-transform: capitalize"
                                                              value="<?php echo $row['lname'] ?>"required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                DOB (DD/MM/YYYY):
                            </span>
                                <span class="col-md-6"><input type="date" name="dob" class="textInput2"
                                                              placeholder="Enter your DOB in (DD/MM/YYYY)"
                                                              value="<?php echo $row['dob'] ?>"required></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                Age:
                            </span>
                                <span class="col-md-6"><input type="text" name="age" class="textInput2"
                                                              placeholder="Enter your age"
                                                              value="<?php echo $row['age'] ?>"required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                Gender:
                            </span>
                                <span class="col-md-6">
                                                      <select  class="sem1" value="<?php echo $row['gender'] ?>" name="gender">
                                                        <option value="M">Male</option>
                                                        <option value="F">Female</option>
                                                        <option value="T">Trans</option>
                                                      </select>
                            </span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                            <span class="col-md-4 w3-left-align">
                                Staff ID:
                            </span>
                                <span class="col-md-6"><input type="text" name="adm" class="textInput2"
                                                              style="text-transform: uppercase" placeholder="Enter your admission no"
                                                              value="<?php echo $row['adm'] ?>" required></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                                <span class="col-md-4 w3-left-align">Department:</span>
                                <span class="col-md-6 sem">
                                                       <select  class="sem1" name="dept">
                                                         <option value="<?php $row['dept'] ?>"><?php echo $row['dept'] ?></option>
                                                         <option value="CE">Civil Engineering</option>
                                                         <option value="CSE">Computer Science Engineering</option>
                                                         <option value="ECE">Electronics and communication Engineering</option>
                                                         <option value="EI">Electronics and Instrumentation</option>
                                                         <option value="EEE">Electrical and Electronics Engineering</option>
                                                         <option value="IT">Information Technology</option>
                                                       </select>
                                     </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row w3-center">
                                         <span class="col-md-4 w3-left-align">
                                             Phone no:
                                         </span>
                                <span class="col-md-6"><input type="text" name="phone" class="textInput2"
                                                              placeholder="Enter your Phone no."  style="text-transform: capitalize"
                                                              value="<?php echo $row['phone'] ?>" required></span>
                            </div>
                        </div>
                    </div>
                  <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row w3-center">
                                         <span class="col-md-4 w3-left-align">
                                             Current address:
                                         </span>
                                <span class="col-md-6"><textarea name="caddr" class="textInput2" placeholder="Enter current address"
                                                                 style="text-transform: capitalize"
                                                                 required><?php echo $row['caddr'] ?></textarea></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row w3-center">
                                         <span class="col-md-4 w3-left-align">
                                             Permenant address:
                                         </span>
                                <span class="col-md-6"><textarea name="paddr" class="textInput2" placeholder="Enter permenant address"
                                                                 style="text-transform: capitalize" required><?php echo $row['paddr'] ?></textarea></span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="w3-center">
                        <?php
                        if(!empty($row)) {
                            echo '<input type="submit" style="background-color: #929292" value="Zenroll me!" class="subtn" disabled>';
                        }
                        else{
                            echo '<input type="submit" value="Zenroll me!" class="subtn">';
                        }
                        ?>
                    </div>
                    <br><br>

                </div>
            </section>
        </div>
    </form>

    <hr id="about">
    <hr>


    <footer class="my-footer">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12 text-center">
                    <br><br>
                    <h3><u style="color: rgba(229,212,67,0.84)">Get In Touch</u></h3>
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


</div>


</body>
</html>