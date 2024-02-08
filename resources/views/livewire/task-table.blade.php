<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light divide-y divide-gray-200 shadow-sm rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de création</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edition/Supression</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tasks as $task)
                            <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $task->name }}</td>
                                <td class="px-6 py-4 whitespace">{{ $task->description }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $task->status }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $task->created_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('tasks.edition', $task->id) }}" style="max-width: 150px; margin-top: 25px" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Éditer</a>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" wire:click="deleteTask({{ $task->id }})">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mb-6 mt-12 flex justify-center items-center">
        <a href="{{ route('tasks.creation') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Nouvelle tâche</a>
    </div>
</div>
