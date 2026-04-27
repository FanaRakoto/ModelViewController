<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require("../view/partials/header.php"); 
?>
<style>
    .titre-tableau {
        text-align: center;
        margin-top: 3rem;
    }

    .cont-ajouter {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 5%;
    }

    .btn-ajouter button {
        width: 7rem;
        font-size: 18px;
    }

    .recherche {
        display: flex;
    }

    .recherche input,
    button {
        height: 2.5rem;
    }

    .recherche button {
        border: 1px solid black;
        border-left: none;
        background-color: #0d6efd;
        color: white;
        border-radius: 0 7px 7px 0;
        width: 7rem;
        font-size: 18px;
    }

    .recherche input {
        border: 1px solid black;
        border-right: none;
        width: 15rem;
        padding-left: 1rem;
        border-radius: 7px 0 0 7px;
    }

    .table th {
        background-color: #0d6efd;
        color: white;
    }

    .table td {
        background-color: rgb(224, 237, 255);
    }
</style>
<h1 class="titre-tableau">Listes des Utilisateurs</h1>
<div class="cont-ajouter">
    <div class="btn-ajouter">
        <button type="button" class="btn btn-primary">Ajouter</button>
    </div>
    <div class="recherche">
        <input type="text" placeholder="Rechercher un utilisateur...">
        <button>Rechercher</button>
    </div>
</div><br>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>EMAIL</th>
            <th>CREATED_AT</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody class="tbody">
        <tr>
            <td>1</td>
            <td>Example</td>
            <td>example@gmail.com</td>
            <td>20/01/2026</td>
            <td>
                <a class="btn btn-secondary btn-sm" href="#" role="button">Modifier</a>
                <a class="btn btn-danger btn-sm" href="#" role="button">Supprimer</a>
            </td>
        </tr>
    </tbody>

</table>


<?php require('../view/partials/footer.php'); ?>