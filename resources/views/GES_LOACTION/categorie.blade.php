@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestion des Catégories</h1>

   
    <!-- Liste des catégories -->
    <div class="card mr-auto">
        <div class="card-header">Liste des Catégories</div>
        <button class="btn"><a href="{{route("url")}}"></a></button>
        <div class="card-body">
            <table class="table border ">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Nom</th>
                        <th class="p-2">Description</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $categorie)
                    <tr>
                        <td class="p-1 px-2 border ">{{ $categorie->id }}</td>
                        <td class="p-1 px-2 border ">{{ $categorie->nom }}</td>
                        <td class="p-1 px-2 border ">{{ $categorie->description }}</td>
                        <td class="c-c-c ">
                            <a href="" class=" text-blue-500 btn-warning">Modifier</a>
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" text-red-500 font-semibold" onclick="return confirm('Voulez-vous vraiment supprimer cette catégorie ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
