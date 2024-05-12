<?php declare(strict_types=1);

use Elegant\App\Posts\Post;

if (! isset($elegant)) {
    exit();
}

$elegant->get('/posts/{slug}', [Post::class, 'show']);
