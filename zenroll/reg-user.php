<?php

require '../db.php';
if (!empty($_POST) && isset($_POST)) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $adm = $_POST['adm'];
    $sem = $_POST['sem'];
    $dept = $_POST['dept'];
    $rno = $_POST['rno'];
    $uno = $_POST['uno'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $phone = $_POST['phone'];
    $email = $_POST['email1'];
    $caddr = $_POST['caddr'];
    $paddr = $_POST['paddr'];
    $gname = $_POST['gname'];
    $gphone = $_POST['gphone'];


  echo $sem;
echo $dept;/*
    $sql="UPDATE student SET fname = '$fname',lname = '$lname',dob = '$dob',age = '$age',
        gender = '$gender',sem = '$sem',dept = '$dept',rno = '$rno',uno = '$uno',religion = '$religion',
        caste = '$caste',phone = '$phone',adm = '$adm',gname = '$gname',gphone = '$gphone',caddr = $caddr,paddr = $paddr
        WHERE email ='$email'" ;

    $result = mysqli_query($conn,$sql);
    */
    $sql1 = "INSERT INTO student (fname,lname,dob,age,gender,adm,sem,dept,rno,uno,religion,caste,phone,email,caddr,paddr,gname,gphone)
        VALUES ('" . $fname . "','" . $lname . "','" . $dob . "','" . $age . "','" . $gender . "','" . $adm . "','" . $sem . "','" . $dept . "','" . $rno . "',
        '" . $uno . "','" . $religion . "','" . $caste . "','" . $phone . "','" . $email . "','" . $caddr . "','" . $paddr . "',
        '" . $gname . "','" . $gphone . "')";

    $result1 = mysqli_query($conn, $sql1);
   // echo $_SESSION['adm'];

}
//session_start();
//header("Location: http://localhost/Project/Student's Card/index.php");

?>