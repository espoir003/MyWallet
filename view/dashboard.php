<!doctype html>
<html >
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/main.min.css" type="text/css" media="screen">

  <link rel="shortcut icon" href="home.html#">
  <title>MyWallet | Dashboard</title>
</head>

<body class="light-grey overview-page">

    <!-- Modals Start -->
<!-- Modal Add Money Start-->
<div class="modal fade" id="balanceModal" tabindex="-1" role="dialog" aria-labelledby="balanceModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
            <div class="text-center change-image-theme-ib">
            <img src="img/icons/add-money-icon.svg" class="modal-icon" alt="Add Money Icon">
            <img src="img/icons/add-money-icon-dark-theme.svg" class="modal-icon dark-theme-image" alt="Add Money Icon">
            <div class="modal-title">
                
                ADD SPENT
            </div>
        </div>
        <div class="modal-text">
             Please complete the details below to record a new expense.
        </div>

        <div class="devider-without-line"></div>

        <!-- Add Spent Form Start -->
        <form class="add-balance-form" action="" method="POST">
            

            <!-- Catégorie de dépense -->
            <div class="d-flex align-items-center mt-3">
                <label for="categorie">Category</label>
                <select class="form-control" name="categorie_id" id="categorie">
                    <!-- Remplir dynamiquement avec les catégories disponibles -->
                    <option value="1">Alimentation</option>
                    <option value="2">Transport</option>
                    <option value="3">Loisirs</option>
                    <!-- Autres catégories -->
                </select>
            </div>

            <!-- Méthode de paiement -->
            <div class="d-flex align-items-center mt-3">
                <label for="methode-paiement">Payment Method</label>
                <select class="form-control" name="methode_paiement_id" id="methode-paiement">
                    <!-- Remplir dynamiquement avec les méthodes de paiement disponibles -->
                    <option value="1">Carte de Crédit</option>
                    <option value="2">PayPal</option>
                    <option value="3">Espèces</option>
                    <!-- Autres méthodes de paiement -->
                </select>
            </div>

            <!-- Montant -->
            <div class="d-flex align-items-center mt-3">
                <label for="montant">Amount</label>
                <input class="form-control" type="number" step="0.01" name="montant" id="montant" placeholder="Enter the amount">
            </div>

         

            <!-- Description -->
            <div class="d-flex align-items-center mt-3">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description of the expense" rows="3"></textarea>
            </div>
            <div class="modal-bottom d-flex mt-4">
                <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                <input type="submit" value="Add Spent" class="btn btn-dark w-100 ml-2">
            </div>
        </form>
        <!-- Add Spent Form End -->


                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Modal Add Money End-->

            <!-- Modal Withdraw Start-->
            <div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="withdrawModalTitle" aria-hidden="true">
                <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
                    <div class="modal-content mt-auto">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="img/icons/ic-close.svg" alt="Icon Close"></span>
                        </button>
                        <div class="modal-middle">
                <div class="text-center change-image-theme-ib">
                    <img src="img/icons/assets-protection.svg" class="modal-icon" alt="Category Icon">
                    <img src="img/icons/assets-protection-dark-theme.svg" class="modal-icon dark-theme-image" alt="Category Icon">
                    <div class="modal-title">
                        ADD CATEGORY
                    </div>
                </div>
                <div class="modal-text">
                    Please fill in the details below to add or update a category.
                </div>

                <div class="devider-without-line"></div>

                <!-- Category Form Start -->
                <form class="category-form" method="post">
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="category-name">Category Name</label>
                        <input class="form-control" type="text" autocomplete="off" name="category-name" id="category-name" placeholder="Enter Category Name">
                    </div>
                    <!-- Form Field End --> 
                    
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="category-description">Description</label>
                        <input class="form-control" type="text" autocomplete="off" name="category-description" id="category-description" placeholder="Enter Category Description">
                    </div>
                    <!-- Form Field End -->
                    <div class="modal-bottom d-flex mt-4">
                        <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                        <input class="btn btn-dark w-100 ml-2" name="btn-category" value="Add Category" type="submit">
                    </div>
                </form>
                <!-- Category Form End -->
            </div>

            
        </div>
    </div>
</div>
<!-- Modal Withdraw End-->

