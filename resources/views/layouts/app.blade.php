<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen ">
    <nav class="bg-indigo-600 shadow-md">
        <div class="max-w-5xl mx-auto px-4 flex item-center justify-between">
            <a href="{{ route('produits.index') }}" class="text=white text-xl font-bold">
                Gestion des produits
            </a>
            <a href="{{ route('produits.create') }}"
                class="bg-white text-indigo-600 font-semibold px-4 py-2 rounded-lg hover:bg-indigo-50 transition">
                + Nouveau produit
            </a>


        </div>


    </nav>

    <main class="max-w-5xl mx-auto px-4 py-8">
        @if (session('success'))
        <div class="mb-6 bg-green-100 border border-green-50 text-green-800 px-4 py-3 rounded-lg item-center gap-2 ">
            <span>  {{ session('success') }}</span>

        </div>

        @endif
        @yield('content')

    </main>


</body>

</html>
