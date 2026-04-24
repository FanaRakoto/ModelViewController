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

<<<<<<< HEAD
}
=======
    //affichage de page register
    public function showRegister() {
        require('../view/register.php');
    }


}
>>>>>>> 6fa4e39b08fc17a682c06306a7c9fe1a0b9edb57
