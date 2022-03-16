<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Car Accessories Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="image">

        <?php
        require 'header.php';
        ?>

        <br><br><br><br><br><br>

        <div class="container">
            <div class="row">

                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="wheel.php">
                            <img src="img/wheel.jpg" alt="wheel">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Wheel</p>
                            </div>
                        </center>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="brake.php">
                            <img src="img/brake.jpg" alt="brake">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Brake Kit</p>
                            </div>
                        </center>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="wheel.php">
                            <img src="img/headlights.jpg" alt="headlights">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Headlights</p>
                            </div>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br><br><br><br><br><br>
</body>

</html>