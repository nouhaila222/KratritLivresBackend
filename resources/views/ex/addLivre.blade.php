@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Ajouter un Livre</h1>



        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ url('/livres/store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700">Nom du livre</label>
                    <input type="text" name="nom"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Auteur</label>
                    <input type="text" name="auteur"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Stock</label>
                    <input type="number" name="stock"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Prix (€)</label>
                    <input type="number" step="0.01" name="prix"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Catégorie ID</label>
                    <select name="categorie_id" id="">
                        <option value="">Selectioner une categorie </option>
                        @foreach ($categories as $item)
                            <option value={{ $item->id }}>{{ $item->nom }}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Ajouter le livre
                </button>
            </form>
        </div>
    </div>
@endsection
