<?php

use App\Router;
use GuzzleHttp\Psr7\ServerRequest;

require '../vendor/autoload.php';

$app = new Router();

$response = $app->run(ServerRequest::fromGlobals());
Http\Response\send($response); 