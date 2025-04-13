@extends('layout')

@section('content')
    {{-- Include Alpine.js if not already in your layout --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="container mx-auto px-4 py-6">
        <div class="w-full flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">Categories List</h1>
            <a href="/categories/ajouter"
               class="flex items-center p-2 px-4 rounded-xl bg-blue-500 text-white font-semibold hover:bg-blue-600 transition">
                Ajouter categorie
                <svg class="stroke-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                     width="20" height="20">
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
            </a>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nom</th>
                        <th class="border border-gray-300 px-4 py-2">Description</th>
                        <th class="border border-gray-300 px-4 py-2">Créé le</th>
                        <th class="border border-gray-300 px-4 py-2">Mis à jour</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $categorie->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $categorie->nom }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $categorie->description }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $categorie->created_at->format('d/m/Y H:i') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $categorie->updated_at->format('d/m/Y H:i') }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <div x-data="{ open: false }" class="relative inline-block text-left">
                                    <!-- Dropdown trigger -->
                                    <button @click="open = !open"
                                            class="p-2 border rounded-md hover:bg-gray-100 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                             width="24" fill="currentColor">
                                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div x-show="open" @click.away="open = false"
                                         x-transition
                                         class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl z-50 border border-gray-200">
                                        <a href="{{ url('/categories/update/' . $categorie->id) }}"
                                           class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-xl">
                                            ✏️ Modifier
                                        </a>
                                        <form action="{{ url('/categories/delete/' . $categorie->id) }}" method="POST"
                                              onsubmit="return confirm('Supprimer cette catégorie ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-100 rounded-b-xl">
                                                🗑️ Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="w-full flex justify-end mt-4">
            {{ $categories->links() }}
        </div>
    </div>
@endsection
