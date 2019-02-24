<?php

namespace toDoApp\database;

class Connection
{
    // static because no instances required
    // and global accessibility
    public static function make()
    {
        try {
            $pdo = new \PDO('mysql:dbname=todoapp;host=127.0.0.1','jc','secret' );
        }
        catch (\PDOException $exception) {
            die ('Could not connect to database');
        }

        return $pdo;
    }
}