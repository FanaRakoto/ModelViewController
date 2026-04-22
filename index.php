<?php
//avec linux, l'errer n'affiche pas sans ce code si-dessous
ini_set('display_errors', 1);
error_reporting(E_ALL);

//appellation des code
require_once('./config/dataBases.php');
require_once('./core/rooter.php');
require('./rootes/web.php');

//connexion db
$db = (new DataBase())->ConnexionData();

//Stockage d'URL dans le root/web.php

//$url = $_GET['url'];

$url = $_GET['url'] ?? 'login';

//applée la rooter
Rooter::HandleClik($url, $roots, $db);