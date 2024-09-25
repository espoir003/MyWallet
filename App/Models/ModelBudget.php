<?php
class Budget {
    private $db;

    public $id;
    public $utilisateur_id;
    public $montant;
    public $categorie_id;
    public $date_budget;

    public function __construct($db) {
        $this->db = $db;
    }

    // Créer un budget
    public function creerBudget() {
        $query = "INSERT INTO budgets (utilisateur_id, montant, categorie_id, date_budget)
                  VALUES (:utilisateur_id, :montant, :categorie_id, :date_budget)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':date_budget', $this->date_budget);

        return $stmt->execute();
    }

    // Lire tous les budgets
    public function getAllBudgets() {
        $query = "SELECT * FROM budgets";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mettre à jour un budget
    public function updateBudget() {
        $query = "UPDATE budgets 
                  SET utilisateur_id = :utilisateur_id, montant = :montant, categorie_id = :categorie_id, date_budget = :date_budget 
                  WHERE id = :id";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':date_budget', $this->date_budget);

        return $stmt->execute();
    }

    // Supprimer un budget
    public function deleteBudget() {
        $query = "DELETE FROM budgets WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}
?>
