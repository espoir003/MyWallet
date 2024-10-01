<?php
class SoldeController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Récupérer le solde restant pour l'utilisateur
    public function afficherSoldeRestant($utilisateur_id) {
        $solde = new Solde($this->db);

        // Appeler la méthode du modèle pour obtenir le solde restant
        $soldeRestant = $solde->getSoldeRestant($utilisateur_id);

        // Retourner le solde restant pour l'afficher
        return $soldeRestant;
    }

    // Récupérer le total des revenus
    public function afficherTotalRevenus($utilisateur_id) {
        $solde = new Solde($this->db);

        // Appeler la méthode du modèle pour obtenir le total des revenus
        $totalRevenus = $solde->getTotalRevenus($utilisateur_id);

        return $totalRevenus;
    }

    // Récupérer le total des dépenses
    public function afficherTotalDepenses($utilisateur_id) {
        $solde = new Solde($this->db);

        // Appeler la méthode du modèle pour obtenir le total des dépenses
        $totalDepenses = $solde->getTotalDepenses($utilisateur_id);

        return $totalDepenses;
    }

    // Récupérer le total des budgets
    public function afficherTotalBudgets($utilisateur_id) {
        $solde = new Solde($this->db);

        // Appeler la méthode du modèle pour obtenir le total des budgets
        $totalBudgets = $solde->getTotalBudgets($utilisateur_id);

        return $totalBudgets;
    }

    // Récupérer le solde revenus - budget
    public function afficherSoldeRevenusMoinsBudget($utilisateur_id) {
        $solde = new Solde($this->db);

        // Appeler la méthode du modèle pour calculer le solde revenus - budgets
        $soldeRevenusMoinsBudget = $solde->getSoldeRevenusMoinsBudget($utilisateur_id);

        return $soldeRevenusMoinsBudget;
    }
}
?>
