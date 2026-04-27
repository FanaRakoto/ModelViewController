<?php
// Appel du modèle User
require_once("./model/User.php");

class AuthController
{
    private $user;
    private $db;

    public function __construct($db)
    {
        // Démarre la session si elle n'est pas déjà active
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->db = $db;
        $this->user = new User($db);
    }

    // Affichage de la page de connexion
    public function showLogin()
    {
        require('./view/login.php');
    }

    // Affichage de la page d'inscription
    public function showRegister()
    {
        require('./view/register.php');
    }

    // Logique d'inscription
    public function register() 
    {
        // Correction : Utilisation de $_SERVER['REQUEST_METHOD']
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // Récupération et nettoyage basique des données
            $nom = htmlspecialchars($_POST['nom']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password']; // Le hachage doit se faire dans le modèle User

            // Tentative de création
            if ($this->user->createUsers($nom, $email, $password)) {
                // Redirection vers le login après succès
                header('Location: index.php?action=login&success=1');
                exit();
            } else {
                echo "Erreur lors de l'inscription.";
            }
        }
    }
}