<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf

    <input type="text" name="name" value="{{ $task->name }}">
    <!-- Add other task fields here -->

    <button type="submit">Update Task</button>
</form>