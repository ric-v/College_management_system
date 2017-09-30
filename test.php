
<?php

session_start();
require 'db.php';
$name = 'richie.euphoros36@gmail.com';
$sql = "SELECT * FROM student WHERE email ='".$name."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$fn = $row['d1'];
echo $fn;
//echo $row['email'];
?>


<?php



$now = time(); // or your date as well
$your_date = strtotime($fn);
$datediff = $now - $your_date;

echo floor($datediff / (60 * 60 * 24));
echo '<br>';
$sum = floor($datediff/(60*60*24));
echo $sum;

?>