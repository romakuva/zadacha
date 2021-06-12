<?php

class Router
{
    public function index() {
        $model = $_GET ['model'];
        $model = htmlspecialchars ($model);
        $model = ucfirst ($model);
        $controller = $model . 'Controller';

        if (!file_exists ( __DIR__ . "/../Controller/" . $controller . '.php')) {
            die ("Controller not found");
        }

        include_once __DIR__ . "/../Controller/" . $controller . '.php';

        $action = $_GET ['action'];
        $action = htmlspecialchars ($action);

        if (isset ($action)) {
            $objController = new $controller ();
            if (method_exists ($objController, $action)) {
                return $objController->$action ();
            }
            die ("Action not found");
        }
    }
}