<?php

class Utilisateur {
    private $db;

    public $id;
    public $nom;
    public $email;
    public $mot_de_passe;

    // Constructeur avec connexion à la base de données
    public function __construct($db) {
        $this->db = $db;
    }

    // Fonction pour créer un nouvel utilisateur
    public function creerCompte() {
        // Hash du mot de passe
        $hashedPassword = password_hash($this->mot_de_passe, PASSWORD_DEFAULT);

        $query = "INSERT INTO utilisateurs (nom, email, mot_de_passe) 
                  VALUES (:nom, :email, :mot_de_passe)";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':mot_de_passe', $hashedPassword);

        if ($stmt->execute()) {
            return "Compte créé avec succès.";
        } else {
            return "Erreur lors de la création du compte.";
        }
    }

    // Fonction pour connecter un utilisateur
    public function connecter() {
        $query = "SELECT * FROM utilisateurs WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // Vérification du mot de passe
            if (password_verify($this->mot_de_passe, $result['mot_de_passe'])) {
                // Enregistrement des données de l'utilisateur dans la session
                session_start();
                $_SESSION['id'] = $result['id'];
                $_SESSION['nom'] = $result['nom'];
                return "Login";
            } else {
                return "Mot de passe incorrect.";
            }
        } else {
            return "Aucun utilisateur trouvé avec cet email.";
        }
    }

    // Fonction pour récupérer les informations d'un utilisateur par ID
    public function getUtilisateurById($id) {
        $query = "SELECT * FROM utilisateurs WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fonction pour déconnecter un utilisateur
    public function deconnecter() {
        session_start();
        session_destroy();
        return "Déconnexion réussie.";
    }
}
?>
