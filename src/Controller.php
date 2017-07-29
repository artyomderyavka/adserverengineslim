<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 29.07.2017
 * Time: 16:58
 */

namespace AdServer;


use \Psr\Container\ContainerInterface;


class Controller implements ControllerInterface
{
    protected $container;

    public function __construct()
    {
        $this->container = Engine::getContainer();
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }
}