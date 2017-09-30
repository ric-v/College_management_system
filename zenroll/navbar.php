
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<script src="../assets/js/script.js"> </script>


<div id="main" >
    <div class="w3-top" style="margin-left: -15px;background-color: rgba(50,50,50,1);box-shadow: 5px 5px 15px 8px black">
        <div class="w3-xlarge w3-padding-small" style='max-width:100%;rgba(50,50,50,1);'>
        <span style="font-size:30px; cursor:pointer; text-align: left;" onclick="openNav()">&#9776;
            <a href="../index.php" style="text-decoration: none" class="hd web_header">
        </span>
            <span style="padding-left: 15px; text-align: center" class="w3-animate-opacity">Zenroll</span></a>
            <?php
            if(isset($_SESSION['user']))
                echo '<span id="test1" class="w3-text-black w3-hover-text-white w3-text-white w3-large" style="float: right;margin-top:10px;padding-right:40px"> <a href="../logout.php">logout </a></span>
                <span id="test" class="w3-text-white w3-hover-text-white w3-large" style="float: right; margin-top: 10px;padding-right: 20px; cursor:pointer;">'.$_SESSION['user'].' |</span>';?>
        </div>
    </div>

</div>

<div id="mySidenav" class="sidenav"  style="background-color: rgba(50,50,50,1)">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <img src="../assets/icons/man.svg" style="width: 80%;margin-top: 15%; margin-bottom: 25%;margin-left: 10%;">
    <a href="../index.php">Home</a>
    <a href="../curl/dashboard.php">Curl</a>
    <a href="dashboard.php">Zenroll</a>
    <a href="../logout.php">Signout</a>
</div>