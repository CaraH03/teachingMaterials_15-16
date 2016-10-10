<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Page</title>
</head>
<body>
<h1>PHP Program Below!</h1>


<?php
class Model
{
    public $string;

    public function __construct(){
        $this->string = "Using PHP in MVC! #winningAtLife";
    }

}


class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        return '<p><a href="mvcExample.php?action=clicked">' . $this->model->string . "</a></p>";
    }
}

class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function clicked() {
        $this->model->string = "Still winning at life by using the controller to update my Model!";
    }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

echo $view->output();

?>

</body>
</html>
