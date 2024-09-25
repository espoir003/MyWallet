<?php
class MethodePaiementController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Créer une méthode de paiement
    public function creerMethodePaiement($nom, $description) {
        $methode = new MethodePaiement($this->db);
        $methode->nom = $nom;
        $methode->description = $description;
        return $methode->creerMethodePaiement();
    }

    // Lire toutes les méthodes de paiement
    public function afficherMethodesPaiement() {
        $methode = new MethodePaiement($this->db);
        return $methode->getAllMethodesPaiement();
    }

    // Mettre à jour une méthode de paiement
    public function mettreAJourMethodePaiement($id, $nom, $description) {
        $methode = new MethodePaiement($this->db);
        $methode->id = $id;
        $methode->nom = $nom;
        $methode->description = $description;
        return $methode->updateMethodePaiement();
    }

    // Supprimer une méthode de paiement
    public function supprimerMethodePaiement($id) {
        $methode = new MethodePaiement($this->db);
        $methode->id = $id;
        return $methode->deleteMethodePaiement();
    }
}
?>
