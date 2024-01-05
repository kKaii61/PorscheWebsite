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
                        <?php
                        require('db_conn.php');
                        try {
                            $sql = 'SELECT userId, username, email, is_admin FROM userdb';
                            $stmt = $conn->query($sql);
                        } catch (Exception $e) {
                            die('SQL Error:' . $e->getMessage());
                        } ?>
                        <div>
                            <table style="width:100%">
                                <tr>
                                    <th>User ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Update</th>
                                </tr>

                                <?php foreach ($stmt as $user) { ?>
                                    <!-- -->

                                    <tr>
                                        <td>
                                            <p class="user-id"><?= $user['userId'] ?></p>
                                        </td>
                                        <td>
                                            <p class="user-name"><?= $user['username'] ?></p>
                                        </td>
                                        <td>
                                            <p class="user-email"><?= $user['email'] ?></p>
                                        </td>
                                        <td>

                                            <form action="db_user_update.php" medthod="get">
                                                <button type="submit" value="<?= $user['userId'] ?>" name="update_user">Update</button>
                                            </form>
                                            <form action="db_user_delete.php" medthod="get">
                                                <button type="submit" value="<?= $user['userId'] ?>" name="delete_user">Delete</button>
                                            </form>

                                        </td>
                                    </tr>

                                <?php  } ?>
                            </table>
                        </div>
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