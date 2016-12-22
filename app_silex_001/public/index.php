<?php
require_once __DIR__ . '/../app/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

use Application\Service\TaskService;
use Application\Mapper\TaskMapper;

$response = new Response();

$task = New \Application\Controller\TaskController();
$app->mount('/', $task->connect($app));


$app->run();