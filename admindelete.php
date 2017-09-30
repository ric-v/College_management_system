<?php

require 'db.php';
$bid = $_POST['email'];
echo $bid;
$sql = "DELETE FROM staff WHERE email = '".$bid."'";
$result = mysqli_query($conn, $sql);

?>

