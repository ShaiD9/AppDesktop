<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public function render()
    {
        return view('livewire.task-create', [
            'tasks' => Task::all()
        ]);
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);

        if ($task) {
            $task->delete();
        }

        $this->render();
    }

    public function editTask($id)
    {
        $task = Task::find($id);
        
        return redirect()->route('tasks.edition', $task);
    }

    public function createTask()
    {
        return redirect()->route('tasks.creation');
    }
}