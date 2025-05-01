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

    public function __construct( $config) {

        $dsn = "mysql:".http_build_query($config,'',';'); // Convert the array to a query string
        // Connect to the database here if needed

        $this->connection = new PDO($dsn, "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query( $query ) {


        
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}