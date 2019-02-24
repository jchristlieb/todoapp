# A toDoApp from Scratch


**NOTE** Development in progress


The main goal of this project is to practice 
OOP programming. It consists of the following objects:

* Router -> */src/classes/Router.php*
* Connection -> */src/database/Connection.php*
* QueryBuilder -> */src/database/QueryBuilder.php*
* TasksController -> */src/controller/TasksController.php*

And is programmed against the following interface(s):

* ResponseToTasks -> */src/contracts/ResponseToTasks.php*


## Routing

`index.php` is the apps entry point. The `Router::load()` function instantiates a *Router* object. The routing maps
at `routes.php` are chained into the objects `$routes` variable. The `direct()` methods checks the requested *URI*
against the mapped routes and requests the responsive controller. 

## Controller

*tbd*


## Models

*tbd*


## Views

*tbd*



