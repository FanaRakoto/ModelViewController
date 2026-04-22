<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../config/dataBases.php";
class Middleware
{
    public function auth()
    {
        session_start();
        if (!isset($user) || !$user) {
            // throw new ErrorException("Veuillez vous connecter.", 1);
            header("location: ../index.php? url = login.php");
            exit();
        }
        echo "Mandeha";
    }
}