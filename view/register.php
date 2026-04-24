<?php require "./partials/header.php";?>
<div class="contenair">
     <form action="index.php?url=registerpost" method="POST" class="row g-3">
        <label for="">Nom :</label><br>
        <input type="text" id="nom" name="nom" class="form-control"><br><br>

        <label for="">Email :</label><br>
        <input type="email" id="email" name="email" class="form-control"><br><br>

        <label for="">Mot de passe :</label><br>
        <input type="password" id="mdp" name="mdp" class="form-control"><br><br>

        <button type="submit">Register</button>
</div>
<?php require "partials/footer.php";?>