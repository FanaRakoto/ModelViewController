<?php
//appelation de model/User.php
require_once("./model/User.php");

//class pour l'user connectée.
class AuthController
{
    private $user;

    //user connectée avec la base de donnes.
    public function __construct($db)
    {
        session_start(); //démarre la session
        $this->user = new User($db);
    }

    //affichage de page login
    public function showLogin()
    {
        require('./view/login.php');
    }

    
    //affichage de page register
    public function showRegister() {
        require('../view/register.php');
    }

    //creation d'un nouvel utilisateur
    public function register($nom, $email, $password) {
        if ($this->user->createUsers($nom, $email, $password)) {
            header("Location: login.php");
            exit();
        } else {
            echo "Erreur lors de l'inscription.";
        }
    }
}

