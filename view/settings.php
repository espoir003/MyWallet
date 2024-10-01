<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/main.min.css" type="text/css" media="screen">
  <link rel="shortcut icon" href="settings.html#">
  <title>MyWallet | Settings</title>
</head>

<body class="light-grey settings-page ">

    <!-- Header Start -->
    <?php include_once('../import/header.php'); ?>
    <!-- Header End -->

    <div class="main-content p-100">
      <!-- All Content Start -->
      <div class="content-padding">

        <!-- Content Title & Slogan Start -->
        <div class="sub-pages-top-content-section ">
            <div class="top">
                <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                    <img src="img/users.png" class="user-image-wrapper border-50" alt="User Image">
                </div>
                <div class="title">
                    <?php echo $_SESSION['nom']; ?>
                </div>
            </div>
            <div class="slogan" style="text-align: center;">
                This page is designed to help you personalize your account
            </div>
        </div>
        <!-- Content Title & Slogan End -->

        <!-- Devide Start -->
        <div class="devider-without-line"></div>
        <!-- Devide End -->

          <!-- Send Money Block Start -->
          <div class="send-money-block information-block mt-4">
              <div class="information-block_title d-flex justify-content-between align-items-center">
                  <div>
                    Budget display
                  </div>
                  <!-- <a href="settings.html#" class="text-underline">Add New</a> -->
              </div>
              <div class="send-money-carousel owl-carousel">
                    <?php 

                    // Maintenant, vous pouvez afficher les données de la manière que vous voulez dans votre section
                    foreach ($budgets as $budget) {
                    ?>
                  <div class="item text-center">
                      <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                          <img src="img/budget-4.png" alt="User Image">
                      </div>
                      
                      <div class="user-name">
                      <span class="" style="font-size: 10px;font-weight: bold;">$<?php echo htmlspecialchars($budget['total_budget']) ; ?> / <span style="color: red;"> $ <?php echo htmlspecialchars($budget['solde_categorie']) ; ?></span></span>
                        <span style="font-size: 10px;"><?php echo htmlspecialchars(substr($budget['nom_categorie'],0,8)); ?>...</span>
                      </div>
                  </div>
                  <?php } ?>

              </div>
          </div>
          <!-- Send Money Block End -->
          <!-- Devide Start -->
          <div class="devider-without-line"></div>
          <!-- Devide End -->

        <!-- App Pages Start -->
        <div class="pages-list_title mb-4">
            <div class="title">
                Notifications
            </div>
            <div class="pages-list">
                <div class="item-page">
                    <div class="d-flex align-items-center">

                        <div class="page-title ml-0 light-theme-visibility">
                            Dark Mode <i class="fal fa-moon ml-2 fs-12"></i>
                        </div>
                        <div class="page-title ml-0 dark-theme-visibility">
                            Light Mode <i class="fal fa-sun ml-2 fs-12"></i>
                        </div>
                        <div class="arrow-right ml-auto d-flex align-items-center">
                            <input class="theme-switcher apple-switch" name="value" value="dark" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="item-page">
                    <div class="d-flex align-items-center">

                        <div class="page-title ml-0">
                            Allow Notifications
                        </div>
                        <div class="arrow-right ml-auto d-flex align-items-center">
                            <input class="apple-switch" type="checkbox" checked>
                        </div>
                    </div>
                </div>
                <div class="item-page">
                    <div class="d-flex align-items-center">

                        <div class="page-title ml-0">
                            Sounds
                        </div>
                        <div class="arrow-right arrow-text ml-auto">
                            Aurora <img class="ml-2" src="img/icons/arrow-right.svg" alt=""><img class="ml-2 dark-theme-image" src="img/icons/arrow-right-dark-theme.svg" alt="">
                        </div>
                    </div>
                    <a href="#" class="page-list_item-page-link"></a>
                </div>
                <div class="item-page">
                    <div class="d-flex align-items-center">

                        <div class="page-title ml-0">
                            Repeat alert
                        </div>
                        <div class="arrow-right arrow-text-1 ml-auto">
                            Once <img class="ml-2" src="img/icons/arrow-right.svg" alt=""><img class="ml-2 dark-theme-image" src="img/icons/arrow-right-dark-theme.svg" alt="">
                        </div>
                    </div>
                    <a href="#" class="page-list_item-page-link"></a>
                </div>

            </div>
        </div>
        <!-- App Pages End -->

        <!-- Authentication Pages Start -->
        <div class="pages-list_title mb-4">
            <div class="title">
                PROFILE SETTINGS
            </div>
            <div class="pages-list">
                <div class="item-page">
                    <div class="d-flex align-items-center">
                        <div class="page-title ml-0">
                            Change Username
                        </div>
                        <div class="arrow-right ml-auto">
                            <img src="img/icons/arrow-right.svg" alt=""><img class="ml-2 dark-theme-image" src="img/icons/arrow-right-dark-theme.svg" alt="">
                        </div>
                    </div>
                    <a href="#" class="page-list_item-page-link"></a>
                </div>
                <div class="item-page">
                    <div class="d-flex align-items-center">
                        <div class="page-title ml-0">
                            Update E-mail
                        </div>
                        <div class="arrow-right ml-auto">
                            <img src="img/icons/arrow-right.svg" alt=""><img class="ml-2 dark-theme-image" src="img/icons/arrow-right-dark-theme.svg" alt="">
                        </div>
                    </div>
                    <a href="#" class="page-list_item-page-link"></a>
                </div>
                
                <div class="item-page">
                    <div class="d-flex align-items-center">
                        <div class="page-title ml-0">
                            Private Profile
                        </div>
                        <div class="arrow-right ml-auto d-flex align-items-center">
                            <input class="apple-switch" type="checkbox">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Authentication Pages End -->

        <!-- Blog Pages Start -->
        <div class="pages-list_title mb-4">
            <div class="title">
                SECURITY
            </div>
            <div class="pages-list">
                <div class="item-page">
                    <div class="d-flex align-items-center">
                        <div class="page-title ml-0">
                            Update Password
                        </div>
                        <div class="arrow-right ml-auto">
                            <img src="img/icons/arrow-right.svg" alt=""><img class="ml-2 dark-theme-image" src="img/icons/arrow-right-dark-theme.svg" alt="">
                        </div>
                    </div>
                    <a href="#" class="page-list_item-page-link"></a>
                </div>
               
                <div class="item-page">
                    <div class="d-flex align-items-center">
                        <div class="page-title ml-0">
                            Log Out All Devices
                        </div>
                        <div class="arrow-right ml-auto">
                            <img src="img/icons/arrow-right.svg" alt=""><img class="ml-2 dark-theme-image" src="img/icons/arrow-right-dark-theme.svg" alt="">
                        </div>
                    </div>
                    <a href="#" class="page-list_item-page-link"></a>
                </div>
            </div>
        </div>
        <!-- Blog Pages End -->

      </div>
      <!-- All Content End -->
    </div>

    <!-- Footer Start -->
    <?php include_once('../import/footer.php'); ?>
    <!-- Footer End -->

<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>
