<?php

class UtilisateurController {
    private $utilisateur;

    public function __construct($db) {
        $this->utilisateur = new Utilisateur($db);
    }

    // Méthode pour créer un compte
    public function creationCompte($nom, $email, $mot_de_passe) {
        $this->utilisateur->nom = $nom;
        $this->utilisateur->email = $email;
        $this->utilisateur->mot_de_passe = $mot_de_passe;

        return $this->utilisateur->creerCompte();
    }

    // Méthode pour connecter un utilisateur
    public function connexion($email, $mot_de_passe) {
        $this->utilisateur->email = $email;
        $this->utilisateur->mot_de_passe = $mot_de_passe;

        return $this->utilisateur->connecter();
    }

    // Méthode pour déconnecter un utilisateur
    public function deconnexion() {
        return $this->utilisateur->deconnecter();
    }

    // Méthode pour obtenir les détails de l'utilisateur par ID
    public function obtenirUtilisateur($id) {
        return $this->utilisateur->getUtilisateurById($id);
    }
}
?>
