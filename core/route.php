<?php

namespace core;


class Route
{
    static function start()
    {

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера и экшена из массива ури
        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }else {
            $controllerName = 'Main';
        }

        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }else {
            $actionName = 'index';
        }

        $controllerName = ucfirst($controllerName) . 'Controller';
        $modelName      = ucfirst($controllerName) . 'Model';
        $actionName     = 'action' . ucfirst($actionName);

        $controllerFile = $controllerName . '.php';
        $modelFile      = $modelName . '.php';

        $controllerPath = Registry::get('controllers') . $controllerFile;
        $modelPath      = Registry::get('models') . $modelFile;

        if (is_file($modelPath)) {
            include  Registry::get('models') . $modelFile;
        }

        if (is_file($controllerPath)) {
            require_once Registry::get('controllers') . $controllerFile;
            $controller = '\\controllers\\' . $controllerName;
            $newObjController = new $controller;
            if (method_exists($newObjController, $actionName)) {
                $newObjController->$actionName();
            }else {
                Route::Error404();
            }
        }else {
            Route::Error404();
        }
    }

    static function Error404()
    {

        header("HTTP/1.0 404 Not Found");
        include './views/header.tpl';
    }

}