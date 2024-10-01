<?php 
session_start();

/**
 * Verifer si l'utilisateur ne pas connecter
 */

 if(!isset($_SESSION['id'])){
    header('location: login');
 }

/**
 * Variable qui affiche le message
 */

 $message = "";
// ---------------------------------------Les imports------------------------------------------//
/**
 * La base de donnée
 */
require_once '../App/Database/database.php';
// Initialiser la connexion à la base de données
$Database = new Database();
$db = $Database->getdbection();

/**
 * Importation de Models
 */
require_once '../App/Models/ModelDepense.php';
require_once '../App/Models/MethodCategorie.php';
require_once '../App/Models/ModelBudget.php';
require_once '../App/Models/ModelMethod.php';
require_once '../App/Models/ModelRevenu.php';
require_once '../App/Models/ModelUsers.php';
require_once '../App/Models/ModelSolde.php';

/**
 * Importation de Controllers
 */
require_once '../App/Controllers/ControllerDepense.php';
require_once '../App/Controllers/ControllerCategorie.php';
require_once '../App/Controllers/ControllerBudget.php';
require_once '../App/Controllers/ControllerMethod.php';
require_once '../App/Controllers/ControllerRevenu.php';
require_once '../App/Controllers/ControllerUsers.php';
require_once '../App/Controllers/ControllerSolde.php';

/**
 * Recuperation de données
 */
//Affichée les categorie
$categorieController = new CategorieController($db);
$categories = $categorieController->afficherCategories();
//Affichée les methodes de paiement
$methodePaiementController = new MethodePaiementController($db);
$methodesPaiement = $methodePaiementController->afficherMethodesPaiement();


// Récupérer les différentes données
$budgetController = new BudgetController( $db);

$SoldeController = new SoldeController($db);
$totalRevenus = $SoldeController->afficherTotalRevenus($_SESSION['id']);
$totalDepenses = $SoldeController->afficherTotalDepenses($_SESSION['id']);
$totalBudgets = $SoldeController->afficherTotalBudgets($_SESSION['id']);
$soldeRestant = $SoldeController->afficherSoldeRestant($_SESSION['id']);
$soldeRevenusMoinsBudget = $SoldeController->afficherSoldeRevenusMoinsBudget($_SESSION['id']);
// Obtenir les budgets de l'utilisateur
$budgets = $budgetController->getBudgets($_SESSION['id']);


/**
 * Concerne les methodes de paiements
 */
if(isset($_POST['methode'])){

    $method = new MethodePaiementController($db);
    $method->creerMethodePaiement($_POST['payment-method-name'], $_POST['payment-method-description']); // Appel de la méthode pour créer la methode de paiement
    header("location: dashboard.php");
 }



 /**
 * Concerne les categories
 */
if(isset($_POST['btn-category'])){

    $category = new CategorieController($db);
    $category->creerCategorie($_POST['category-name'], $_POST['category-description']); // Appel de la méthode pour créer le categorie
    header("location: dashboard.php");
 }

 /**
 * Concerne les Budget
 */
if(isset($_POST['budget-amount'])){
    $budget = new BudgetController($db);
    $_SESSION['message'] = $budget->creerBudget($_SESSION['id'],$_POST['budget-amount'],$_POST['categorie_id'],date('d/m/Y'));  // Appel de la méthode pour créer le budget
    if(strlen($_SESSION['message']) <> "53"){
      $_SESSION['message'] = "";
    }
    header("location: dashboard");
    
 }
 /**
 * Concerne les revenus
 */
if(isset($_POST['btn-income'])){

    $income = new RevenuController($db);
    $income->creerRevenu($_SESSION['id'],$_POST['revenue-source'],$_POST['methode_paiement_id'],$_POST['revenue-amount'],$_POST['revenue-date'],$_POST['revenue-description']); // Appel de la méthode pour créer le revenus
    header("location: dashboard.php");
 }

 /**
 * Concerne les depenses
 */
if(isset($_POST['Add-Spent'])){

    $depense = new DepenseController($db);
    $_SESSION['message'] = $depense->enregistrerDepense($_SESSION['id'], $_POST['montant'],$_POST['categorie_id'],$_POST['methode_paiement_id'],$_POST['description']);    // Appel de la méthode pour créer les depenses
    
    if(strlen($_SESSION['message']) <> "47"){
      $_SESSION['message'] = "";
    }

    

    header("location: dashboard.php");
 }














// /**
//  * Verifier si le formulaire depense est soumis
//  */

//  if(isset($_POST['depense'])){

//     $depense = new Depense($db);

//     $depense->utilisateur_id = $_SESSION['id']; // Assigner l'utilisateur
//     $depense->categorie_id = $_POST['categorie_id']; // Assigner la catégorie
//     $depense->methode_paiement_id = $_POST['methode_paiement_id']; // Assigner la méthode de paiement
//     $depense->montant = $_POST['montant']; // Assigner le montant
//     $depense->description = $_POST['description']; // Assigner une description
    
//     $message = $depense->creerDepense(); // Appel de la méthode pour créer la dépense

//  }


include_once('../view/dashboard.php');

?>