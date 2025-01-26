<?php

$database = new Database();
class Database
{
    public function __construct()
    {
        $this->connectDb();
    }
    public static function connectDb()
    {
        try {
            $pdo = new PDO(
                "mysql:host=mysql;dbname=jobspot",
                "user",
                "password"
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
