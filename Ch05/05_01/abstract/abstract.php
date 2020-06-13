<?php

abstract class Database {
    abstract public function connection ();

    public function disconnect()
    {
        // Disconnect from database server
    }
}

class Mysql extends Database {
    public function connection()
    {
        
    }
}

$mysql = new Mysql();