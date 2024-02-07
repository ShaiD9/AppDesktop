<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class EditTask extends Component
{
    public $task;

    protected $listeners = ['editTask' => 'loadTask'];

    public function loadTask(Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.edit-task', [
            'tasks' => Task::all()
        ]);
    }

    public function save()
{
    $this->validate([
        'task.name' => 'required',
        'task.status' => 'required',
        'task.description' => 'required',
    ]);

    $this->task->save();

    $this->emit('taskUpdated');
}
}