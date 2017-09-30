<?php

require 'db.php';
$name = $_POST['email'];
$prev = $_POST['prev'];
$intz=(int)$prev;
$sql="UPDATE user ". "SET prev =$intz ". "WHERE email ='$name'" ;
$result = mysqli_query($conn, $sql);
echo '<div class="container text-center"><p>Seccessfully changed the previlages of '.$name.'</p>
<a href="adminPrev.php">go back</a></div>';

?>
