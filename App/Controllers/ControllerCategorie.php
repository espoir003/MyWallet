<?php
class CategorieController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Fonction pour créer une nouvelle catégorie
    public function creerCategorie($nom, $description) {
        $categorie = new Categorie($this->db);
        $categorie->nom = $nom;
        $categorie->description = $description;
        return $categorie->creerCategorie();
    }

    // Afficher toutes les catégories
    public function afficherCategories() {
        $categorie = new Categorie($this->db);
        return $categorie->getAllCategories();
    }

    // Mettre à jour une catégorie
    public function mettreAJourCategorie($id, $nom, $description) {
        $categorie = new Categorie($this->db);
        $categorie->id = $id;
        $categorie->nom = $nom;
        $categorie->description = $description;
        return $categorie->updateCategorie();
    }

    // Supprimer une catégorie
    public function supprimerCategorie($id) {
        $categorie = new Categorie($this->db);
        $categorie->id = $id;
        return $categorie->deleteCategorie();
    }
}
?>
