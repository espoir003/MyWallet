<?php
class BudgetController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Créer un budget
    public function creerBudget($utilisateur_id, $montant, $categorie_id, $date_budget) {
        $budget = new Budget($this->db);
        $budget->utilisateur_id = $utilisateur_id;
        $budget->montant = $montant;
        $budget->categorie_id = $categorie_id;
        $budget->date_budget = $date_budget;
        return $budget->creerBudget();
    }

    // Lire tous les budgets
    public function afficherBudgets() {
        $budget = new Budget($this->db);
        return $budget->getAllBudgets();
    }

    // Mettre à jour un budget
    public function mettreAJourBudget($id, $utilisateur_id, $montant, $categorie_id, $date_budget) {
        $budget = new Budget($this->db);
        $budget->id = $id;
        $budget->utilisateur_id = $utilisateur_id;
        $budget->montant = $montant;
        $budget->categorie_id = $categorie_id;
        $budget->date_budget = $date_budget;
        return $budget->updateBudget();
    }

    // Supprimer un budget
    public function supprimerBudget($id) {
        $budget = new Budget($this->db);
        $budget->id = $id;
        return $budget->deleteBudget();
    }
}
?>
