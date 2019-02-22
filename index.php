<?php

require 'vendor/autoload.php';


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta title="toDoAPP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<header class="container">
    <div class="row p-4">
        <div class="col-12">
            <h1 class="display-4">Getting stuff done</h1>
            <p>Manage your tasks.</p>
            <hr>
        </div>
    </div>
</header>
<main class="container">
    <div class="row p-4">
        <div class="col-12 col-md-6">
            <h2>My tasks</h2>
            <hr>
        </div>
        <div class="col-12 col-md-6">
            <h2>Add new task</h2>
            <hr>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter task description">
                </div>
                <button type="submit" class="btn btn-primary">Create task</button>
            </form>
        </div>
    </div>

</main>
</html>
