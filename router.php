<?php
declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$legacy = [
    '/index.html' => '/',
    '/catalog.html' => '/catalog.php',
    '/projects.html' => '/projects.php',
    '/documents.html' => '/documents.php',
    '/blog.html' => '/blog.php',
    '/contacts.html' => '/contacts.php',
];

if (isset($legacy[$path])) {
    $query = $_SERVER['QUERY_STRING'] ?? '';
    header('Location: ' . $legacy[$path] . ($query !== '' ? '?' . $query : ''), true, 301);
    exit;
}

if (preg_match('~^/(?:templates|server)(?:/|$)~', $path)) {
    http_response_code(404);
    exit;
}

return false;
