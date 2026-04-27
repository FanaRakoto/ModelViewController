<?php require("./view/partials/header.php"); ?>
<style>
    .contenair {
        width: 30%;
        margin: auto;
        margin-top: 2rem;
        margin-bottom: 2rem;
        background-color: white;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 2px 2px 10px #00000033;
    }

    .titre-inscrit {
        text-align: center;
        color: blue;
    }
</style>
<div class="contenair">
    <h1 class="titre-inscrit">Inscription</h1><br>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require("./view/partials/header.php");
    ?>
    <div class="container">
        <form action="index.php?url=registerpost" method="POST" class="row g-3">
            <label for="">Nom :</label>
            <input type="text" id="nom" name="name" class="form-control">

            <label for="">Email :</label>
            <input type="email" id="email" name="email" class="form-control">

            <label for="">Mot de passe :</label>
            <input type="password" id="mdp" name="password" class="form-control"><br>

            <button type="submit" class="btn btn-primary mb-3">Register</button>

        </form>
    </div>
    <?php require("./view/partials/footer.php"); ?>