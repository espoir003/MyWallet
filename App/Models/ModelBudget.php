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

    // Fonction pour obtenir le total des revenus
    private function getTotalRevenus($utilisateur_id) {
        $query = "SELECT SUM(montant) as total_revenus FROM revenus WHERE utilisateur_id = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_revenus'] ?? 0;
    }

    // Fonction pour obtenir le total des dépenses
    private function getTotalDepenses($utilisateur_id) {
        $query = "SELECT SUM(montant) as total_depenses FROM depenses WHERE utilisateur_id = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_depenses'] ?? 0;
    }

    // Vérifier si le solde est suffisant pour fixer un budget
    private function isSoldeSuffisant($utilisateur_id, $montantBudget) {
        $totalRevenus = $this->getTotalRevenus($utilisateur_id);
        $totalDepenses = $this->getTotalDepenses($utilisateur_id);
        
        // Calculer le solde disponible
        $soldeDisponible = $totalRevenus - $totalDepenses;

        // Comparer avec le montant du budget à ajouter
        return $soldeDisponible >= $montantBudget;
    }

    // Créer un budget avec vérification du solde
    public function creerBudget() {
        // Vérifier si le solde est suffisant
        if (!$this->isSoldeSuffisant($this->utilisateur_id, $this->montant)) {
            return "Le solde est insuffisant pour mettre a jour ce budget";
        }

        // Insérer le budget si le solde est suffisant
        $query = "INSERT INTO budgets (utilisateur_id, montant_total, categorie_id, date_creation)
                  VALUES (:utilisateur_id, :montant, :categorie_id, :date_budget)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':date_budget', $this->date_budget);

        if ($stmt->execute()) {
            return "Budget créé avec succès.";
        } else {
            return "Erreur lors de la création du budget.";
        }
    }

    // Lire tous les budgets avec le nom de la catégorie, la description et la somme des dépenses par catégorie
    public function getAllBudgets($utilisateur_id) {
        // Requête SQL pour obtenir les budgets et les dépenses par catégorie
        $query = "SELECT c.id AS categorie_id, 
                         c.nom AS nom_categorie, 
                         c.description AS description_categorie, 
                         IFNULL(SUM(b.montant_total), 0) AS total_budget, 
                         IFNULL((SELECT SUM(d.montant) 
                                 FROM depenses d 
                                 WHERE d.categorie_id = c.id 
                                 AND d.utilisateur_id = :utilisateur_id), 0) AS total_depenses,
                         (IFNULL(SUM(b.montant_total), 0) - 
                          IFNULL((SELECT SUM(d.montant) 
                                 FROM depenses d 
                                 WHERE d.categorie_id = c.id 
                                 AND d.utilisateur_id = :utilisateur_id), 0)) AS solde_categorie
                  FROM budgets b
                  JOIN categories c ON b.categorie_id = c.id
                  WHERE b.utilisateur_id = :utilisateur_id
                  GROUP BY c.id, c.nom, c.description";
    
        // Préparation et exécution de la requête
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $utilisateur_id);
        $stmt->execute();
        
        // Retourner tous les résultats sous forme de tableau associatif
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
