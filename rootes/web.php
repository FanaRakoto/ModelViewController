<?php
$roots = [
    //Public rout
    'login' => ['AuthController', 'showLogin'],

    // Public rout
    'register' => ['AuthController', 'showRegister'],

    //Protected rout
    'users' => ['userController', 'ListUsers']
];