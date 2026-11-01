@extends('layouts.app')

@section('title', 'Barang')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold">Daftar Barang</h1>
            <p class="mt-2 text-sm text-gray-600">Data barang dan stok inventaris sekolah.</p>
        </div>
        <a href="{{ route('items.create') }}" class="rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Tambah Barang</a>
    </div>

    <form action="{{ route('items.index') }}" method="GET" class="flex flex-wrap items-end gap-4 rounded-lg border border-gray-200 bg-white p-4">
        <div class="flex min-w-0 flex-1 flex-col gap-2">
            <label for="search" class="text-sm font-medium">Cari kode atau nama barang</label>
            <input id="search" name="search" type="search" value="{{ request('search') }}" placeholder="Contoh: Laptop atau BRG-001"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
        </div>
        <div class="flex w-full flex-col gap-2 sm:w-auto">
            <label for="category_id" class="text-sm font-medium">Kategori</label>
            <select id="category_id" name="category_id" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
                <option value="">Semua kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(request('category_id') == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex w-full flex-col gap-2 sm:w-auto">
            <label for="condition" class="text-sm font-medium">Kondisi</label>
            <select id="condition" name="condition" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
                <option value="">Semua kondisi</option>
                <option value="baik" @selected(request('condition') == 'baik')>Baik</option>
                <option value="rusak_ringan" @selected(request('condition') == 'rusak_ringan')>Rusak Ringan</option>
                <option value="rusak_berat" @selected(request('condition') == 'rusak_berat')>Rusak Berat</option>
            </select>
        </div>
        <button type="submit" class="cursor-pointer rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Terapkan</button>
        <a href="{{ route('items.index') }}" class="px-2 py-2 text-sm text-gray-600 hover:underline">Reset</a>
    </form>

    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
        <table class="w-full text-left text-sm">
            <caption class="sr-only">Daftar barang inventaris beserta kategori, lokasi, kondisi, dan stok</caption>
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th scope="col" class="px-4 py-3">Kode</th>
                    <th scope="col" class="px-4 py-3">Nama</th>
                    <th scope="col" class="px-4 py-3">Kategori</th>
                    <th scope="col" class="px-4 py-3">Lokasi</th>
                    <th scope="col" class="px-4 py-3">Kondisi</th>
                    <th scope="col" class="px-4 py-3">Stok</th>
                    <th scope="col" class="px-4 py-3">Deskripsi</th>
                    <th scope="col" class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($items as $item)
                    <tr>
                        <td class="px-4 py-3">{{ $item->code }}</td>
                        <td class="px-4 py-3">{{ $item->name }}</td>
                        <td class="px-4 py-3">{{ $item->category->name }}</td>
                        <td class="px-4 py-3">{{ $item->location->name }}</td>
                        <td class="px-4 py-3">{{ ucfirst(str_replace('_', ' ', $item->condition)) }}</td>
                        <td class="px-4 py-3">{{ $item->quantity }}</td>
                        <td class="max-w-sm whitespace-pre-line break-words px-4 py-3">{{ $item->description ?? '—' }}</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('items.edit', $item) }}" class="font-medium text-blue-700 hover:underline">Edit<span class="sr-only"> {{ $item->name }}</span></a>
                                <form action="{{ route('items.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus barang ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="cursor-pointer font-medium text-red-700 hover:underline">Hapus<span class="sr-only"> {{ $item->name }}</span></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-4 py-10 text-center text-gray-500">Tidak ada barang yang ditampilkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
