<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_gen.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation-bar.css">
<script src="assets/js/script.js"> </script>
<script src="assets/js/jquery-3.1.1.min.js"> </script>


<?php

require 'navbar.php';

?>


<div class="w3-main w3-content w3-padding " style="min-width: 100%;margin-top: 2%; background-color: rgba(0, 0, 0, 0.55)">
    <section id="services">
        <div class="row">
            <div class="text-center"><br>
                <h1 class="section-heading" style="font-family: 'URW Gothic';color: rgba(81,191,152,0.89)">
                    <p>-------------------------------------</p>
                    Forgot password
                    <p>-------------------------------------</p>
                    <h5 class="text-muted">Student's Card
                    </h5>
                </h1>
                <hr class="primary">
            </div>
            <div class="container">
                <div class="row">
                    <div class="text-center"><br>
                        <form action="forgot.php" method="post">
                        <br><br><span class="col-sm-12"><input type="text" id="searchBook" class="textInput2" style="padding: 10px"
                                                       name="email" placeholder="Enter email-id" value=""><br></span>
                            <br><span><input type="submit" class="subtn" style="padding: 10px;width: 10%;" value="Recieve mail"></span><br><br>
                            <br><hr><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
    </section>
</div>

