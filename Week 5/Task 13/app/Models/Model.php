<?php 


class Model {

    private string $table;

    private $dbConnection;

    public function __construct(string $table) {
        $this->table = $table;
    }

    // select * range , select * limit 1 , insert , update , delete

    public function all() {
        $stmt = $this->getDBConnection()->query("SELECT * FROM $this->table");
        // set the resulting array to associative
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first($key, $value )
    {
        $stmt = $this->getDBConnection()->query("SELECT * FROM $this->table  WHERE $key = '$value' LIMIT 1");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // different tables
    public function create(array $data) {

        $columns = '';

        $placeholders = '';

        foreach($data as $key => $value) {
            $columns .=  $key .  ( $key == array_key_last($data) ? '' : ', ' ) ;
            $placeholders .=  ':' . $key .  ( $key == array_key_last($data) ? '' : ', ' ) ;
        }

        $stmt = $this->getDBConnection()->prepare("INSERT INTO $this->table ($columns) VALUES ($placeholders)");

        foreach($data as $key => $value) {
            $stmt->bindParam(':' . $key, ${$key});
            ${$key} = $value;
        }
        
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->getDBConnection()->prepare("DELETE FROM $this->table WHERE id = '$id'");

        return $stmt->execute();
    }

    public function update($name, $id) {
        // $className = $_POST['name'];
        $newPath = '';

        if($newPath) {
            $stmt = $this->getDBConnection()->prepare("UPDATE classes SET name = '$name' , image_url = '$newPath' WHERE id = '$id'");
            return $stmt->execute();
    
        } else {
            $stmt = $this->getDBConnection()->prepare("UPDATE classes SET name = '$name' WHERE id = '$id'");
            return $stmt->execute();
        }
    }

    private function getDBConnection() {

        $host = 'db';
        $db = 'task13';
        $username = 'root';
        $password = '123';   

        $this->dbConnection = new PDO("mysql:host=$host;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->dbConnection;
    }

    public function __destruct() {
        // close connection
        $this->dbConnection = null;
    }

}