<?php
declare(strict_types=1);

namespace App\Http\Action;

use App\Http;
use JsonException;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

class HomeAction
{
    /**
     * @throws JsonException
     */
    public function __invoke(Request $request, Response $response, $args): Response
    {
            return Http::json($response, ['as'=>'hello world']);
    }
}