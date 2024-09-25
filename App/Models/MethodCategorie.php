<?php
class Categorie {
    private $db;
    
    public $id;
    public $nom;
    public $description;

    // Constructeur avec connexion à la base de données
    public function __construct($db) {
        $this->db = $db;
    }

    // Créer une catégorie
    public function creerCategorie() {
        $query = "INSERT INTO categories (nom, description) VALUES (:nom, :description)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':description', $this->description);

        return $stmt->execute();
    }

    // Lire toutes les catégories
    public function getAllCategories() {
        $query = "SELECT * FROM categories";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mettre à jour une catégorie
    public function updateCategorie() {
        $query = "UPDATE categories SET nom = :nom, description = :description WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':description', $this->description);

        return $stmt->execute();
    }

    // Supprimer une catégorie
    public function deleteCategorie() {
        $query = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}
?>
