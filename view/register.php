<?php require "./partials/header.php";?>
<style>
    .contenair {
        width: 30% ;
        margin: auto;
        margin-top: 10rem;
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
     <form action="index.php?url=registerpost" method="POST" class="row g-3">
        <label for="">Nom :</label>
        <input type="text" id="nom" name="nom" class="form-control">

        <label for="">Email :</label>
        <input type="email" id="email" name="email" class="form-control">

        <label for="">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" class="form-control"><br>

        <button type="submit" class="btn btn-primary mb-3">Register</button>
</div>
<?php require "partials/footer.php";?>