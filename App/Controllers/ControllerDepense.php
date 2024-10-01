<?php
class DepenseController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Enregistrer une dépense
    public function enregistrerDepense($utilisateur_id, $montant, $categorie_id, $methode_paiement_id, $description) {
        $depense = new Depense($this->db);
        
        // Assigner les valeurs
        $depense->utilisateur_id = $utilisateur_id;
        $depense->montant = $montant;
        $depense->categorie_id = $categorie_id;
        $depense->methode_paiement_id = $methode_paiement_id; // Nouveau champ
        $depense->description = $description; // Nouveau champ

        // Appeler la méthode pour créer la dépense
        return $depense->creerDepense();
    }

    // Afficher toutes les dépenses
    public function afficherDepenses() {
        $depense = new Depense($this->db);
        return $depense->getAllDepenses();
    }
}
?>
