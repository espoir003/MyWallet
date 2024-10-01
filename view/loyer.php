<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/main.min.css" type="text/css" media="screen">
  <link rel="shortcut icon" href="#">
  <title>MyWallet | Income</title>
  <style>
   /* Structure générale */
body {
    font-family: Arial, sans-serif;
}

.sub-pages-top-content-section {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    margin-bottom: 100px;
    margin-top: 30px;
    height: 120px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.sub-pages-top-content-section .title {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.sub-pages-top-content-section .slogan {
    font-size: 1rem;
    color: #666;
}

/* Formulaire de filtres */
.form-group input, .form-group select {
    width: 100%;
    padding: 8px;
    border: 1px solid seashell;
    border-radius: 8px;
    background-color: #fff;
    font-size: 0.9rem;
}

.form-group {
    margin-bottom: 15px; /* Ajout d'espacement sous chaque champ */
}


.transactions-block{
   /* margin-top: 52px;
   padding-top: 10px; */
/* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
    max-width: 100%;
   
}

.item-transaction {
    display: flex;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    transition: background-color 0.3s;
}

.item-transaction:hover {
    background-color: #f7f7f7;
}

.item-transaction img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.item-transaction_transaction-title {
    flex: 1;
    margin-left: 15px;
}

.item-transaction .transaction-type {
    font-size: 0.85rem;
    color: #888;
}

.item-transaction_transaction-amount {
    font-size: 1rem;
    font-weight: bold;
    color: #f00;
}

/* Divider */
.divider-without-line {
    height: 1px;
    background-color: #ddd;
    margin: 20px 0;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .form-group {
        margin-bottom: 15px;
    }
    
    .sub-pages-top-content-section {
        text-align: center;
    }

    .item-transaction img {
        width: 40px;
        height: 40px;
    }

    .item-transaction_transaction-title {
        font-size: 0.9rem;
    }
}

  </style>
</head>

<body class="light-grey all-pages without-active">

    <!-- Header Start -->
    <?php include_once('../import/header.php'); ?>
    <!-- Header End -->

    <!-- Content Title & Slogan Start -->
    <div class="sub-pages-top-content-section top-box-padding">
        <div class="title" style="font-size: 15px;">All income</div>
        <div class="slogan" style="font-size: 12px;">This page allows you to view all your income</div>
        <div class="d-flex align-items-center">
            <div class="information-block_title d-flex justify-content-between align-items-center w-100">
                <!-- Filtres sur une ligne -->
                <form class="d-flex align-items-center justify-content-between w-100">
                    <!-- Filtre par Date -->
                    <div class="form-group mr-2" style="flex: 1;">
                        <input type="date" id="filterDate" class="form-control form-control-sm" name="date" 
                               placeholder="Date">
                    </div>
                    <!-- Filtre par Date -->
                    <div class="form-group mr-2" style="flex: 1;">
                        <input type="date" id="filterDate" class="form-control form-control-sm" name="date" 
                               placeholder="Date">
                    </div>

                    <!-- Filtre par Méthode de Paiement -->
                    <div class="form-group" style="flex: 1;">
                        <select id="methodPaiement" class="form-control form-control-sm" name="methodPaiement">
                            <option value="">Méthode de Paiement</option>
                            <option value="carte">Carte Bancaire</option>
                            <option value="paypal">PayPal</option>
                            <option value="cash">Espèces</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Content Title & Slogan End -->

    <!-- Main Content Start -->
    <div class="main-content p-100">
        <div class="content-padding">

            <!-- Transactions Block Start -->
            <div class="transactions-block information-block one" style="margin-top: 60px;">
                <!-- Transactions list -->
                <a href="details" class="item-transaction d-flex align-items-center mt-2">
                    <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                        <img src="img/budget.png" class="border-50" alt="Transaction Image">
                    </div>
                    <div class="item-transaction_transaction-title">
                        George Amashukeli
                        <div class="transaction-type">Transfer</div>
                    </div>
                    <div class="item-transaction_transaction-amount ml-auto negative">-$189.99</div>
                </a>
                <!-- Répétition des transactions -->
               
            </div>
            <!-- Transactions Block End -->
            <!-- Transactions Block Start -->
            <div class="transactions-block information-block">
                <!-- Transactions list -->
                <a href="details" class="item-transaction d-flex align-items-center mt-2">
                    <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                        <img src="img/budget.png" class="border-50" alt="Transaction Image">
                    </div>
                    <div class="item-transaction_transaction-title">
                        George Amashukeli
                        <div class="transaction-type">Transfer</div>
                    </div>
                    <div class="item-transaction_transaction-amount ml-auto negative">-$189.99</div>
                </a>
                <!-- Répétition des transactions -->
               
            </div>
            <!-- Transactions Block End -->
            <!-- Transactions Block Start -->
            <div class="transactions-block information-block">
                <!-- Transactions list -->
                <a href="details" class="item-transaction d-flex align-items-center mt-2">
                    <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                        <img src="img/budget.png" class="border-50" alt="Transaction Image">
                    </div>
                    <div class="item-transaction_transaction-title">
                        George Amashukeli
                        <div class="transaction-type">Transfer</div>
                    </div>
                    <div class="item-transaction_transaction-amount ml-auto negative">-$189.99</div>
                </a>
                <!-- Répétition des transactions -->
               
            </div>
            <!-- Transactions Block End -->
            <!-- Transactions Block Start -->
            <div class="transactions-block information-block">
                <!-- Transactions list -->
                <a href="details" class="item-transaction d-flex align-items-center mt-2">
                    <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                        <img src="img/budget.png" class="border-50" alt="Transaction Image">
                    </div>
                    <div class="item-transaction_transaction-title">
                        George Amashukeli
                        <div class="transaction-type">Transfer</div>
                    </div>
                    <div class="item-transaction_transaction-amount ml-auto negative">-$189.99</div>
                </a>
                <!-- Répétition des transactions -->
               
            </div>
            <!-- Transactions Block End -->
            <!-- Transactions Block Start -->
            <div class="transactions-block information-block">
                <!-- Transactions list -->
                <a href="details" class="item-transaction d-flex align-items-center mt-2">
                    <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                        <img src="img/budget.png" class="border-50" alt="Transaction Image">
                    </div>
                    <div class="item-transaction_transaction-title">
                        George Amashukeli
                        <div class="transaction-type">Transfer</div>
                    </div>
                    <div class="item-transaction_transaction-amount ml-auto negative">-$189.99</div>
                </a>
                <!-- Répétition des transactions -->
               
            </div>
            <!-- Transactions Block End -->
            <!-- Transactions Block Start -->
            <div class="transactions-block information-block">
                <!-- Transactions list -->
                <a href="details" class="item-transaction d-flex align-items-center mt-2">
                    <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                        <img src="img/budget.png" class="border-50" alt="Transaction Image">
                    </div>
                    <div class="item-transaction_transaction-title">
                        George Amashukeli
                        <div class="transaction-type">Transfer</div>
                    </div>
                    <div class="item-transaction_transaction-amount ml-auto negative">-$189.99</div>
                </a>
                <!-- Répétition des transactions -->
               
            </div>
            <!-- Transactions Block End -->
            


        </div>
    </div>
    <!-- Main Content End -->

    <!-- Footer Start -->
    <?php include_once('../import/footer.php'); ?>
    <!-- Footer End -->

    <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>
