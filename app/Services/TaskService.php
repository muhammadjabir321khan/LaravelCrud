<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
    public function getAllTasks()
    {
        $limit = request()->input('limit');
        return Task::orderBy('created_at', 'desc')->paginate($limit);
    }

    public function createTask(array $data)
    {
        return Task::create($data);
    }

    public function getTaskById($id)
    {
        return Task::findOrFail($id);
    }

    public function updateTask(Task $task, array $data)
    {
        $task->update($data);
        return $task->fresh();
    }


    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        return $task->delete();
    }
}
