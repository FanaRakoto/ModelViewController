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

        return $stmt->execute([
            $nom,
            $email,
            password_hash($password, PASSWORD_DEFAULT)
        ]);
    }

    //user by Id
    public function getById($id){

        $sql = "SELECT * FROM {$this->table} WHERE id = :id";

        $stmt = $this->cone->prepare($sql);

        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

        //Methode delete
    public function deleteUsers($id) {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->cone->prepare($sql);
        return $stmt->execute([$id]);
    }
    // Methode Update
    public function updateUsers($id, $nom, $email, $password) {
        if (!$id || !$nom ||$email || $password) {
            throw new ErrorException("Error Processing Request", 1);
        }
        $sql = "UPDATE FROM ($this->table) set (name=?, email=?, password=?) where (id = ?)";
        $stmt = $this->cone->prepare($sql);
        $stmt->execute([$id, $nom, $email, password_hash($password, PASSWORD_DEFAULT)]);
        if ($stmt -> rowCount()==0) {
            throw new Exception("vous n'avez pas fait aucune modification.", 1);
        }
        return true;
    }

}
?>

