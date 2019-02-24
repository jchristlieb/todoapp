<?php

namespace toDoApp\database;
use toDoApp\controller\TasksController;

class QueryBuilder
{
    protected $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();

        return $statement->fetchAll();
    }

    public function saveTask($task)
    {
        $statement = $this->pdo
            ->prepare("insert into tasks (title, completed) values ($task, false ");
        try {
            $statement->execute();
        } catch (\PDOException $exception) {

            $taskController = new TasksController();
            return $taskController->TaskCreateFailed();
        }

    }
}