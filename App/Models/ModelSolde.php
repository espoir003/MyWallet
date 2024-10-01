<?php
class Solde {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Fonction pour obtenir le total des revenus
    public function getTotalRevenus($utilisateur_id) {
        $query = "SELECT SUM(montant) as total_revenus FROM revenus WHERE utilisateur_id = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_revenus'] ?? 0;
    }

    // Fonction pour obtenir le total des dépenses
    public function getTotalDepenses($utilisateur_id) {
        $query = "SELECT SUM(montant) as total_depenses FROM depenses WHERE utilisateur_id = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_depenses'] ?? 0;
    }

    // Fonction pour obtenir le total des budgets
    
    public function getTotalBudgets($utilisateur_id) {
        $query = "SELECT SUM(montant_total) as total_budgets FROM budgets WHERE utilisateur_id = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_budgets'] ?? 0;
    }

    // Fonction pour calculer le solde : revenus - budget
    public function getSoldeRevenusMoinsBudget($utilisateur_id) {
        $totalRevenus = $this->getTotalRevenus($utilisateur_id);
        $totalBudgets = $this->getTotalBudgets($utilisateur_id);
        
        // Calcul du solde (revenus - budget)
        $solde = $totalRevenus - $totalBudgets;
        
        return $solde;
    }

    // Fonction pour calculer le solde restant : (revenus - dépenses)
    public function getSoldeRestant($utilisateur_id) {
        $totalRevenus = $this->getTotalRevenus($utilisateur_id);
        $totalDepenses = $this->getTotalDepenses($utilisateur_id);
        
        // Calcul du solde restant
        $soldeRestant = $totalRevenus - $totalDepenses;

        return $soldeRestant;
    }
}
?>
