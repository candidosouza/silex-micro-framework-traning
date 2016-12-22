<?php

namespace Application\Mapper;

use Application\Entity\Task;

class TaskMapper
{
    public function insert(Task $task) {
        return [
            'name' => 'Desenvolver',
            'description' => 'Descrtiption desenvolver'
        ];
    }
}