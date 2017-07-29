<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 29.07.2017
 * Time: 17:23
 */

namespace AdServer;


use Psr\Http\Message\ResponseInterface as ResponseInterface;


interface ClientInterface
{
    public function callService(
        string $method,
        string $path,
        string $query = '',
        array $headers = [],
        array $cookies = [],
        string $bodyContent = ''
    ): ResponseInterface;
}