<?php

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
    <link rel="stylesheet" type="text/css" href="./CSS/styles.css" />
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
                <a class="ta active" data-tab-target="#content-home" href="./index.php">Homepage</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-about" href="./index.php">About us</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-product" href="./index.php">Products</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-service" href="./index.php">Services</a>
            </div>
            <div class="sap">|</div>
            <div class="toplinks">
                <a class="ta" data-tab-target="#content-contact" href="./index.php">Contact us</a>
            </div>

            <div class="member">
                <div class="toplinks">
                    <p style="padding: 0; margin: 0;"> Welcome <?php echo ("$name") ?> ! </p>
                </div>
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks">
                    <a class="ta" data-tab-target="#content-login" href="./login.php">Login</a>
                </div>
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks">
                    <a class="ta" data-tab-target="#content-register" href="./register.php">Register</a>
                </div>
                <div style="width:50px; padding: 0; margin: 0;" class="toplinks hide">
                    <a class="ta" data-tab-target="#content-register" href="./logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="outer2"></div>

        <div id="outer2" class="colu">

            <!-- LOGIN -->
            <?php
			require('db_conn.php');
			session_start();
			// When form submitted, check and create user session.
			if (isset($_POST['submit'])) {
				$username = trim(stripslashes($_POST['username']));
				$password = trim(stripslashes($_POST['password']));
				$sql    = "SELECT * FROM `userdb` WHERE username='$username'
             	AND password='" . md5($password) . "'";
				$stmt = $conn->query($sql);


				foreach ($stmt as $re) {
					if ($re['username'] === $username && $re['password'] === md5($password)) {
						if ($re['is_admin'] === 1) {
							$_SESSION['is_admin'] = true;
							$_SESSION['username'] = $username;
							// Redirect to admin dashboard page
							header("Location: admin.php");
							exit();
						}
						$_SESSION['username'] = $username;
						// Redirect to user dashboard page
						header("Location: index.php");
						exit();
					}
				}


				//header("Location: login.php"); 
			?>

            <div id="content-login" data-tab-content class="main-content active">
                <div id="main">
                    <div class="login-containter">
                        <h2>LOGIN</h2>
                        <div class="noti-member" style="
	width: 190px;
    height: 48px;
    display: flex;
    justify-content: center;
    align-self: center;
    background-color: rgb(251, 251, 251);
    border-radius: 5px;
    border: solid black;">
                            <h3 style="color: red;">NO USER FOUND!</h3>
                        </div>
                        <form name="login" method="post" enctype="multipart/form-data" autocomplete="off">
                            <div>
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" autofocus="true">
                            </div>
                            <div>
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <section>
                                <button type="submit" value="Login" name="submit" id="btn-login">Login</button>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
            <!-- -->

            <?php
				//exit();
			} else {        ?>
            <!-- -->
            <div id="content-login" data-tab-content class="main-content active">
                <div id="main">
                    <div class="login-containter">

                        <h2>LOGIN</h2>
                        <form action="login.php" name="login" method="post" enctype="multipart/form-data"
                            autocomplete="off">
                            <div>
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" autofocus="true">
                            </div>
                            <div>
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password">
                            </div>

                            <button type="submit" value="Login" name="submit" id="btn-login">Login</button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- -->
            <?php
			}
			?>
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