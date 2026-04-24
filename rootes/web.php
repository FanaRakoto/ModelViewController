<?php
$roots = [
    //Public rout
    'login' => ['AuthController', 'showLogin'],

    //Register rout
    'registerpost' => ['AuthController', 'createUser'],

    
    'register' => ['AuthController', 'showRegister'],

    //Protected rout
    'users' => ['userController', 'ListUsers']
];