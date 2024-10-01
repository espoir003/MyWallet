<?php
class BudgetController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Créer un budget avec vérification du solde
    public function creerBudget($utilisateur_id, $montant, $categorie_id, $date_budget) {
        $budget = new Budget($this->db);
        $budget->utilisateur_id = $utilisateur_id;
        $budget->montant = $montant;
        $budget->categorie_id = $categorie_id;
        $budget->date_budget = $date_budget;

        // Appeler la méthode du modèle pour créer un budget
        return $budget->creerBudget(); // Retourne directement la réponse du modèle
    }


    // Méthode pour obtenir les budgets de l'utilisateur
    public function getBudgets($utilisateur_id) {
        $budget = new Budget($this->db);
        return $budget->getAllBudgets($utilisateur_id);
    }

    // Mettre à jour un budget
    public function updateBudget($id, $utilisateur_id, $montant, $categorie_id, $date_budget) {
        $budget = new Budget($this->db);
        $budget->id = $id;
        $budget->utilisateur_id = $utilisateur_id;
        $budget->montant = $montant;
        $budget->categorie_id = $categorie_id;
        $budget->date_budget = $date_budget;

        // Appeler la méthode du modèle pour mettre à jour un budget
        return $budget->updateBudget(); // Retourne directement la réponse du modèle
    }

    // Supprimer un budget
    public function deleteBudget($id) {
        $budget = new Budget($this->db);
        $budget->id = $id;

        // Appeler la méthode du modèle pour supprimer un budget
        return $budget->deleteBudget(); // Retourne directement la réponse du modèle
    }
}
?>
