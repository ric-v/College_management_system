
<?php

$host='localhost:3306'; //$host='localhost'; $port='3306';
$username='root';
$password='';
$db='project';


$conn=mysqli_connect($host,$username,$password);
$dbcon = mysqli_select_db($conn,$db);



if ( !$conn ) {
    die("Connection failed : " . mysqli_error($conn));
}

if ( !$dbcon ) {
    die("Database Connection failed : " . mysqli_error($conn));
}

?>