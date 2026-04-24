<?php
$roots = [
    //Public rout
    'login' => ['AuthController', 'showLogin'],

    'register' => ['AuthController', 'showRegister'],

    //Protected rout
    'users' => ['userController', 'ListUsers']
];