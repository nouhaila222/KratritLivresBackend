@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Ajouter un categorie</h1>



        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ url('/livres/store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700">Nom du categorie</label>
                    <input type="text" name="nom"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">description</label>
                    <textarea type="text" name="auteur"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required></textarea>
                </div>

                

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Ajouter categorie
                </button>
            </form>
        </div>
    </div>
@endsection
