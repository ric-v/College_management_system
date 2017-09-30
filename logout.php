<?php
session_start();
#session_reset();
$_SESSION = [];
session_destroy();
header("Location:http://localhost/Project/Student's Card/index.php");
?>

successfully logged-out <a href="index.php">go back to home page</a>
