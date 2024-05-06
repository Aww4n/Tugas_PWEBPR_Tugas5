<?php

require_once "env.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/' || $uri === '/index.php') {
    require __DIR__ . '/index.php';
} elseif ($uri === '/create') {
    require __DIR__ . '/create.php';
} elseif (preg_match('/\/update\/([0-9]+)/', $uri, $matches)) {
    $_GET['id_hewan'] = $matches[1];
    require __DIR__ . '/update.php';
} elseif (preg_match('/\/delete\/([0-9]+)/', $uri, $matches)) {
    $_GET['id_hewan'] = $matches[1];
    require __DIR__ . '/delete.php';
} else {
    http_response_code(404);
    echo '404 Not Found';
}
?>
