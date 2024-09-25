<?php

class DepenseController {
    private $depense;

    public function __construct($db) {
        $this->depense = new Depense($db);
    }

    // Créer une nouvelle dépense
    public function creerDepense() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->depense->utilisateur_id = $_POST['utilisateur_id'];
            $this->depense->categorie_id = $_POST['categorie_id'];
            $this->depense->methode_paiement_id = $_POST['methode_paiement_id'];
            $this->depense->montant = $_POST['montant'];
            $this->depense->date_depense = $_POST['date_depense'];
            $this->depense->description = $_POST['description'];

            $result = $this->depense->creerDepense();
            echo $result;
        }
    }

    // Afficher toutes les dépenses
    public function afficherDepenses() {
        $depenses = $this->depense->getAllDepenses();
        foreach ($depenses as $depense) {
            echo "ID: {$depense['id']} | Montant: {$depense['montant']} | Description: {$depense['description']}<br>";
        }
    }

    // Mettre à jour une dépense
    public function modifierDepense() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->depense->id = $_POST['id'];
            $this->depense->utilisateur_id = $_POST['utilisateur_id'];
            $this->depense->categorie_id = $_POST['categorie_id'];
            $this->depense->methode_paiement_id = $_POST['methode_paiement_id'];
            $this->depense->montant = $_POST['montant'];
            $this->depense->date_depense = $_POST['date_depense'];
            $this->depense->description = $_POST['description'];

            $result = $this->depense->updateDepense();
            echo $result;
        }
    }

    // Supprimer une dépense
    public function supprimerDepense() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->depense->id = $_POST['id'];

            $result = $this->depense->deleteDepense();
            echo $result;
        }
    }

    // Afficher le montant total des dépenses
    public function afficherTotalDepenses() {
        $this->depense->utilisateur_id = $_GET['utilisateur_id']; // Assurez-vous que l'utilisateur_id est fourni via GET
        $total = $this->depense->getTotalDepensesMontant();
        echo "Montant total des dépenses: " . $total;
    }
}
?>
