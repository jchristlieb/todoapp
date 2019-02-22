<?php

namespace toDoApp\contracts;

interface ResponseToTasks
{
    public function TaskCreateSuccessful();
    public function TaskCreateFailed();
}