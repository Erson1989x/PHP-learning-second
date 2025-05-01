<?php 

// Connect to MySQL database and execute a query
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

class Database {
    public $connection;

    public function __construct() {
        // Connect to the database here if needed
        $dsn = "mysql:host=localhost;port=3306;dbname=myfirstdb;charset=utf8mb4;user=root;password=";

        $this->connection = new PDO($dsn);
    }
    public function query( $query ) {


        
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}