<?php

class Depense {
    private $db;
    
    public $id;
    public $utilisateur_id;
    public $categorie_id;
    public $methode_paiement_id;
    public $montant;
    public $description;

    // Constructeur avec connexion à la base de données
    public function __construct($db) {
        $this->db = $db;
    }

    // Fonction pour obtenir le total des revenus pour une méthode de paiement
    private function getTotalRevenus($methode_paiement_id) {
        $query = "SELECT SUM(montant) as total_revenus 
                  FROM revenus 
                  WHERE utilisateur_id IN (
                      SELECT utilisateur_id 
                      FROM depenses 
                      WHERE methode_paiement_id = :methode_paiement_id)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':methode_paiement_id', $methode_paiement_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_revenus'] ?? 0;
    }

    // Fonction pour obtenir le total des dépenses pour une méthode de paiement
    private function getTotalDepenses($methode_paiement_id) {
        $query = "SELECT SUM(montant) as total_depenses 
                  FROM depenses 
                  WHERE methode_paiement_id = :methode_paiement_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':methode_paiement_id', $methode_paiement_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_depenses'] ?? 0;
    }

    // Vérifier si le solde est suffisant pour enregistrer une dépense
    private function isSoldeSuffisant($methode_paiement_id, $montant) {
        $totalRevenus = $this->getTotalRevenus($methode_paiement_id);
        $totalDepenses = $this->getTotalDepenses($methode_paiement_id);
        
        $soldeDisponible = $totalRevenus - $totalDepenses;

        return $soldeDisponible >= $montant;
    }

    // Fonction pour créer une dépense
    public function creerDepense() {
        if (!$this->isSoldeSuffisant($this->methode_paiement_id, $this->montant)) {
            return "Le solde de la méthode de paiement est insuffisant pour cette dépense.";
        }

        $query = "INSERT INTO depenses (utilisateur_id, categorie_id, methode_paiement_id, montant, description)
                  VALUES (:utilisateur_id, :categorie_id, :methode_paiement_id, :montant, :description)";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':methode_paiement_id', $this->methode_paiement_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':description', $this->description);
        
        if ($stmt->execute()) {
            return "Dépense enregistrée avec succès.";
        } else {
            return "Erreur lors de l'enregistrement de la dépense.";
        }
    }

    // Fonction pour récupérer toutes les dépenses
    public function getAllDepenses() {
        $query = "SELECT * FROM depenses";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fonction pour mettre à jour une dépense
    public function updateDepense() {
        if (!$this->isSoldeSuffisant($this->methode_paiement_id, $this->montant)) {
            return "Le solde de la méthode de paiement est insuffisant pour cette dépense.";
        }

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
        $stmt->bindParam(':description', $this->description);
        
        if ($stmt->execute()) {
            return "Dépense mise à jour avec succès.";
        } else {
            return "Erreur lors de la mise à jour de la dépense.";
        }
    }

    // Fonction pour supprimer une dépense
    public function deleteDepense() {
        $query = "DELETE FROM depenses WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        
        if ($stmt->execute()) {
            return "Dépense supprimée avec succès.";
        } else {
            return "Erreur lors de la suppression de la dépense.";
        }
    }

    // Fonction pour obtenir le montant total des dépenses
    public function getTotalDepensesMontant() {
        $query = "SELECT SUM(montant) as total FROM depenses WHERE utilisateur_id = :utilisateur_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'] ?? 0;
    }
}
?>
