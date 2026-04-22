<?php
class DataBase
{
    private $host = 'localhost';
    private $db_name = 'db_mvc';
    private $charset = 'UTF8';
    private $username = 'BOFA';
    private $password = '321';
    private $pdo;

    public function ConnexionData()
    {
        try {
            $dns = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
            $this->pdo = new PDO($dns, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ('<span style="color: green">Connection successfully. </span>');
        } catch (PDOException $e) {
            die('<p>Error connection because : ' . '<span style="color: red;">' . $e->getMessage() . '</span>' . '</p>');
        }
    }
}
echo "connected";