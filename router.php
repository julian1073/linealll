<?php

    include_once('controllers/'.$controller.'Controller.php');
    $objController = ucfirst($controller).'Controller';

    $controller = new $objController();
    $controller->$action();
?>