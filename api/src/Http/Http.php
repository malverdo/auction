<?php
declare(strict_types=1);

namespace App;

use JsonException;
use Psr\Http\Message\ResponseInterface;

class Http
{
    /**
     * @throws JsonException
     */
    public static function json(ResponseInterface $response, $data): ResponseInterface
    {
        $response->getBody()->write(json_encode($data, JSON_THROW_ON_ERROR));
        return $response->withHeader('Content-Type', 'application/json');
    }
}