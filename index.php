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
        <a class="ta active" data-tab-target="#content-home" href="#home">Homepage</a>
      </div>
      <div class="sap">|</div>
      <div class="toplinks">
        <a class="ta" data-tab-target="#content-about" href="#about">About us</a>
      </div>
      <div class="sap">|</div>
      <div class="toplinks">
        <a class="ta" data-tab-target="#content-product" href="#products">Products</a>
      </div>
      <div class="sap">|</div>
      <div class="toplinks">
        <a class="ta" data-tab-target="#content-service" href="#service">Services</a>
      </div>
      <div class="sap">|</div>
      <div class="toplinks">
        <a class="ta" data-tab-target="#content-contact" href="#contact">Contact us</a>
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
      <div id="left-nav" style="text-align: center">
        <h2 style="padding: 0 0 0 0">Vehicle Showcases</h2>
        <div id="showcase">
          <div class="stxt-bg">
            <h3>Porsche 911 GT3 RS</h3>
            <div class="smaltext">
              <a href="#">
                <img src="Images/911-GT3-RS.jpg" alt="" width="150" height="110" border="0" /></a>
              <div class="clear"></div>
              The Porsche 911 GT3 is a high-performance homologation model of
              the Porsche 911 sports car.
            </div>
            <div style="clear: right; height: 25px">
              <span class="read-more"><a href="#"> Read More </a></span>
            </div>
          </div>
        </div>

        <div id="showcase">
          <div class="stxt-bg">
            <h3>Taycan Turbo S</h3>
            <div class="smaltext">
              <a href="#">
                <img style="background-color: white" src="Images/Taycan-Turbo-S.png" alt="" width="150" height="110" border="0" /></a>
              <div class="clear"></div>
              The Porsche Taycan is a battery electric saloon and shooting
              brake produced by German automobile ...
            </div>
            <div style="clear: right; height: 25px">
              <span class="read-more"><a href="#"> Read More </a></span>
            </div>
          </div>
        </div>

        <div id="showcase">
          <div class="stxt-bg">
            <h3>Porsche Panamera</h3>
            <div class="smaltext">
              <a href="#">
                <img src="Images/panamera.png" alt="" width="150" height="110" border="0" /></a>
              <div class="clear"></div>
              The Porsche Panamera is a mid/full-sized luxury car (E-segment
              or F-segment for LWB in Europe) manufa ...
            </div>
            <div style="clear: right; height: 25px">
              <span class="read-more"><a href="#"> Read More </a></span>
            </div>
          </div>
        </div>
      </div>

      <!-- THE RIGHT COLUMN-->

      <!-- HOME -->
      <div id="content-home" data-tab-content class="main-content active">
        <h2>Welcome to Porsche Website!</h2>
        <p style="padding: 5px 20px">
          The Porsche website is more than just a virtual showroom; it's a
          meticulously crafted experience that celebrates the iconic brand
          and its passionate community.
        </p>
        <div id="main">

          <h4>2023 Porsche 718 Cayman: What’s New</h4>
          <a href="#"><img src="Images/718-cayman.png" alt="" width="142" height="110" border="0" /></a>
          <p>
            The 2023 Porsche 718 Cayman is one such sports car that continues
            to captivate our collective attention—and one that we're happy to
            have on our 2023 10 Best cars list. Its turbocharged engines are
            mounted amidships, giving the Cayman—and its convertible sibling,
            the 718 Boxster—a natural handling advantage over front-engined
            <span class="read-more"><a href="#"> Read More </a></span>
          </p>
          <div class="clear"></div>

          <h4>2023 Porsche 718 Boxster: What’s New</h4>
          <a href="#"><img src="Images/718-Boxter.png" alt="" width="142" height="110" border="0" /></a>
          <p>
            A mid-engine configuration gives the Boxster a balanced,
            light-on-its-feet feel on the road, and you can enjoy the
            aggressive exhaust note and the sun's warming rays at the same
            time with the top pulled back. Okay, you caught us waxing poetic;
            the Boxster isn't a perfect car. Cargo space is limited, there are
            only two seats inside its cockpit, and the best powertrain—the
            sweet, sonorous flat-six—is limited to the expensive GTS trim. But
            let's be real here—it's a sports car, so who would expect it to be
            all things to all drivers? That's what makes the 718 so special:
            It's brilliant at all things a sports car needs to be.
            <span class="read-more"><a href="#"> Read More </a></span>
          </p>
          <div class="clear"></div>

          <h2>Porsche News</h2>
          <p>
            Porsche Motorsport and series organiser Creventic have created a
            new event for the current 911 GT3 Cup: the Michelin 992 Endurance
            Cup powered by Porsche Motorsport. The 12-hour race will be run on
            the 6/7 September 2024 at the Circuit de Spa-Francorchamps in
            Belgium. This event is reserved exclusively for customer teams
            fielding 992-generation 911 GT3 Cup cars.
            <span class="read-more"><a href="#"> Read More </a></span>
          </p>
          <p>
            Porsche Motorsport and series organiser Creventic have created a
            new event for the current 911 GT3 Cup: the Michelin 992 Endurance
            Cup powered by Porsche Motorsport. The 12-hour race will be run on
            the 6/7 September 2024 at the Circuit de Spa-Francorchamps in
            Belgium. This event is reserved exclusively for customer teams
            fielding 992-generation 911 GT3 Cup cars.
            <span class="read-more"><a href="#"> Read More </a></span>
          </p>
        </div>
      </div>
      <!-- ABOUT -->
      <div id="content-about" data-tab-content class="main-content">
        <div id="main">
          <h2>Who we are</h2>
          <p class="bottom-space">
            <a href="https://www.porsche.com/usa">Porsche.com</a> is a&nbsp;leading
            digital marketplace and solutions provider for the automotive
            industry that connects car shoppers with sellers. Launched in 1998
            and headquartered in&nbsp;Chicago, the Company empowers shoppers
            with the data, resources and digital tools needed to make informed
            buying decisions and seamlessly connect with automotive retailers.
            In a rapidly changing market,
            <a href="https://www.porsche.com/usa">Porsche.com</a> enables dealerships and
            OEMs with innovative technical solutions and data-driven
            intelligence to better reach and influence ready-to-buy shoppers,
            increase inventory turn and gain market share.&nbsp;In 2018,
            <a href="https://www.porsche.com/usa">Porsche.com</a>
            acquired Dealer Inspire®, an&nbsp;innovative technology company
            building solutions that future-proof dealerships with more
            efficient operations, a faster and easier car buying process, and
            connected digital experiences that sell and service more vehicles.
          </p>
        </div>
      </div>
      <!-- PRODUCTS -->
      <div id="content-product" data-tab-content class="main-content ">
        <div id="main product-main" style="
          display: flex;
          flex-direction: row;
          width: 923px;">

          <div class="category left">
            <div class="category-list-container">
              <label for="">
                <h2 style="margin: 0;">MODEL</h2>
              </label>
              <button>
                <div class="category-img"><img src="./Images/categorylist/718.svg" alt=""></div>
                <div class="category-arrow"><img src="./Images/categorylist/arrow-head-right.svg" alt=""></div>
              </button>
              <button>
                <div class="category-img"><img src="./Images/categorylist/911.svg" alt=""></div>
                <div class="category-arrow"><img src="./Images/categorylist/arrow-head-right.svg" alt=""></div>
              </button>
              <button>
                <div class="category-img"><img src="./Images/categorylist/taycan.svg" alt=""></div>
                <div class="category-arrow"><img src="./Images/categorylist/arrow-head-right.svg" alt=""></div>
              </button>
              <button>
                <div class="category-img"><img src="./Images/categorylist/macan.svg" alt=""></div>
                <div class="category-arrow"><img src="./Images/categorylist/arrow-head-right.svg" alt=""></div>
              </button>
              <button>
                <div class="category-img"><img src="./Images/categorylist/panamera.svg" alt=""></div>
                <div class="category-arrow"><img src="./Images/categorylist/arrow-head-right.svg" alt=""></div>
              </button>
              <button>
                <div class="category-img"><img src="./Images/categorylist/canyenne.svg" alt=""></div>
                <div class="category-arrow"><img src="./Images/categorylist/arrow-head-right.svg" alt=""></div>
              </button>
              <?php if (isset($_SESSION['is_admin'])) { ?>

                <div class="btn-admin-container">
                  <a href="admin.php">
                    <button class="admin-btn">

                      <h2>update product</h2>

                    </button>
                  </a>
                </div>

              <?php } else { ?>

                <!-- -->

              <?php } ?>

            </div>
          </div>

          <div class="product right">
            <div class="product-list-container">
              <?php
              require('db_conn.php');
              try {
                $sql = 'SELECT productId,productModel, productName, productImage, productPrice FROM productdb';
                $stmt = $conn->query($sql);
              } catch (Exception $e) {
                die('SQL Error:' . $e->getMessage());
              } ?>

              <?php foreach ($stmt as $item) { ?>
                <!-- -->
                <div class="product-card">
                  <img src="./Images/718-Boxter.png" alt="" class="product-img">
                  <h5 class="product-name"><?= $item['productName'] ?></h5>
                  <h3 class="product-price"><?= $item['productPrice'] ?></h3>
                  <button><a href="">BUY NOW</a></button>
                  <?php if (isset($_SESSION['is_admin'])) {
                  ?>
                    <form action="db_delete_this.php" method="get">
                      <button type="submit" value="<?= $item['productId'] ?>" name="delete">DELETE</button>
                    </form>
                  <?php  } else { ?>

                    <!-- -->
                  <?php } ?>
                </div>
                <?php } ?>

            </div>
          </div>
        </div>
      </div>
      <!-- SERVICES -->
      <div id="content-service" data-tab-content class="main-content">
        <div id="main">
          <h2>Our services</h2>
          <p>
            Cars.com invented car search. Our site and innovative solutions
            connect buyers and sellers to match people with their perfect car.
            With our people spread across the U.S. we still maintain a startup
            culture with innovation and passion for our people at the core of
            everything we do.
          </p>
          <p>
            Cars.com has an award-winning brand, leadership team, and the best
            and brightest employees in the industry. We’ve been featured as
            one of the top places to work by The Chicago Tribune, Built in
            Chicago, Chicago Innovation, and U.S. News & World Report.
          </p>
        </div>
      </div>

      <!-- CONTACT -->
      <div id="content-contact" data-tab-content class="main-content">
        <div id="main">
          <h2>Our social media</h2>
          <!--  -->
          <div class="contact-section">
            <div class="sds-page-section contact-layout">
              <div class="contact-heading">
                <h2 class="spark-heading-2 sds-page-section__title contact-section-header">Contact us today</h2>
              </div>
              <div class="button-container">
                <h3 class="spark-heading-3 button-heading"><svg class="duotone contact-svg" height="16" width="16">
                    <use xlink:href="/svg/spritemap-45f421b6ebaae75d4813e9a2ac89dbe3.svg?vsn=d#duotone-message"></use>
                  </svg>Chat
                </h3>
                <div class="avaamo-chat-bot-container">
                  <div id="avaamo-chat-bot-button" class="sds-button--secondary contact-button" trid="e877e18b-2cad-4ace-abb7-9225ea983fd4" trc="">Start chat</div>
                </div>
              </div>
              <div class="divider"></div>
              <div class="button-container">
                <h3 class="spark-heading-3 button-heading"><svg class="duotone contact-svg" height="16" width="16">
                    <use xlink:href="/svg/spritemap-45f421b6ebaae75d4813e9a2ac89dbe3.svg?vsn=d#duotone-mail"></use>
                  </svg>Feedback</h3>
                <a class="sds-button--secondary contact-button" data-toggle="modal" data-target="#qualtrics-modal" href="#" data-modal-registered="1">Leave feedback</a>
              </div>
            </div>
          </div>
          <!--  -->
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