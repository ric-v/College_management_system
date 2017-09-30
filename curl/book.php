<?php
session_start();
$post = $_SESSION['tid'];
require 'navbar.php';
require '../db.php';
if (!empty($_POST) && isset($_POST)) {
$bname = $_POST['search'];
$sql = "SELECT * FROM Books WHERE name LIKE '%$bname%' OR author LIKE '%$bname%' OR publisher LIKE '%$bname%'
            OR year LIKE '%$bname%' OR bookid LIKE '%$bname%'";
$result = mysqli_query($conn, $sql);

?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">
<script src="../assets/js/script.js"></script>
<script src="../assets/js/jquery-3.1.1.min.js"></script>

<body>


<div class="w3-main w3-content w3-padding "
     style="max-width:100%;margin-top: 3%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <!-- <div class="container">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        Books
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Library Management System
                        </h5>
                    </h1>
                    <hr class="primary">
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="row">
                <div class="text-center"><br>
                    <form onsubmit="return search()" action="book.php" method="post">
                        <span class="col-sm-12"><input type="text" id="searchBook" class="textInput2"
                                                       style="padding: 10px"
                                                       name="search" placeholder="Enter the book name"
                                                       onkeydown="sea();"><br></span>
                        <span><input type="submit" class="subtn" style="padding: 10px;width: 10%;"
                                     value="Search"></span><br><br>
                        <hr>
                        <br>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h4 style="color: tomato;font-family: 'Comfortaa Regular'"> Note : Click on the book ID to
                        proceed </h4><br><br>
                </div>
            </div>
        </div>

        <?php
        $prev = $_SESSION['prev'];
        if ($prev == 0) {
            echo '<form action="bookmenuuser.php" method="post"><table class="tftable" border="1">';
        }
        if($post == 3) {
            echo '<form action="bookmenu.php" method="post"><table class="tftable" border="1">';
        }
        else{
            echo '<form action="bookmenuuser.php" method="post"><table class="tftable" border="1">';
        }

       /*
        echo '<tr><th>Book name</th><th>Book ID</th><th>Author</th><th>Publisher</th>
                  <th>Status</th><th>Edition</th><th>Location</th><th>Published On</th><th>Options</th></tr>';
        while ($row = mysqli_fetch_array($result)) {
            $bn=$row['bookid'];
            echo '<tr><td style="width: 25%;"><input name="bname" type="text"class="textInput3" value="' .$row['name']. '"></td>
            <td style="width: 6%"><input type="text" name="bookid" class="textInput3" value="' .$bn. '"></td>
            <td style="width: 20%"><input type="text" name="author" class="textInput3" value="'.$row['author'].'"></td>
            <td style="width: 15%"><input type="text" name="pubisher" class="textInput3" value="'.$row['publisher'].'"></td>
            <td><input type="text" class="textInput3" name="status" value="'.$row['status'].'"></td>
            <td><input type="text" class="textInput3" name="edition" value="'.$row['edition'].'"></td>
            <td><input type="text" class="textInput3" name="location" value="'.$row['location'].'"></td>
            <td><input type="text" class="textInput3" name="year" value="'.$row['year'].'"></td>';
//            <td ><input type="submit" class="butt" value="Menu"></td></tr>';
            echo '<td ><button type="submit" name="btn" value="'.$bn.'">
            </td></tr>';*/


            echo '<tr><th>Book name</th><th>Author</th><th>Publisher</th>
                  <th>Status</th><th>Edition</th><th>Location</th><th>Published On</th><th>Book ID</th></tr>';
            while ($row = mysqli_fetch_array($result)) {
                $bn=$row['bookid'];
                echo '<tr><td style="width: 25%;">' .$row['name']. '</td>
            <td style="width: 20%">'.$row['author'].'</td>
            <td style="width: 15%">'.$row['publisher'].'</td>
            <td>'.$row['status'].'</td>
            <td>'.$row['edition'].'</td>
            <td>'.$row['location'].'</td>
            <td>'.$row['year'].'</td>
            <td ><input type="submit" name="btn" class="butt" value="'.$bn.'">
            </td></tr></td></tr>';

        }
        echo '</table></form>';

        }
        ?>


        <br><br><br><br>
    </section>
</div>

<footer class="my-footer" id="footer1">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-12 text-center">
                <br><br>
                <h3><u style="color: rgba(229,212,67,0.84);">Get In Touch</u></h3>
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

</body>

