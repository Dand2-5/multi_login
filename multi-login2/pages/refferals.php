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
  <title>Withdraw</title>
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
  <link rel="stylesheet" href="../styles/sub.css">
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

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
      <div class="container">
        <div class="pro-card">
          <div class="pro-head">
            <h2>Refferals</h2>
            <p class="text-info">Refferal ID:</p>
          </div>
          <div class="pro-body">
            <div>
              <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="Refferal Link" disabled style="height:30px">
                <div class="input-group-append" style="margin-left: -3px">
                  <button class="copy-wallet input-group-text"
                    style="height: 30px; cursor: pointer; font-size: 10pt; font-weight: 500;"><i
                      class="lni lni-folder"></i>&nbsp;Copy</button>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table id="referral_table" class="table table-striped table-bordered table-hover dataTable"
                  aria-describedby="data-table_info" role="grid">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                        style="width: 106.617px;">ID</th>
                      <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                        style="width: 157.833px;">From</th>
                      <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                        style="width: 261.9px;">Date &amp; Time</th>
                      <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                        style="width: 122.433px;">Percentage %</th>
                      <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                        style="width: 252.217px;">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="6" style="text-align:center; color: #d9534f;">No Referrals</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center p-3 mt-5">
        <p>Copyright © 2022. Bistrominers. All Rights Reserved</p>
      </div>
    </section>
  </section>
  <script src="../scripts/script.js"></script>
</body>

</html>