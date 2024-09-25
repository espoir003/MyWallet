<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/main.min.css" type="text/css" media="screen">
  <link rel="shortcut icon" href="sign-in.html#">
  <title>Wallet | Login</title>
</head>

<body class="worldwide-bg">

    <!-- Header Start -->
    <div class="main-header w-100">
      <div class="top-row d-flex justify-content-between align-items-center" style="margin-top: -30px;">
          <!-- <div class="time">
              <img src="img/icons/i-phone-x-overrides-time-black.svg" alt="">
              <img src="img/icons/time-dark-theme.svg" class="dark-theme-image" alt="">

          </div>
          <div class="mobile-info-icons">
              <img src="img/icons/phone-icons.svg" alt="phone-icons">
              <img src="img/icons/phone-icons-white.svg" class="dark-theme-image" alt="phone-icons">

          </div> -->
      </div>
    </div>
    <!-- Header End -->
    
    <div class="main-content h-100">
      <!-- All Content Start -->
      <div class="content-padding h-100 d-flex flex-column justify-content-center min-600">

        <!-- Logo FinHit Start -->
        <div class="text-center d-flexjustify-content-center align-items-center mt-auto change-image-theme-ib">
          <img src="img/Logo.png" alt="FinHit Logo">
          <img src="img/big_logo-dark-theme.png" class="dark-theme-image" alt="FinHit Logo">

          <!-- Slogan Start -->
          <div class="slogan text-center">Your Application </div>
          <!-- Slogan End -->

        </div>
        <!-- Logo FinHit End -->

        <!-- Sign Up Form Start -->
        <form class="sing-up-form" method="post">
          <!-- Form Field Start -->
          <div>
              <input class="form-control" type="email" autocomplete="off" name="email" placeholder="E-mail adress">
          </div>
          <!-- Form Field End -->          
            
          <!-- Form Field Start -->
          <div>
              <input class="form-control" type="password" autocomplete="off" name="password" placeholder="Password">
          </div>
          <!-- Form Field End -->

          <?php if(!empty($messageConnexion)){
            ?>
            <p style="text-align: center;font-size: 10px;padding: 10px;margin-top:-5px;margin-bottom: -5px;background-color: red;font-weight: bold;color:white;"><?php echo $messageConnexion; ?></p> <br>
              <?php }?>
            <input type="submit" value="Se connecter" name="Login" style="width: 100%;" class="btn btn-light"> 
            

        </form>
        <!-- Sign Up Form End -->

        <!-- Registration Row Start -->
        <div class="d-flex justify-content-between align-items-center w-100 mt-2 registration-row">
          <a href="register" class="text-underline">Crée un compte</a>
          <i><a href="#forgot-password.html">Mot de passe oublier?</a></i>
        </div>
        <!-- Registration Row End -->

        <!-- Copyright Block Start -->
        <div class="copyright-block text-center mt-auto">
            Copyright &copy; <span>Assengo - Yooto</span> 2024. All Rights Reserved.
        </div>
        <!-- Copyright Block End -->
        
      </div>
      <!-- All Content End -->
    </div>

    <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>