<!-- Modal Send Money Start-->
<div class="modal fade" id="sendMoneyModal" tabindex="-1" role="dialog" aria-labelledby="sendMoneyModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
                <div class="text-center change-image-theme-ib">
                    <img src="img/icons/budget-balance.svg" class="modal-icon" alt="Payment Method Icon">
                    <img src="img/icons/budget-balance-dark-theme.svg" class="modal-icon dark-theme-image" alt="Payment Method Icon">
                    <div class="modal-title">
                        PAYMENT METHOD
                    </div>
                </div>
                <div class="modal-text">
                    Please fill in the details below to add or update a payment method.
                </div>

                <div class="devider-without-line"></div>

                <!-- Payment Method Form Start -->
                <form class="payment-method-form" method="post">
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="payment-method-name">Payment Method Name</label>
                        <input class="form-control" type="text" autocomplete="off" name="payment-method-name" id="payment-method-name" placeholder="Enter Payment Method Name">
                    </div>
                    <!-- Form Field End -->

                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="payment-method-description">Description</label>
                        <input class="form-control" type="text" autocomplete="off" name="payment-method-description" id="payment-method-description" placeholder="Enter Description">
                    </div>
                    <!-- Form Field End -->
                    <div class="modal-bottom d-flex mt-4">
                        <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                        <input class="btn btn-dark w-100 ml-2" name="methode" value="Add Method" type="submit">
                    </div>
                </form>
                <!-- Payment Method Form End -->
            </div>

           
        </div>
    </div>
</div>
<!-- Modal Send money End-->

<!-- Modal Exchange Money Start-->
<div class="modal fade" id="exchangeModal" tabindex="-1" role="dialog" aria-labelledby="exchangeModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
            <div class="text-center change-image-theme-ib">
                <img src="img/icons/budget-balance.svg" class="modal-icon" alt="Budget Icon">
                <img src="img/icons/budget-balance-dark-theme.svg" class="modal-icon dark-theme-image" alt="Budget Icon">
                <div class="modal-title">
                   ADD BUDGET
                </div>
            </div>
            <div class="modal-text">
                Please fill in the details below to add or update your budget.
            </div>

            <div class="devider-without-line"></div>

            <!-- Budget Form Start -->
            <form class="budget-form" method="post">
                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="budget-name">Budget Name</label>
                    <input class="form-control" type="text" autocomplete="off" name="budget-name" id="budget-name" placeholder="Enter Budget Name">
                </div>
                <!-- Form Field End -->

                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="budget-amount">Budget Amount</label>
                    <input class="form-control" type="number" autocomplete="off" name="budget-amount" id="budget-amount" placeholder="Enter Budget Amount" step="0.01">
                </div>
                <!-- Form Field End -->

                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="budget-date">Start Date</label>
                    <input class="form-control" type="date" name="budget-date" id="budget-date">
                </div>
                <!-- Form Field End -->

                <!-- Form Field Start: Category Selection -->
                <div class="d-flex align-items-center mt-3">
                <label for="categorie">Category</label>
                <select class="form-control" name="categorie_id" id="categorie">
                    <!-- Remplir dynamiquement avec les catégories disponibles -->
                    <?php foreach ($categories as $categorie) : ?>
                        <option value="<?= $categorie['id']; ?>"><?= $categorie['nom']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
                <!-- Form Field End -->
                
                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="budget-description">Description</label>
                    <input class="form-control" type="text" autocomplete="off" name="budget-description" id="budget-description" placeholder="Enter Description">
                </div>
                <!-- Form Field End -->
                <div class="modal-bottom d-flex mt-4">
                    <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                    <input class="btn btn-dark w-100 ml-2" value="Add Budget" type="submit">
                </div>
            </form>
            <!-- Budget Form End -->
        </div>

        </div>
    </div>
</div>
<!-- Modal Exchange Money End-->

