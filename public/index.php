<?php 

require_once '../vendor/autoload.php';

define('PUBLIC', __DIR__);
define('SRC', __DIR__ . '/../src/');

class_alias('Components\\Url', 'Url');

$app = new Components\Application();

$app->router->add('/hello', 'hello');
$app->router->add('/about', 'hello::about');

return $app->send();