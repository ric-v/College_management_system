
<?php

require 'navbar.php';
require '../db.php';
if (!empty($_POST) && isset($_POST)) {
    $bname = $_POST['search'];
    $sql = "SELECT * FROM Books WHERE name LIKE '%$bname%' OR author LIKE '%$bname%' OR publisher LIKE '%$bname%'
            OR year LIKE '%$bname%' OR `book id` LIKE '%$bname%'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $name = $row['name'];
    $output = '<div>'.$name.'</div>';
}
echo $output;

?>