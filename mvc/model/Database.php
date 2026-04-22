<?php
class Database{

private $host = "localhost";
private $database = "mvc_db";
private $username = "root";
private $password = "";

public function connect() {
    try {
        $pdo = new PDO(
            "mysql:host={$this->host};dbname={$this->database};charset=utf8",
            $this->username,
            $this->password
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: ".$e.getMessage());
    }
}

}
?>