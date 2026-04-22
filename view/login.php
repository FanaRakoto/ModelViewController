<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contenair {    
            width: 100vw;
            height: 100vh;
        }
        form{
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0 5px 10px rgb(218, 218, 218);
        }
    </style>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
</body>

</html>