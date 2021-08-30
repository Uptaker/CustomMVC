<?php

/*
PDO Database Class
Connects to database
Creates prepared statements
Binds values
Returns rows and results
*/

// todo add error logging

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    // Database handler
    private $dbh;

    private $stmt;
    private $error;

    public function __construct()
    {
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        // Create options
        // This will go into an array
        $options = array(
            // Persistent connection, can increase performance by checking if connection already established
            PDO::ATTR_PERSISTENT => true,

            // A more elegant way of handling errors anf throw exceptions
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // EXCEPTION, SILENT, WARNING
        );

        // Create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}
