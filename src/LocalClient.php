<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 29.07.2017
 * Time: 17:37
 */

namespace AdServer;


use Psr\Http\Message\ResponseInterface as ResponseInterface;


class LocalClient implements ClientInterface
{
    /**
     * @param string $method
     * @param string $path
     * @param string $query
     * @param array $headers
     * @param array $cookies
     * @param string $bodyContent
     * @return ResponseInterface
     */
    public function callService(
        string $method,
        string $path,
        string $query = '',
        array $headers = [],
        array $cookies = [],
        string $bodyContent = ''
    ): ResponseInterface
    {
        return Engine::makeLocalRequest($method, $path, $query, $headers, $cookies, $bodyContent);
    }
}