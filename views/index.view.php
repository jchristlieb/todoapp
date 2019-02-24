
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Getting stuff done</title>
    <meta name=description content="A simple and plane task application written in PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<header class="container">
    <div class="row p-4">
        <div class="col-12">
            <h1 class="display-4">Getting stuff done</h1>
            <p class="mt-4">Manage your tasks.</p>
            <hr>
        </div>
    </div>
</header>
<main class="container">
    <div class="row p-4">
        <div class="col-12 col-md-6 pb-4">
            <h2>My tasks</h2>
            <hr width="50%" align="left">
            <ul>
                <?php foreach ($tasks as $task) {
                    echo '<li>' . $task['title'] . '</li>';
                } ?>
            </ul>
        </div>
        <div class="col-12 col-md-6 pb-4">
            <h2>New task</h2>
            <hr width="50%" align="left">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter task description">
                </div>
                <button type="submit" class="btn btn-primary">Add task</button>
            </form>
        </div>
    </div>

</main>
</html>