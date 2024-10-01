<?php
class Depense {
    private $db;

    public $id;
    public $utilisateur_id;
    public $categorie_id;
    public $methode_paiement_id; // Nouveau champ
    public $montant;
    public $date_depense;
    public $description; // Nouveau champ

    public function __construct($db) {
        $this->db = $db;
    }

    // Vérifier si le budget lié à la catégorie est suffisant
    public function isBudgetSuffisant($categorie_id, $montantDepense) {
        // Obtenir le total des budgets pour la catégorie
        $query = "SELECT SUM(montant_total) as total_budget FROM budgets WHERE categorie_id = :categorie_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':categorie_id', $categorie_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $totalBudget = $result['total_budget'] ?? 0;

        // Obtenir le total des dépenses pour la catégorie
        $query = "SELECT SUM(montant) as total_depenses FROM depenses WHERE categorie_id = :categorie_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':categorie_id', $categorie_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $totalDepenses = $result['total_depenses'] ?? 0;

        // Calculer le budget restant
        $budgetRestant = $totalBudget - $totalDepenses;

        // Comparer avec le montant de la dépense
        return $budgetRestant >= $montantDepense;
    }

    // Créer une dépense avec vérification du budget
    public function creerDepense() {
        // Vérifier si le budget est suffisant
        if (!$this->isBudgetSuffisant($this->categorie_id, $this->montant)) {
            return "Le budget pour cette categorie est insuffisant.";
        }

        // Insérer la dépense si le budget est suffisant
        $query = "INSERT INTO depenses (utilisateur_id, categorie_id, methode_paiement_id, montant, description)
                  VALUES (:utilisateur_id, :categorie_id, :methode_paiement_id, :montant, :description)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':methode_paiement_id', $this->methode_paiement_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':description', $this->description);

        if ($stmt->execute()) {
            return "Dépense créée avec succès.";
        } else {
            return "Erreur lors de la création de la dépense.";
        }
    }

    // Lire toutes les dépenses
    public function getAllDepenses() {
        $query = "SELECT * FROM depenses";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mettre à jour une dépense
    public function updateDepense() {
        $query = "UPDATE depenses 
                  SET utilisateur_id = :utilisateur_id, categorie_id = :categorie_id, methode_paiement_id = :methode_paiement_id, 
                      montant = :montant, date_depense = :date_depense, description = :description 
                  WHERE id = :id";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':methode_paiement_id', $this->methode_paiement_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':date_depense', $this->date_depense);
        $stmt->bindParam(':description', $this->description);

        return $stmt->execute();
    }

    // Supprimer une dépense
    public function deleteDepense() {
        $query = "DELETE FROM depenses WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}
?>
