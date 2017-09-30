
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="../assets/css/navigation-bar.css">

<?php
require 'navbar.php';
require '../db.php';
?>

<div class="w3-main w3-content w3-padding " style="max-width:100%;margin-top: 3%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="text-center"><br>
                    <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                        <p>-------------------------------</p>
                        New Semester
                        <p>-------------------------------</p>
                        <h5 class="text-muted">Online Semester Enrollment
                        </h5>
                    </h1>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="w3-main " style="max-width:100%;margin-top: 3%;">
            <div class="container">
                <div class="row" id="select">
                    <div class="col-lg-6 text-center">
                        <form action = "newsem.php" method="post">
                            <input type="hidden" value="<?php echo $_POST['sem'] ?>">
                            <input type="submit" style="background-color: transparent; width: 10%;height: 10%;background-color: rgba(59,201,89,0.8)" class="subtn"
                                   value="<?php echo 'Continue'?>">
                        </form>
                    </div>
                    <div class="col-lg-6 text-center">
                        <form action = "index.php">
                        <input type="submit" style="background-color: transparent; width: 10%;height: 10%;background-color:rgba(216,51,27,0.8)" class="subtn"
                               value="<?php echo 'Continue'?>">
                        </form>
                    </div>
                    <div class="col-lg-12 text-center">
                    <h2 style="font-family: 'Comfortaa Regular'"><hr><br>Are you sure to start a new Semester?</h2><br>
                    <h3 style="font-family: 'Comfortaa Regular'">This will reset all student profile</h3><br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>