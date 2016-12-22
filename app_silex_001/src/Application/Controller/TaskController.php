<?php

namespace Application\Controller;

use Application\Entity\Task;
use Application\Mapper\TaskMapper;
use Application\Service\TaskService;
use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskController implements ControllerProviderInterface
{
    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        $factory = $app['controllers_factory'];
        $factory->get('/','Application\\Controller\\TaskController::index');
        $factory->get('tasks/','Application\\Controller\\TaskController::tasks');
        return $factory;
    }

    public function index()
    {
        return 'Hello World Silex ;-)';
    }

    public function tasks(Application $app)
    {
        $data['name'] = 'Desenvolver';
        $data['description'] = 'Description Desenvolvedor';

        $this->getTaskService($app);

        $result = $app['taskService']->insert($data);
        return $app->json($result);
    }

    public function getTaskService(Application $app)
    {
        $app['taskService'] = function () {
            $task = new Task();
            $taskMapper = new TaskMapper();
            $taskService = new TaskService($task, $taskMapper);
            return $taskService;
        };
    }
}















