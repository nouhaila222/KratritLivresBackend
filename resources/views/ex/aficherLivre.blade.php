@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Books List</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nom</th>
                        <th class="border border-gray-300 px-4 py-2">Auteur</th>
                        <th class="border border-gray-300 px-4 py-2">Stock</th>
                        <th class="border border-gray-300 px-4 py-2">Prix (€)</th>
                        <th class="border border-gray-300 px-4 py-2">Catégorie</th>
                        <th class="border border-gray-300 px-4 py-2">Créé le</th>
                        <th class="border border-gray-300 px-4 py-2">Mis à jour</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livres as $book)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $book->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->nom }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->auteur }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->stock }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ number_format($book->prix, 2) }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->categorie_id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->created_at->format('d/m/Y H:i') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
