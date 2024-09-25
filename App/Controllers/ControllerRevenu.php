<?php
class RevenuController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Créer un revenu
    public function creerRevenu($utilisateur_id,$source, $methode_paiement_id, $montant, $date_revenu, $description) {
        $revenu = new Revenu($this->db);
        $revenu->utilisateur_id = $utilisateur_id;
        $revenu->source = $source;
        $revenu->methode_paiement_id = $methode_paiement_id;
        $revenu->montant = $montant;
        $revenu->date_revenu = $date_revenu;
        $revenu->description = $description;
        return $revenu->creerRevenu();
    }

    // Lire tous les revenus
    public function afficherRevenus() {
        $revenu = new Revenu($this->db);
        return $revenu->getAllRevenus();
    }

    // Mettre à jour un revenu
    public function mettreAJourRevenu($id, $utilisateur_id, $categorie_id, $methode_paiement_id, $montant, $date_revenu, $description) {
        $revenu = new Revenu($this->db);
        $revenu->id = $id;
        $revenu->utilisateur_id = $utilisateur_id;
        $revenu->categorie_id = $categorie_id;
        $revenu->methode_paiement_id = $methode_paiement_id;
        $revenu->montant = $montant;
        $revenu->date_revenu = $date_revenu;
        $revenu->description = $description;
        return $revenu->updateRevenu();
    }

    // Supprimer un revenu
    public function supprimerRevenu($id) {
        $revenu = new Revenu($this->db);
        $revenu->id = $id;
        return $revenu->deleteRevenu();
    }
}
?>
