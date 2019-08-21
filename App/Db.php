<?php


namespace App;


class Db
{
    public $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host:localhost;dbname=test', 'alex', '12345');
        var_dump($this->dbh->query("SELECT * FROM test.test"));
    }
}