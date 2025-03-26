@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="w-full r-b-c">

            <h1 class="text-2xl font-semibold text-gray-800 mb-4">Books List</h1>
            <div class="r-s-c">
                <a href="/livres/add" class="r-c-c p-2 px-4 rounded-xl bg-blue-500 text-white font-semibold">Ajouter
                    livre
                    <svg class="stroke-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" strokelinecap="round" strokelinejoin="round" width={32} height={32}
                        strokeWidth={1}>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>

                    </svg>
                </a>
            </div>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nom</th>
                        <th class="border border-gray-300 px-4 py-2">Auteur</th>
                        <th class="border border-gray-300 px-4 py-2">Stock</th>
                        <th class="border border-gray-300 px-4 py-2">Prix ( MAD )</th>
                        <th class="border border-gray-300 px-4 py-2">Catégorie</th>
                        <th class="border border-gray-300 px-4 py-2">Créé le</th>
                        <th class="border border-gray-300 px-4 py-2">Mis à jour</th>
                        <th class="border border-gray-300 px-4 py-2">Action</th>
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
                            <td class="border border-gray-300 px-4 py-2">{{ $book->categorie->nom }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->created_at->format('d/m/Y H:i') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->updated_at->format('d/m/Y H:i') }}</td>
                            <td class="border  c-c-c border-gray-300 px-4 py-2">
                                <div class="border group relative border-gray-300 rounded-md p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#5f6368">
                                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                                    </svg>
                                    <div
                                        class="absolute z-10 hidden group-hover:flex w-[200px] top-0 p-2 rounded-xl bg-white right-0 c-s-s drop-shadow-xl  action_container">
                                        <a href={{url("/livres/update/". $book->id)}}
                                            class="r-s-c mb-4 p-2 px-3 border border-gray-300 w-full rounded-xl font-semibold">
                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" strokelinecap="round"
                                                strokelinejoin="round" width={20} height={20} strokeWidth={1.25}>
                                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                                                <path d="M13.5 6.5l4 4"></path>
                                                <path d="M16 19h6"></path>
                                            </svg>
                                            Modifier
                                        </a>
                                        <a href=""
                                            class="r-s-c  p-2 px-3 border text-red-500 border-red-300 w-full rounded-xl font-semibold">

                                            <svg class="mr-2 stroke-2" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                strokelinecap="round" strokelinejoin="round" width={20} height={20}
                                                strokeWidth={1.25}>
                                                <path d="M4 7l16 0"></path>
                                                <path d="M10 11l0 6"></path>
                                                <path d="M14 11l0 6"></path>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                            </svg>
                                            Suprimer
                                        </a>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-full r-e-c mt-4">
            {{ $livres->links() }}
        </div>
    </div>
@endsection
