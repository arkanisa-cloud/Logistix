@extends('layouts.app')

@section('title', 'Rekap Inventaris')

@section('content')
    <div>
        <h1 class="text-2xl font-bold">Rekap Inventaris</h1>
        <p class="mt-2 text-sm text-gray-600">Ringkasan seluruh data inventaris dan stok terkini.</p>
    </div>

    <dl class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <div class="rounded-lg border border-gray-200 bg-white p-5">
            <dt class="text-sm text-gray-600">Total Jenis Barang</dt>
            <dd class="mt-2 text-3xl font-bold">{{ $totalItems }}</dd>
        </div>
        <div class="rounded-lg border border-gray-200 bg-white p-5">
            <dt class="text-sm text-gray-600">Stok Tersedia (Unit)</dt>
            <dd class="mt-2 text-3xl font-bold">{{ $totalStock }}</dd>
        </div>
        <div class="rounded-lg border border-gray-200 bg-white p-5">
            <dt class="text-sm text-gray-600">Total Masuk (Unit)</dt>
            <dd class="mt-2 text-3xl font-bold">{{ $totalIn }}</dd>
        </div>
        <div class="rounded-lg border border-gray-200 bg-white p-5">
            <dt class="text-sm text-gray-600">Total Keluar (Unit)</dt>
            <dd class="mt-2 text-3xl font-bold">{{ $totalOut }}</dd>
        </div>
    </dl>

    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
        <table class="w-full text-left text-sm">
            <caption class="px-4 py-4 text-left text-lg font-semibold">Stok Barang Terkini</caption>
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th scope="col" class="px-4 py-3">Kode</th>
                    <th scope="col" class="px-4 py-3">Nama</th>
                    <th scope="col" class="px-4 py-3">Kategori</th>
                    <th scope="col" class="px-4 py-3">Lokasi</th>
                    <th scope="col" class="px-4 py-3">Kondisi</th>
                    <th scope="col" class="px-4 py-3">Stok (Unit)</th>
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
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-10 text-center text-gray-500">Belum ada barang.</td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot class="border-t border-gray-200 bg-gray-50 font-semibold">
                <tr>
                    <th scope="row" colspan="5" class="px-4 py-3">Total Stok</th>
                    <td class="px-4 py-3">{{ $totalStock }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
