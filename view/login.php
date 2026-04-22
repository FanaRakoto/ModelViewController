<?php

require("/view/partials/header.php");

?>
<div class="contenair center">
    <form>
        <h1>Connexion</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">souvient moi</label>
        </div>
        <button type="submit" class="btn btn-primary">Connecter</button>
    </form>
</div>

<?php

require("/view/partials/footer.php");

?>