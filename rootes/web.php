<?php
$roots = [
    //Public rout
    'login' => ['AuthController', 'showLogin'],

    //Register rout
    'registerpost' => ['AuthController', 'createUser'],
    
    
    // Public rout
    'register' => ['AuthController', 'showRegister'],

    //Protected rout
    'users' => ['userController', 'ListUsers']
];