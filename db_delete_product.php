<?php
session_start();
//include("auth_session.php");
$name = "Guest";
if (isset($_SESSION['username'])) {
    $name = trim(stripslashes($_SESSION['username']));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Porsche</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css" />
    <script src="js/script.js" defer></script>
</head>

<body>
    <!-- HEADER -->
    <div class="outer">
        <video autoplay muted loop id="bg-video">
            <source src="./video/bg-video.p4" type="video/mp4" />
            <!-- fix mp4 to the video tag upon-->
        </video>

        <div id="logo-bg"></div>
        <div id="business"></div>

        <div class="clear"></div>
        <div id="bg" class="top-bg">
            <div class="toplinks">
                <a class="ta active" data-tab-target="#content-home" href="index.php">Homepage</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-about" href="index.php">About us</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-product" href="index.php">Products</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-service" href="index.php">Services</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-contact" href="index.php">Contact us</a>
            </div>
            <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) { ?>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-contact" href="./admin.php">MANAGEMENT</a>
            </div>
            <?php } ?>

            <div class="member">
                <div class="toplinks">
                    <p style="padding: 0; margin: 0;"> Welcome <?php echo ("$name") ?> ! </p>
                </div>

                <?php if ($name !== "Guest") { ?>
                <!-- -->
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks hide">
                    <a class="ta" data-tab-target="#content-login" href="./login.php">Login</a>
                </div>
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks hide">
                    <a class="ta" data-tab-target="#content-register" href="./register.php">Register</a>
                </div>
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks">
                    <a class="ta" data-tab-target="#content-register" href="logout.php">Logout</a>
                </div>
                <!-- -->
                <?php  } else { ?>
                <!-- -->
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks">
                    <a class="ta" data-tab-target="#content-login" href="./login.php">Login</a>
                </div>
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks">
                    <a class="ta" data-tab-target="#content-register" href="./register.php">Register</a>
                </div>
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks hide">
                    <a class="ta" data-tab-target="#content-register" href="logout.php">Logout</a>
                </div>
                <!-- -->
                <?php } ?>


            </div>
        </div>
        <div class="clear"></div>
        <div id="outer2"></div>

        <div id="outer2" class="colu">
            <!-- THE RIGHT COLUMN-->

            <!-- HOME -->
            <div id="content-home" data-tab-content class="main-content active">
                <div id="main">

                    <div class="admin-toolbar-container">
                        <?php
                        require('db_conn.php');
                        if (isset($_GET['delete'])) {
                            $id = $_GET['delete'];
                            //echo $id;
                            $sql = "DELETE FROM productdb WHERE `productdb`.`productId`= ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute([$id]);
                            ?>

                        <div class="admin-toolbar-container">
                            <h2>DELETE PRODUCT SUCCESSFULLY!</h2>
                        </div>
                        <script>
                        setTimeout(function() {
                            window.location.href = "index.php";
                        }, 1000); // Delay in milliseconds
                        </script>

                        <?php } ?>


                    </div>

                </div>
            </div>


        </div>

        <div class="clear"></div>
        <div id="outer2"></div>

        <div class="footer-container bot-bg" id="">
            <div class="footer"><a href="#"> Homepage </a></div>
            <div class="footer"><a href="#"> About us </a></div>
            <div class="footer"><a href="#"> Products </a></div>
            <div class="footer"><a href="#"> Services </a></div>
            <div class="footer"><a href="#"> Contact us </a></div>
        </div>

        <div class="clear"></div>
        <div class="credit">
            &copy; 2014 Designed by Duong Thanh Phet
            <a href="http://www.thayphet.net/" target="_blank">
                Templates Perfect
            </a>
        </div>
        <div class="credit">&copy; 2023 Modified by Kha & Trong</div>
    </div>
</body>

</html>