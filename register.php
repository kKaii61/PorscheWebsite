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
    <div id="logo-bg">
      <img src="Images/Porsche-Logo.png" width="150" height="75" alt="" id="porsche-logo" />
      <h1>Porsche</h1>
      <span class="tag"> There is no substitute. </span>
    </div>
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
        <div style="width:50px; padding: 0; margin: 0;" class="toplinks">
          <a class="ta" data-tab-target="#content-register" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div id="outer2"></div>

    <div id="outer2" class="colu">
      <!-- REGISTER -->
      <?php
      require('db_conn.php');
      if (isset($_POST['submit'])) {
        $username = trim(stripslashes($_POST['username']));
        $email    = trim(stripslashes($_POST['email']));
        $password = trim(stripslashes($_POST['password']));
        $sql    = "INSERT into `userdb` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $stmt   = $conn->exec($sql);
        if ($stmt) {
            $name = $username;
          echo "<div class='register-noti'>
          <div>
                  <h3 style='font-size: 3rem;'>You are registered successfully.</h3><br/>
                  <p style='font-size: 2rem;'>Now Redirecting...</p>
                  </div> </div>"; ?>
                  <script>
                setTimeout(function() {
                window.location.href = "index.php";
                  }, 4000); // Delay in milliseconds (3 seconds in this example)
                  </script>
                  <?php
                  // header("Location: index.php");
                  // exit();
        } else {
          echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
        }
      } else {
      ?>
        <!-- -->
        <div id="content-register" data-tab-content class="main-content active">
          <div id="main">
            <div class="register-container">

              <h2>REGISTER</h2>
              <form name="register" method="post" action="" enctype="multipart/form-data" autocomplete="off">
                <div>
                  <label for="username">Username:</label>
                  <input type="text" name="username" id="username" required>
                </div>
                <div>
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email">
                </div>
                <div>
                  <label for="password">Password:</label>
                  <input type="password" name="password" id="password">
                </div>
                <div>
                  <label for="password2">Password Again:</label>
                  <input type="password" name="password2" id="password2">
                </div>
                <div>
                  <label for="agree">
                    <input type="checkbox" name="agree" id="agree" value="yes" /> I agree
                    with the
                    <a class="term" href="#" title="term of services">term of services</a>
                  </label>
                </div>
                <button type="submit" name="submit" value="Register">Register</button>
              </form>

            </div>
          </div>
        </div>

        <!-- -->
      <?php
      }
      ?>
    </div>
    <!-- END REGISTER -->

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