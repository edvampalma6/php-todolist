<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();

$app->get('/', function() use ( $app ) {
    echo "Welcome to REST API";  //http://hostname/api
});

$app->get('/hello/:name', function($name) use ( $app ) {
    echo "Hi $name, welcome to the REST API's";  //rota hello
});



$app->run();
?>