<?php
$roots = [
    //Public rout
    'login' => ['AuthController', 'showLogin'],

    //Register rout
    'registerpost' => ['AuthController', 'createUser'],

    //Protected rout
    'users' => ['userController', 'ListUsers']
];