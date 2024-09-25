
<?php 

// La base de donnée

require_once '../App/Database/database.php';
// Initialiser la connexion à la base de données
$Database = new Database();
$db = $Database->getdbection();

$messageCreation = "";
// Inclure les fichiers nécessaires
require_once '../App/Controllers/ControllerUsers.php';
require_once '../App/Models/ModelUsers.php';


/**
 * Creation du compte
 * Verifier si le formulaire est soumis
 */


 if(isset($_POST['Inscription'])){

    if($_POST["password"] <> $_POST['confirm']){
        $messageCreation = "Password not identical";
    }else{
        // Créer une instance du contrôleur
        $utilisateurController = new UtilisateurController($db);

        // Exemple de création de compte
        $messageCreation = $utilisateurController->creationCompte($_POST['username'], $_POST['email'], $_POST['password']);

    }

   
 }



// // Exemple de connexion
// $messageConnexion = $utilisateurController->connexion("jean.dupont@example.com", "monMotDePasse");
// echo $messageConnexion; // Affiche le message de retour

// // Exemple de déconnexion
// $messageDeconnexion = $utilisateurController->deconnexion();
// echo $messageDeconnexion; // Affiche le message de retour

include_once('../view/register.php');
?>