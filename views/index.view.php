<?php

require 'snippets/head.php'

?>

<header class="container mt-4 mb-4">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">Getting stuff done</h1>
            <p class="mt-4">Manage your tasks.</p>
        </div>
    </div>
</header>

<main class="container">
    <div class="row">
        <div class="col-12 col-md-8 pb-4">
            <h2>My tasks</h2>
            <hr width="50%" align="left">
            <ul class="nav nav-tabs" id="taskTabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="active-tab" data-toggle="tab" role="tab" href="#active">active</a></li>
                <li class="nav-item"><a class="nav-link" id="inactive-tab" data-toggle="tab" role="tab" href="#inactive">inactive</a></li>
                <li class="nav-item"><a class="nav-link" id="all-tab" data-toggle="tab" role="tab" href="#all">all</a></li>
            </ul>

            <div class="tab-content" id="taskTabsContent">
                <div class="tab-pane show active container mt-3" id="active" role="tabpanel">
                    <?php

                    foreach ($uncompletedTasks as $task)
                        echo '<li>' . $task['title'] . '</li>';
                    ?>
                </div>
                <div class="tab-pane container mt-3" id="inactive" role="tabpanel">
                    <?php

                    foreach ($completedTasks as $task)
                        echo '<li>' . $task['title'] . '</li>';
                    ?>
                </div>
                <div class="tab-pane container mt-3" id="all" role="tabpanel">
                    <?php

                    foreach ($allTasks as $task)
                        echo '<li>' . $task['title'] . '</li>';
                    ?>
                </div>
            </div>




            <ul>
                <?php foreach ($tasks as $task) {
                    echo '<li>' . $task['title'] . '</li>';
                } ?>
            </ul>
        </div>
        <div class="col-12 col-md-4 pb-4">
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


<?php

require 'snippets/footer.php'

?>