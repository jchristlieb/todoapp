<?php

namespace toDoApp\controller;
use toDoApp\classes\Task;

$task = new Task();
$allTasks = $task->getAllTasks();
$completedTasks = $task->filterCompletedTasks($allTasks);
$uncompletedTasks = $task->filterUncompletedTasks($allTasks);


require 'views/index.view.php';