<?php

namespace toDoApp\classes;

use function Composer\Autoload\includeFile;
use toDoApp\database\Connection;

class Task
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Connection::make();
    }

    public function getAllTasks()
    {
        $statement = $this->pdo->prepare('select * from tasks');
        $statement->execute();

        return $statement->fetchAll();
    }

    public function filterCompletedTasks($allTasks)
    {

        $completedTasks = array_filter($allTasks, function ($task)
        {
            return $task['completed'] == true;
        });

        return $completedTasks;

    }

    public function filterUncompletedTasks($allTasks)
    {

        $uncompletedTasks = array_filter($allTasks, function ($task)
        {
            return $task['completed'] == false ;
        });

        return $uncompletedTasks;
    }

}