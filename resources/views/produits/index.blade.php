@extends('layouts.app')

@section('content')
    @if ($produits->isEmpty())
        <div class="bg-white rounded-xl shadow p-12 text-center text-gray-400">
            <p class="text-lg "> Aucun produits pour l'instant </p>
            <a href="{{ route('produits.create') }}" class="mt-4 inline-block bg-indigo-600 text-white px-5 py-2 rounded-lg ">
                Creer le premier produit </a>



        </div>
    @else
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-indigo-50 text-indigo-700 text-sm uppercase ">
                    <tr>
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">libelle</th>
                        <th class="px-6 py-4">Prix</th>

                        <th class="px-6 py-4 text-center">Action</th>


                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($produits as $produit)
                        <tr class="hover:gb-gray-50 transition">
                            <td class="py-6 px-4 text-gray-400 text-sm">{{ $produit->id }}</td>
                            <td class="py-6 px-4 text-gray-800 font-medium ">{{ $produit->libelle }}</td>
                            <td class="py-6 px-4 text-gray-800 ">{{ $produit->price }}</td>
                            <td class="py-6 px-4 text-center  space-x-2">
                                <a href="{{ route('produits.edit',$produit->id) }}">Modifier</a>
                                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" class="inline-block" onsubmit="return confirm('supprimer ce produit?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Supprimer</button>


                                </form>

                            </td>


                        </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    @endif
@endsection
