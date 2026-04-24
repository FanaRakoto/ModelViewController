<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title></title>
    <style>

        .navbar {
            background-color: #fffffffe;
            height: 80px;
            margin: 10px;
            border-radius: 16px;
            padding: .5rem;
        }
        .navbar-brand {
            font-weight: 500;
            color: #009970;
            font-size: 24px; 
            transition: .3s color;
        }
        .login-button {
            background-color: #009970;
            color: #fff;
            font-size: 14px;
            padding: 8px 20px;
            border-radius: 50px;
            text-decoration: none;
            transition: .3s background-color;
        }

        .login-button:hover {
            background-color: #00b383;
        }

        .navbar-toggler {
            border: none;
            font-size: 1.25rem;
        }

        .navbar-toggler:focus,
        .btn-close:focus {
            box-shadow: none;
            outline-width: none;
        }

        .nav-link {
            color: #666777;
            font-weight: 500;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #000;
        }





    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">MVCLogo</a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    

 
