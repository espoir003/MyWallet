<!doctype html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/main.min.css" type="text/css" media="screen">
  <link rel="shortcut icon" href="menu.html#">
  <title>MyWallet | Menu</title>
</head>

<body class="main-menu">

    <!-- Header Start -->
    <div class="main-header w-100">
        <div class="top-row d-flex justify-content-between align-items-center">
            <div class="time">
                <!-- <img src="img/icons/i-phone-x-overrides-time-white.svg" alt="Time Icon White">
                <img src="img/icons/time-dark-theme.svg" class="dark-theme-image" alt=""> -->

            </div>
            <div class="mobile-info-icons">
                <!-- <img src="img/icons/phone-icons-white.svg" alt="Phone Indication Icons White">
                <img src="img/icons/phone-icons-white.svg" class="dark-theme-image" alt="phone-icons"> -->

            </div>
        </div>
        <div class="middle-row d-flex justify-content-end w-100">                          
    
            <!-- Menu Icon Start -->
            <div class="menu-icon icon-close">
                <a href="javascript: history.go(-1)" class="d-flex align-items-baseline change-image-theme">
                    <img src="img/icons/close-icon.svg" alt="Menu Icon Close">
                    <img src="img/icons/close-icon-dark-theme.svg" class="dark-theme-image" alt="Menu Icon Close">
                    <div class="ml-2">
                        Close
                    </div>
                </a>
            </div>
            <!-- Menu Icon End -->

        </div>
    </div>
    <!-- Header End -->

    <div class="main-content h-100">
      <!-- All Content Start -->
      <div class="content-padding h-100">

        <div class="d-flex flex-column h-100">

            <!-- User Information Start -->
            <div class="main-menu_user-information">
                <div class="user-thumbnail">
                    <img src="img/users.png" alt="User <?php echo htmlspecialchars($_SESSION['nom']); ?>">
                </div>
                <div class="user-name">
                    <?php echo htmlspecialchars($_SESSION['nom']); ?>
                </div>
                <div class="user-phone">
                    Welcome to your Wallet
                </div>
            </div>
            <!-- User Information End -->
    
            <!-- Menu Items Start -->
            <div class="menu-items">
    
                <!-- Menu Item Start -->
                <a href="dashboard" class="menu-item">
                    <span class="menu-item-icon">
                        <img src="img/icons/overviews-menu-icon.svg" alt="Overview Menu Icon">
                    </span>
                    <span class="menu-item-name">
                        Home
                    </span>
                </a>
                <!-- Menu Item End -->
    
                <!-- Menu Item Start -->
                <a href="About-the-app" class="menu-item">
                    <span class="menu-item-icon">
                        <img src="img/icons/profile-menu-icon.svg" alt="Profile Menu Icon">
                    </span>
                    <span class="menu-item-name">
                        About the app
                    </span>
                </a>
                <!-- Menu Item End -->
    
                <!-- Menu Item Start -->
                <a href="Income" class="menu-item">
                    <span class="menu-item-icon">
                        <img src="img/icons/components-menu-icon.svg" alt="Components Menu Icon">
                    </span>
                    <span class="menu-item-name">
                        Income
                    </span>
                </a>
                <!-- Menu Item End -->
    
                <!-- Menu Item Start -->
                <a href="Transaction" class="menu-item">
                    <span class="menu-item-icon">
                        <img src="img/icons/cards-menu-icon.svg" alt="My Cards Menu Icon">
                    </span>
                    <span class="menu-item-name">
                        Transaction
                    </span>
                </a>
                <!-- Menu Item End -->
    
                <!-- Menu Item Start -->
                <a href="Setting" class="menu-item">
                    <span class="menu-item-icon">
                        <img src="img/icons/settings-menu-icon.svg" alt="Settings Menu Icon">
                    </span>
                    <span class="menu-item-name">
                        Settings
                    </span>
                </a>
                <!-- Menu Item End -->
    
                <!-- Menu Item Start -->
                <a href="#" class="menu-item">
                    <span class="menu-item-icon">
                        <img src="img/icons/support-menu-icon.svg" alt="Support Menu Icon">
                    </span>
                    <span class="menu-item-name">
                        Support
                    </span>
                </a>
                <!-- Menu Item End -->
    
                <!-- Menu Item Start -->
                <!-- <a href="menu.html#" class="menu-item">
                    <span class="menu-item-icon">
                        <img src="img/icons/usa-flag.svg" alt="Language Menu Icon">
                    </span>
                    <span class="menu-item-name">
                        Language
                    </span>
                </a> -->
                <!-- Menu Item End -->
    
            </div>
            <!-- Menu Items End -->
    
            <!-- Logout Start -->
            <div class="logout-section mt-auto">
                <a href="logout" class="logout-item">
                    <span class="logout-section_icon">
                        <i class="fal fa-sign-out"></i>
                    </span>
                    <span class="logout-section_name">
                        Logout
                    </span>
                </a>
            </div>
            <!-- Logout End -->

        </div>

        
      </div>
      <!-- All Content End -->
    </div>

    <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>