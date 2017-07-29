<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 29.07.2017
 * Time: 17:28
 */

namespace AdServer;


use \Psr\Container\ContainerInterface;


interface ControllerInterface
{
    /**
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface;
}