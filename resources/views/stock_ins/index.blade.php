@extends('layouts.app')

@section('title', 'Riwayat Barang Masuk')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <h1 class="text-2xl font-bold">Riwayat Barang Masuk</h1>
        <a href="{{ route('stock-ins.create') }}" class="rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Catat Barang Masuk</a>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
        <table class="w-full text-left text-sm">
            <caption class="sr-only">Riwayat transaksi barang masuk</caption>
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th scope="col" class="px-4 py-3">Tanggal</th>
                    <th scope="col" class="px-4 py-3">Kode</th>
                    <th scope="col" class="px-4 py-3">Barang</th>
                    <th scope="col" class="px-4 py-3">Jumlah Masuk</th>
                    <th scope="col" class="px-4 py-3">Keterangan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($stockIns as $stockIn)
                    <tr>
                        <td class="px-4 py-3">{{ $stockIn->date }}</td>
                        <td class="px-4 py-3">{{ $stockIn->item->code }}</td>
                        <td class="px-4 py-3">{{ $stockIn->item->name }}</td>
                        <td class="px-4 py-3">{{ $stockIn->quantity }}</td>
                        <td class="max-w-sm whitespace-pre-line break-words px-4 py-3">{{ $stockIn->description ?? '—' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-10 text-center text-gray-500">Belum ada transaksi barang masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
