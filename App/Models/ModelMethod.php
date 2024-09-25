<?php
class MethodePaiement {
    private $db;

    public $id;
    public $nom;
    public $description;

    public function __construct($db) {
        $this->db = $db;
    }

    // Créer une méthode de paiement
    public function creerMethodePaiement() {
        $query = "INSERT INTO methodes_paiement (nom, description) VALUES (:nom, :description)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':description', $this->description);

        return $stmt->execute();
    }

    // Lire toutes les méthodes de paiement
    public function getAllMethodesPaiement() {
        $query = "SELECT * FROM methodes_paiement";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mettre à jour une méthode de paiement
    public function updateMethodePaiement() {
        $query = "UPDATE methodes_paiement SET nom = :nom, description = :description WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':description', $this->description);

        return $stmt->execute();
    }

    // Supprimer une méthode de paiement
    public function deleteMethodePaiement() {
        $query = "DELETE FROM methodes_paiement WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}
?>
