<?php

namespace Application\Service;


use Application\Entity\Task;
use Application\Mapper\TaskMapper;

class TaskService
{
    private $taskEntity;

    private $taskMapper;

    public function __construct(Task $taskEntity, TaskMapper $taskMapper)
    {
        $this->taskEntity = $taskEntity;
        $this->taskMapper = $taskMapper;
    }

    public function insert(array $data)
    {
        $entity = $this->taskEntity;
        $entity->setName($data['name']);
        $entity->setDescription($data['description']);

        $result = $this->taskMapper->insert($entity);

        return $result;
    }
}