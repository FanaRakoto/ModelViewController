<?php
class User {
    private $cone;
    private $table = "users";

    public function __construct($db) {
        $this->cone = $db;
    }

    public function createUsers($nom, $email, $password) {

        $sql = "INSERT INTO {$this->table} (nom, email, password) VALUES (?,?,?)";
        $stmt = $this->cone->prepare($sql);
        return $stmt->execute([$nom, $email, password_hash($password, PASSWORD_DEFAULT)]);
    }
}