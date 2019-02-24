<?php

namespace toDoApp;

use toDoApp\database\Connection;
use toDoApp\database\QueryBuilder;

$pdo = Connection::make();

return new QueryBuilder($pdo);




