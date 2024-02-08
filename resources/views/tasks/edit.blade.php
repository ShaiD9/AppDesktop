<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    
    @extends('layouts.app')

    @section('content')
    <form action="{{ route('tasks.modification', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" value="{{ $task->name }}" class="mt-1 block w-full rounded-md bg-gray-200 border-gray-300 shadow-sm p-2">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea name="description" class="mt-1 block w-full rounded-md bg-gray-200 border-gray-300 shadow-sm p-2">{{ $task->description }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">State:</label>
                <select name="status" class="mt-1 block w-full rounded-md bg-gray-200 border-gray-300 shadow-sm p-2">
                    <option value="1" {{ $task->status ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !$task->status ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="flex justify-center items-center space-x-4">
                <button type="submit" style="max-width: 150px; margin-top: 25px" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Save</button>
                <button type="button" style="max-width: 150px; margin-top: 25px" onclick="window.history.back();" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Retour</button>
            </div>
        </div>
    </form>
    @endsection
</body>
</html>