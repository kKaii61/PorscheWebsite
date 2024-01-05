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
    <title>21H1120041</title>
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
                        <button class="admin-btn"><a href="db_insert.php">Insert Products</a></button>
                    </div>
                    <div class="admin-toolbar-container">
                        <button class="admin-btn"><a href="db_delete_all_product.php">Delete All Product</a></button>
                    </div>
                    <div class="admin-toolbar-container">
                        <button class="admin-btn"><a href="db_delete_all_user.php">Delete All User</a></button>
                    </div>
                    <!-- <div class="admin-toolbar-container">
                        <button class="admin-btn"><a href="db_insert.php">Update</a></button>
                    </div> -->

                    
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