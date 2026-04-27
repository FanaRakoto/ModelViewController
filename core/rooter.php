<?php

class Rooter {
    public static function HandleClik($url, $roots, $db) {
        //evitéer l'url n'éxiste pas, puis il retourne une URL NOT FOND.
        if(!array_key_exists($url, $roots)) {
            die('<p style="color: red;">===== URL NOT FOND ======</p>');
        }

        //mahaka classe any anaty controller
        $controllerName = $roots[$url][0];
        //mahaka méthode dans le class
        $method = $roots[$url][1];

        //variation de chémin de controller qui indique le chémin et le root
        require_once("./controller/{$controllerName}.php");

        //respect la connexion de base de donnes.
        $controller = new $controllerName($db);
        $controller->$method();
    }
}



