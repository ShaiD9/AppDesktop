<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white shadow-2xl rounded-lg p-12 text-base w-full max-w-xl mx-auto font-sans" style="font-family: 'Inter var', sans-serif;">
        <h2 class="text-2xl font-bold mb-6 text-center">Créer une nouvelle tâche</h2>
        <form method="POST" action="/taches" class="space-y-4">
            @csrf
            <div>
                <label for="taskName" class="block text-sm font-medium text-gray-700">Nom de la tâche :</label>
                <input type="text" id="taskName" name="name" class="mt-1 block w-full rounded-md bg-gray-200 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="taskDescription" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea id="taskDescription" name="description" class="mt-1 block w-full rounded-md bg-gray-200 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
            </div>
            <div>
                <label for="taskStatus" class="block text-sm font-medium text-gray-700">Statut :</label>
                <select id="taskStatus" name="status" class="mt-1 block w-full rounded-md bg-gray-200 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="1">Actif</option>
                    <option value="0">Inactif</option>
                </select>
            </div>
            <div class="flex justify-center items-center space-x-4">
                <button type="submit" style="background-color: #3B82F6; max-width: 150px; margin-top: 25px" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mt-6 font-bold">Créer</button>
                <button type="button" style="max-width: 150px; margin-top: 25px" onclick="window.history.back();" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Retour</button>
            </div>
        </form>
    </div>
</body>