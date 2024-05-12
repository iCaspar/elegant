<?php declare(strict_types=1);

namespace Elegant\App\Posts;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class Post
{
    public function show(Request $request, Response $response): Response
    {
        $response->getBody()->write('Sample post content');
        return $response;
    }
}
