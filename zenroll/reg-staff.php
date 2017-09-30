<?php

require '../db.php';
if (!empty($_POST) && isset($_POST)) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $adm = $_POST['adm'];
    $dept = $_POST['dept'];
    $phone = $_POST['phone'];
    $email = $_POST['email1'];
    $caddr = $_POST['caddr'];
    $paddr = $_POST['paddr'];
    echo $email;


//  echo $sem;

    $sql = "INSERT INTO staff (fname,lname,dob,age,gender,adm,dept,phone,email,caddr,paddr)
        VALUES ('" . $fname . "','" . $lname . "','" . $dob . "','" . $age . "','" . $gender . "','" . $adm . "','" . $dept . "',
        '" . $phone . "','" . $email . "','" . $caddr . "','" . $paddr . "')";

    $result = mysqli_query($conn, $sql);
    // echo $_SESSION['adm'];

}
//session_start();
header("Location: http://localhost/Project/Student's Card/index.php");

?>