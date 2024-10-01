<?php


session_start();

/**
 * Verification si l'utilisateur est connecté
 */
if(!isset($_SESSION['id'])){
    header("location: login");
}

/**
 * Database Initialisation et importation
 */
//Importation
 require_once '../App/Database/database.php';
// L'initialisation
$Database = new Database();
$db = $Database->getdbection();

//Importation de Model Budget
require_once '../App/Models/ModelBudget.php';
// Importation de Controller Budget
require_once '../App/Controllers/ControllerBudget.php';

// Récupérer les différentes données
$budgetController = new BudgetController( $db);

// Obtenir les budgets de l'utilisateur
$budgets = $budgetController->getBudgets($_SESSION['id']);





include_once('../view/income.php');


?>