@extends('layouts.app')

@section('title', 'Lokasi')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold">Daftar Lokasi</h1>
            <p class="mt-2 text-sm text-gray-600">Lokasi penyimpanan barang inventaris sekolah.</p>
        </div>
        <a href="{{ route('locations.create') }}" class="rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Tambah Lokasi</a>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
        <table class="w-full text-left text-sm">
            <caption class="sr-only">Daftar lokasi barang inventaris</caption>
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th scope="col" class="px-4 py-3">ID</th>
                    <th scope="col" class="px-4 py-3">Nama Lokasi</th>
                    <th scope="col" class="px-4 py-3">Deskripsi</th>
                    <th scope="col" class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($locations as $location)
                    <tr>
                        <td class="px-4 py-3">{{ $location->id }}</td>
                        <td class="px-4 py-3">{{ $location->name }}</td>
                        <td class="max-w-sm whitespace-pre-line break-words px-4 py-3">{{ $location->description ?? '—' }}</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('locations.edit', $location) }}" class="font-medium text-blue-700 hover:underline">Edit<span class="sr-only"> {{ $location->name }}</span></a>
                                <form action="{{ route('locations.destroy', $location) }}" method="POST" onsubmit="return confirm('Hapus lokasi ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="cursor-pointer font-medium text-red-700 hover:underline">Hapus<span class="sr-only"> {{ $location->name }}</span></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-10 text-center text-gray-500">Belum ada lokasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
