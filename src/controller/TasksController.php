<?php

namespace toDoApp\controller;
use toDoApp\contracts\ResponseToTasks;

class TasksController implements ResponseToTasks
{
    public function TaskCreate($request, $pdo)
    {
        // create instance of PDO
        // use save method with $request
        // if successful return to TaskCreateSuccessful
        // else return TaskCreateFailed
    }

    public function TaskCreateSuccessful()
    {
        // TODO: Implement TaskCreateSuccessful() method.
    }

    public function TaskCreateFailed()
    {
        // TODO: Implement TaskCreateFailed() method.
        return 'view/index.view.php';
    }


}