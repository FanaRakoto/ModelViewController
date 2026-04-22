<?php
//appelation de model/User.php
require_once("../model/User.php");
require_once("../core/middleware.php");
//tsy afaka jerena raha tsy connecté
class userController
{
    private $user;

    //user connectée avec la base de donnes.
    public function __construct($db)
    {
        Middleware:: auth();//protection route
        $this->user = new User($db);
    }

    //affichage de page login
    public function ListUser()
    {
        require('./view/users.php');
    }
}