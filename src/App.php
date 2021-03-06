<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 29.07.2017
 * Time: 13:44
 */

namespace AdServer;


use Slim\App as SlimApp;
use Psr\Http\Message\ResponseInterface as ResponseInterface;
use Slim\Http\Response;


class App extends SlimApp
{
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function makeLocalRequest(
        string $method,
        string $path,
        string $query = '',
        array $headers = [],
        array $cookies = [],
        string $bodyContent = ''
    ): ResponseInterface
    {
        $response = new Response();
        return $this->subRequest(
            $method,
            $path,
            $query,
            $headers,
            $cookies,
            $bodyContent,
            $response
        );
    }
}