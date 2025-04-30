<?php 

require "functions.php";

//require "router.php";

// Connect to MySQL database
/*
class Person {
    public $id; 
    public $name;

public function breathe() 
    {
        echo $this->name . " is breathing.";
    }
}

$person = new Person();

$person->id = 1;
$person->name = "John Doe";

dd($person ->breathe());
*/
$dsn = "mysql:host=localhost;port=3306;dbname=myfirstdb;charset=utf8mb4;user=root;password=";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($users);
