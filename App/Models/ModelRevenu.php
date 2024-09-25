<?php
class Revenu {
    private $db;

    public $id;
    public $utilisateur_id;
    public $methode_paiement_id;
    public $source;
    public $categorie_id;
    public $montant;
    public $date_revenu;
    public $description;

    public function __construct($db) {
        $this->db = $db;
    }

    // Créer un revenu
    public function creerRevenu() {
        $query = "INSERT INTO revenus (utilisateur_id, source, methode_paiement_id, montant, date_revenu, description)
                  VALUES (:utilisateur_id, :source, :methode_paiement_id, :montant, :date_revenu, :description)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':source', $this->source);
        $stmt->bindParam(':methode_paiement_id', $this->methode_paiement_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':date_revenu', $this->date_revenu);
        $stmt->bindParam(':description', $this->description);

        return $stmt->execute();
    }

    // Lire tous les revenus
    public function getAllRevenus() {
        $query = "SELECT * FROM revenus";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mettre à jour un revenu
    public function updateRevenu() {
        $query = "UPDATE revenus 
                  SET utilisateur_id = :utilisateur_id, categorie_id = :categorie_id, methode_paiement_id = :methode_paiement_id, 
                      montant = :montant, date_revenu = :date_revenu, description = :description 
                  WHERE id = :id";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':utilisateur_id', $this->utilisateur_id);
        $stmt->bindParam(':categorie_id', $this->categorie_id);
        $stmt->bindParam(':methode_paiement_id', $this->methode_paiement_id);
        $stmt->bindParam(':montant', $this->montant);
        $stmt->bindParam(':date_revenu', $this->date_revenu);
        $stmt->bindParam(':description', $this->description);

        return $stmt->execute();
    }

    // Supprimer un revenu
    public function deleteRevenu() {
        $query = "DELETE FROM revenus WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}
?>
