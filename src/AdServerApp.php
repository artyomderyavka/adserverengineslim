<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 29.07.2017
 * Time: 13:44
 */

namespace AdServer\AdServerApp;


use Slim\App as SlimApp;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class AdServerApp extends SlimApp
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function makeLocalRequest(Request $request, Response $response)
    {
        return $this($request, $response);
    }
}