<!-- Modal Support Start-->
<div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="supportModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
           
            <div class="modal-middle">
            <div class="text-center change-image-theme-ib">
                <img src="img/icons/Insurance_bill.svg" class="modal-icon" alt="Revenue Icon">
                <img src="img/icons/Insurance_bill-dark-theme.svg" class="modal-icon dark-theme-image" alt="Revenue Icon">
                <div class="modal-title">
                    ADD INCOME
                </div>
            </div>
            <div class="modal-text">
                Please fill in the details below to add or update your income.
            </div>

            <div class="devider-without-line"></div>

            <!-- Revenue Form Start -->
            <form class="revenue-form" method="post">
                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="revenue-source">Income Source</label>
                    <input class="form-control" type="text" autocomplete="off" name="revenue-source" id="revenue-source" placeholder="Enter Revenue Source">
                </div>
                <!-- Form Field End -->

                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="revenue-amount">Income Amount</label>
                    <input class="form-control" type="number" autocomplete="off" name="revenue-amount" id="revenue-amount" placeholder="Enter Revenue Amount" step="0.01">
                </div>
                <!-- Form Field End -->

                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="revenue-date">Date</label>
                    <input class="form-control" type="date" name="revenue-date" id="revenue-date">
                </div>
                <!-- Form Field End -->

                <!-- Form Field Start: Payment Method Selection -->
                <!-- Méthode de paiement -->
                <div class="d-flex align-items-center mt-3">
                    <label for="methode-paiement">Payment Method</label>
                    <select class="form-control" name="methode_paiement_id" id="methode-paiement">
                        <!-- Remplir dynamiquement avec les méthodes de paiement disponibles -->
                        <?php foreach ($methodesPaiement as $methode) : ?>
                            <option value="<?= $methode['id']; ?>"><?= $methode['nom']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Form Field End -->

                <!-- Form Field Start -->
                <div class="d-flex align-items-center">
                    <label for="revenue-description">Description</label>
                    <input class="form-control" type="text" autocomplete="off" name="revenue-description" id="revenue-description" placeholder="Enter Description">
                </div>
                <!-- Form Field End -->
                <div class="modal-bottom d-flex mt-4">
                    <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                    <input class="btn btn-dark w-100 ml-2" name="btn-income" value="Add Income" type="submit">
                </div>
            </form>
            <!-- Revenue Form End -->
        </div>

            
        </div>
    </div>
</div>
<!-- Modal Support End-->
<!-- Modals End -->

    <!-- Header Start -->
<div class="main-header w-100">
    <div class="top-row d-flex justify-content-between align-items-center" style="margin-top: -30px;">
    </div>
    <div class="middle-row d-flex justify-content-between w-100">
        <!-- Menu Icon Start -->
        <div class="menu-icon icon-open">
            <a href="menu.html">
                <img src="img/icons/menu-icon.svg" alt="Menu Icon">
                <img src="img/icons/menu-icon-dark-theme.svg" class="dark-theme-image" alt="Menu Icon">
            </a>
        </div>
        <!-- Menu Icon End -->

        <!-- FinHit Logo Start -->
        <div class="finhit-logo">
            <img class="img-responsive" src="img/Logo.png" style="width: 350px;" alt="FinHit Logo">
            <img class="img-responsive dark-theme-image" src="img/Logo-dark-theme.png" style="width: 350px;" alt="FinHit Logo">
        </div>
        <!-- FinHit Logo End -->

        <!-- Notification and User Block Start -->
        <div class="main-header_notification-user-block d-flex align-items-center">
            <a href="notifications.html" class="notification-block">
                <img src="img/icons/notification.svg" alt="Notification Image">
                <img src="img/icons/notification-dark-theme.svg" class="dark-theme-image" alt="Notification Image">
                <div class="notification-number">2</div>
            </a>
            <img src="img/user.svg" alt="User Image">
        </div>
        <!-- Notification and User Block End -->
    </div>
    <div class="bottom-row">

    </div>
