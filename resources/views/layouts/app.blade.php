<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventaris') — Logistix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-900">
    <header class="border-b border-gray-200 bg-white">
        <nav class="mx-auto flex max-w-5xl flex-wrap items-center gap-6 px-4 py-4" aria-label="Navigasi utama">
            <a href="{{ route('categories.index') }}" class="text-xl font-bold text-blue-700">Logistix</a>
            <a href="{{ route('categories.index') }}" class="text-sm font-medium hover:underline">Kategori</a>
            <a href="{{ route('items.index') }}" class="text-sm font-medium hover:underline">Barang</a>
            <a href="{{ route('stock-ins.index') }}" class="text-sm font-medium hover:underline">Barang Masuk</a>
            <a href="{{ route('stock-outs.index') }}" class="text-sm font-medium hover:underline">Barang Keluar</a>
            <a href="{{ route('reports.index') }}" class="text-sm font-medium hover:underline">Rekap</a>
            @if (Route::has('locations.index'))
                <a href="{{ route('locations.index') }}" class="text-sm font-medium hover:underline">Lokasi</a>
            @endif
        </nav>
    </header>

    <main class="mx-auto flex max-w-5xl flex-col gap-6 px-4 py-8">
        @if (session('success'))
            <div role="status" class="rounded-lg border border-green-200 bg-green-50 p-4 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div role="alert" class="rounded-lg border border-red-200 bg-red-50 p-4 text-red-800">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div role="alert" class="rounded-lg border border-red-200 bg-red-50 p-4 text-red-800">
                <ul class="list-inside list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
