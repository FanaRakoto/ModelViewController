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
        Middleware::auth();//protection route
        $this->user = new User($db);
    }

    //affichage de page list users.
    public function ListUser()
    {
        require('./view/users.php');
    }

     //update de user
    public function updateUser()
    {
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->user->updateUsers($id, $name, $email, $password);
        }
    }

    //delete de user
    public function deleteUser()
    {
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            $this->user->deleteUsers($id);
        }
    }

    //create de user
    public function createUser()
    {
        if (isset($_POST['create'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->user->createUsers($name, $email, $password);
        }
    }

    

    

    



}