</div>
<!-- Header End -->    

    <div class="main-content m-100">
      <!-- All Content Start -->
      <div class="content-padding">

        <!-- Total Balance Add Money Start -->
        <div class="d-flex justify-content-between align-items-end total-balance-add-money-block">
            <div class="total-balance-block">
                TOTAL BALANCE
                <div class="money-balance">
                    $ 5,354.30
                </div>
            </div>
            <div class="add-money-block text-center change-image-theme" data-toggle="modal" data-target="#balanceModal">
                <img src="img/icons/add-money-icon.svg" alt="Add Money Icon">
                <img src="img/icons/add-money-icon-dark-theme.svg" class="dark-theme-image" alt="Add Money Icon">
                Add Spent
            </div>
        </div>
        <!-- Total Balance Add Money End -->

        <!-- Popups Menu Block Start -->
        <div class="popups-menu-block d-flex justify-content-between align-items-center">
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#withdrawModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="img/icons/assets-protection.svg" alt="Withdraw Image">
                    <img src="img/icons/assets-protection-dark-theme.svg" class="dark-theme-image" alt="Withdraw Image">
                </div>
                Category
            </div>
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#sendMoneyModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="img/icons/budget-balance.svg" alt="Send Image">
                    <img src="img/icons/budget-balance-dark-theme.svg" class="dark-theme-image" alt="Send Image">
                </div>
                Method
            </div>
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#exchangeModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="img/icons/exchange.svg" alt="Exchange Image">
                    <img src="img/icons/exchange-dark-theme.svg" class="dark-theme-image" alt="Exchange Image">
                </div>
                Budget
            </div>
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#supportModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="img/icons/support.svg" alt="Support Image">
                    <img src="img/icons/support-dark-theme.svg" class="dark-theme-image" alt="Support Image">
                </div>
                Income
            </div>
        </div>
        <!-- Popups Menu Block End -->
        
        <!-- Devide Start -->
        
        <?php if(!empty($message)){
        ?>
        <p style="text-align: center;font-size: 10px;padding: 10px;margin-top:-5px;margin-bottom: -5px;background-color: green;font-weight: bold;color:white;"><?php echo $message; ?></p>
        <?php } ?>
        <!-- Devide End -->
        
        <!-- Charts Block Start -->
        <div class="charts-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    CHARTS
                </div>
                <a href="charts.html" class="text-underline">View All</a>
            </div>
            <div class="charts-wrapper">

                <!-- Chart Start-->
                <canvas id="popChart" width="600" height="400"></canvas>
                <!-- Chart End-->

            </div>
            <div class="charts-information d-flex">
                <div class="item-information income-information">
                    <div class="information-title d-flex align-items-center">
                        INCOME
                    </div>
                    <div class="information-money">
                        $785.50
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 38%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="income-chart.html" class="block-link"></a>
                </div>
                <div class="item-information expense-information">
                    <div class="information-title d-flex align-items-center">
                        SPENT
                    </div>
                    <div class="information-money">
                        $57.45
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 19%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="expense-chart.html" class="block-link"></a>
                </div>                
            </div>
            <div class="charts-information d-flex">
                <div class="item-information bills-information">
                    <div class="information-title d-flex align-items-center">
                        BUDGET
                    </div>
                    <div class="information-money">
                        $841.95
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="bills-chart.html" class="block-link"></a>
                </div>
                <div class="item-information saving-information">
                    <div class="information-title d-flex align-items-center">
                        BALANCE
                    </div>
                    <div class="information-money">
                        $3,545.57
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="savings-chart.html" class="block-link"></a>
                </div>
            </div>

        </div>
        <!-- Charts Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Transactions Block Start -->
        <div class="transactions-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    TRANSACTIONS
                </div>
                <a href="all-transactions.html" class="text-underline">View All</a>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                    <img src="img/transaction-img-1.jpg" class="border-50" alt="Transaction Image">
                </div>
                <div class="item-transaction_transaction-title">
                    George Amashukeli
                    <div class="transaction-type">
                        Transfer
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto negative">
                    -$189.99
                </div>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                    <img src="img/icons/pay-pal-icon.svg" alt="PalPal Icon">
                </div>
                <div class="item-transaction_transaction-title">
                    Digital Product
                    <div class="transaction-type">
                        PayPal
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto">
                    +$1035.45
                </div>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center change-image-theme">
                    <img src="img/icons/apple-pay-icon.svg" alt="Apple Pay Icon">
                    <img src="img/icons/apple-pay-icon-dark-theme.svg" class="dark-theme-image" alt="Apple Pay Icon">
                </div>
                <div class="item-transaction_transaction-title">
                    App Store Purchase
                    <div class="transaction-type">
                        Apple Pay
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto negative">
                    -$73.00
                </div>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                    <img src="img/transaction-img-2.jpg" class="border-50" alt="Transaction Image">
                </div>
                <div class="item-transaction_transaction-title">
                    Amanda Bernshtein
                    <div class="transaction-type">
                        Transfer
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto">
                    +$327.30
                </div>
            </div>
        </div>
        <!-- Transactions Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Latest News Block Start -->
        <div class="latest-news-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    LATEST NEWS
                </div>
                <a href="blog.html" class="text-underline">View All</a>
            </div>
            <div class="latest-news-carousel owl-carousel">
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="img/news-image-1.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                6.8K view -  379 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolores Sit Amet Concateur.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="img/news-image.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                386 view -  28 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolor Sit Amet.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="img/news-image-2.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                6.8K view -  379 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolores Sit Amet Concateur.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="img/news-image-3.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                6.8K view -  379 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolores Sit Amet Concateur.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest News Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Copyright Block Start -->
<div class="copyright-block copyright-big text-center">
    <div class="top-block">
        Copyright &copy; <span>Assengo Yooto</span> 2024. All Rights Reserved.
    </div>
