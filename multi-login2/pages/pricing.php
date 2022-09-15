<?php
	include('../functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: signin.php');
	}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="../../assets/images/logo/icon.svg" type="image/x-icon" />
  <title>Bistrominers</title>
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<style>

</style>

<body>
  <header class="fixed-top">
    <div class="navbar">
      <div class="hamburger" onclick="hamburgerClick()">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="logo">
        <img src="../../assets/images/logo/bistrominers.svg" alt="">
      </div>
    </div>
    <div id="profile" onclick="showPnav()">
      <div class="profile-img">
        <img class="pi" src="../images/avatar.png" alt="">
        <h4 class="pi-name"><?php echo ucfirst($_SESSION['user']['username']); ?></h4>
        <div id="profile-nav" class="pn-gone">
          <div class="pn-head">
            <div>
              <img src="../images/avatar.png" alt="">
            </div>
            <div>
              <?php  if (isset($_SESSION['user'])) : ?>
              <p class="pnh-name">
                <?php echo ucfirst($_SESSION['user']['username']); ?>
              </p>
              <p class="pnh-type">
                <?php echo ucfirst($_SESSION['user']['user_type']); ?>
              </p>
              <?php endif ?>
            </div>
          </div>
          <div class="pn-body">
            <a href="./deposit.php"><i class="lni lni-mastercard"></i>Deposit Funds</a>
            <a href="./profile.php"><i class="lni lni-consulting"></i>Profile</a>
            <a href="../index.php?logout='1'"><i class="lni lni-exit"></i>logout</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="separate"></div>
  <section class="layout">
    <?php
      include("../includes/sidebar.php")
    ?>
    <div class="dt-drawer" onclick="hamburgerClick()"></div>
    <section class="layout-body">
      <div class="container-fluid">
        <section class="pp ppp">
          <div class="pp-desc text-center">
            <div class="container">
              <p class="sub">Get Started Now</p>
              <h1 class="title">Our Pricing Plans</h1>
              <p class="title-desc">
                Get started now with us to earn every day and forever with our range
                of plans. We accept Investment from all over the world.
              </p>
            </div>
          </div>
          <div class="pp-cards container-fluid">
            <div class="pp-card">
              <div class="pp-img">
                <img src="../assets/cCoin.png" alt="">
                <div class="pp-img-smt">
                  <p>4% After 24 hours</p>
                </div>
              </div>
              <div class="ppc-desc text-center">
                <h2 class="ppc-title">Bronze</h2>
                <div class="caption">
                  <div>
                    <span>Min</span>
                    <span>$50</span>
                  </div>
                  <div>
                    <span>Max</span>
                    <span>$999</span>
                  </div>
                  <div>
                    <span>Refferal</span>
                    <span>%5</span>
                  </div>
                </div>
                <br /><button href="#" class="cta-btn pp-btn">Get Started</button>
              </div>
            </div>

            <div class="pp-card">
              <div class="pp-img">
                <img src="../assets/cCoin.png" alt="">
                <div class="pp-img-smt">
                  <p>6% After 24 hours</p>
                </div>
              </div>
              <div class="ppc-desc text-center">
                <h2 class="ppc-title">Silver</h2>
                <div class="caption">
                  <div>
                    <span>Min</span>
                    <span>$1000</span>
                  </div>
                  <div>
                    <span>Max</span>
                    <span>$4999</span>
                  </div>
                  <div>
                    <span>Refferal</span>
                    <span>%5</span>
                  </div>
                </div>
                <br /><button href="#" class="cta-btn pp-btn">Get Started</button>
              </div>
            </div>

            <div class="pp-card">
              <div class="pp-img">
                <img src="../assets/cCoin.png" alt="">
                <div class="pp-img-smt">
                  <p>8% After 24 hours</p>
                </div>
              </div>
              <div class="ppc-desc text-center">
                <h2 class="ppc-title">Gold</h2>
                <div class="caption">
                  <div>
                    <span>Min</span>
                    <span>$5000</span>
                  </div>
                  <div>
                    <span>Max</span>
                    <span>$10999</span>
                  </div>
                  <div>
                    <span>Refferal</span>
                    <span>%5</span>
                  </div>
                </div>
                <br /><button href="#" class="cta-btn pp-btn">Get Started</button>
              </div>
            </div>

            <div class="pp-card">
              <div class="pp-img">
                <img src="../assets/cCoin.png" alt="">
                <div class="pp-img-smt">
                  <p>12% After 24 hours</p>
                </div>
              </div>
              <div class="ppc-desc text-center">
                <h2 class="ppc-title">Platinum</h2>
                <div class="caption">
                  <div>
                    <span>Min</span>
                    <span>$14000</span>
                  </div>
                  <div>
                    <span>Max</span>
                    <span>Unlimited</span>
                  </div>
                  <div>
                    <span>Refferal</span>
                    <span>%5</span>
                  </div>
                </div>
                <br /><button href="#" class="cta-btn pp-btn">Get Started</button>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="footer-bottom text-center p-3 mt-5">
        <p>Copyright © 2022. Bistrominers. All Rights Reserved</p>
      </div>
    </section>
  </section>
  <script src="../scripts/script.js"></script>
</body>

</html>