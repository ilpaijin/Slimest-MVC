<?php 

require_once '../vendor/autoload.php';

define('PUBLIC', __DIR__);
define('SRC', __DIR__ . '/../src/');

class_alias('Components\\Url', 'Url');

$app = new Components\Application();

$app->router->add('/', 'home');
$app->router->add('/about', 'home::about');
$app->router->add('/picture', 'picture');

return $app->send();