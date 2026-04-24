<?php require "./partials/header.php";?>
<div class="contenair">
     <form action="" method="POST">
        <label for="">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="">Email :</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="">Mot de passe :</label><br>
        <input type="password" id="mdp" name="mdp"><br><br>

        <button type="submit">Enregistrer</button>

</div>
<?php require "partials/footer.php";?>