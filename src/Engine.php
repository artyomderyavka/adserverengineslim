<?php


namespace AdServer;


use \AdServer\App as App;
use \Psr\Container\ContainerInterface;
use \Psr\Http\Message\ResponseInterface as ResponseInterface;


class Engine
{
    protected static $app;

    /**
     * @param ContainerInterface $container
     * @param array $routesCollection
     */
    public static function run(ContainerInterface $container, array $routesCollection)
    {
        self::$app = new App($container);
        foreach ($routesCollection as $route => $callableControllerAction) {
            self::$app->map(['GET', 'POST'], $route, $callableControllerAction);
        }
        self::$app->run();
    }

    /**
     * @return ContainerInterface
     */
    public static function getContainer(): ContainerInterface
    {
        return self::$app->getContainer();
    }

    public static function makeLocalRequest(
        string $method,
        string $path,
        string $query = '',
        array $headers = [],
        array $cookies = [],
        string $bodyContent = ''
    ): ResponseInterface
    {
        return self::$app->makeLocalRequest(
            $method,
            $path,
            $query,
            $headers,
            $cookies,
            $bodyContent
        );
    }
}
