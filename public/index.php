<?php 

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../src/Config/bootstrap.php';

$app = new Components\Application();

$app->router->add('/', 'home');
$app->router->add('/about', 'home::about');
$app->router->add('/about/{name}', function($name)
{
	echo 'ok ' . $name;
});
$app->router->add('/picture', 'picture');

return $app->run();