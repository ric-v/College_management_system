<?php

require 'db.php';
$name = $_POST['semail'];
$prev = $_POST['sprev'];
echo $name;
echo $prev;
$intz=(int)$prev;
$sql="UPDATE staff ". "SET post =$intz ". "WHERE email ='$name'" ;
$result = mysqli_query($conn, $sql);
echo '<div class="container text-center"><p>Seccessfully changed the previlages of '.$name.'</p>
<a href="adminPrev.php">go back</a></div>';

?>
