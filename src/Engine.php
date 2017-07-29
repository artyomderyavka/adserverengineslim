<?php


namespace AdServer;


use \AdServer\App as App;


class Engine
{
    public static function run(array $routesCollection)
    {
        $app = new App();
        foreach ($routesCollection as $route => $callableControllerAction) {
            $app->map(['GET', 'POST'], $route, $callableControllerAction);
        }
        $app->run();
    }
}