</div>
<!-- Copyright Block End -->
        
      </div>
      <!-- All Content End -->
    </div>   
    
    <!-- Footer Start -->
<div class="main-footer w-100">
    <div class="top-row"></div>        
    <div class="bottom-row d-flex justify-content-between align-items-center">

        <!-- Menu Item Start -->
        <div class="footer-menu-item text-center item-overview">
            <a href="home.html" class="no-text-decoration">
                <img src="img/icons/overviews.svg" class="pasive" alt="Overview Icon">
                <img src="img/icons/overviews-active.svg" class="active" alt="Overview Active Icon">
                <div class="menu-title">
                    Overview
                </div>
            </a>
            <!-- Dark Theme Menu Item Start -->
            <a href="home.html" class="no-text-decoration dark-theme-menu-item">
                <img src="img/icons/overviews-dark-theme.svg" class="pasive" alt="Overview Icon">
                <img src="img/icons/overviews-active-dark-theme.svg" class="active" alt="Overview Active Icon">
                <div class="menu-title">
                    Overview
                </div>
            </a>
            <!-- Dark Theme Menu Item End -->
        </div>
        <!-- Menu Item End -->

        <!-- Menu Item Start -->
        <div class="footer-menu-item text-center item-pages">
            <a href="all-pages.html" class="no-text-decoration">
                <img src="img/icons/pages.svg" class="pasive" alt="Pages Icon">
                <img src="img/icons/pages-active.svg" class="active" alt="Pages Active Icon">
                <div class="menu-title">
                    Pages
                    <div class="notification-number">2</div>
                </div>
            </a>
            <!-- Dark Theme Menu Item Start -->
            <a href="all-pages.html" class="no-text-decoration dark-theme-menu-item">
                <img src="img/icons/pages-dark-theme.svg" class="pasive" alt="Pages Icon">
                <img src="img/icons/pages-active-dark-theme.svg" class="active" alt="Pages Active Icon">
                <div class="menu-title">
                    Pages
                    <div class="notification-number">2</div>
                </div>
            </a>
            <!-- Dark Theme Menu Item End -->
        </div>
        <!-- Menu Item End -->

        <!-- Menu Item Start -->
        <div class="footer-menu-item text-center item-components">
            <a href="components.html" class="no-text-decoration">
                <img src="img/icons/components.svg" class="pasive" alt="Components Icon">
                <img src="img/icons/components-active.svg" class="active" alt="Components Icon">
                <div class="menu-title">
                    Components
                </div>
            </a>
            <!-- Dark Theme Menu Item Start -->
            <a href="components.html" class="no-text-decoration dark-theme-menu-item">
                <img src="img/icons/components-dark-theme.svg" class="pasive" alt="Components Icon">
                <img src="img/icons/components-active-dark-theme.svg" class="active" alt="Components Icon">
                <div class="menu-title">
                    Components
                </div>
            </a>
            <!-- Dark Theme Menu Item End -->
        </div>
        <!-- Menu Item End -->

        <!-- Menu Item Start -->
        <div class="footer-menu-item text-center item-cards">
            <a href="my-cards.html" class="no-text-decoration">
                <img src="img/icons/card.svg" class="pasive" alt="My Cards Icon">
                <div class="menu-title">
                    My Cards
                </div>
            </a>
            <!-- Dark Theme Menu Item Start -->
            <a href="my-cards.html" class="no-text-decoration dark-theme-menu-item">
                <img src="img/icons/card-dark-theme.svg" class="pasive" alt="My Cards Icon">
                <div class="menu-title">
                    My Cards
                </div>
            </a>
            <!-- Dark Theme Menu Item End -->
        </div>
        <!-- Menu Item End -->

        <!-- Menu Item Start -->
        <div class="footer-menu-item text-center item-settings">
            <a href="settings.html" class="no-text-decoration">
                <img src="img/icons/settings.svg" alt="Settings Icon">
                <div class="menu-title">
                    Settings
                </div>
            </a>
            <!-- Dark Theme Menu Item Start -->
            <a href="settings.html" class="no-text-decoration dark-theme-menu-item">
                <img src="img/icons/settings-dark-theme.svg" class="pasive" alt="Settings Icon">
                <img src="img/icons/settings-active-dark-theme.svg" class="active" alt="Settings Active Icon">
                <div class="menu-title">
                    Settings
                </div>
            </a>
            <!-- Dark Theme Menu Item End -->
        </div>
        <!-- Menu Item End -->

    </div>
</div>
<!-- Footer End -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>