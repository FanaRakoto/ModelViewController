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

}
