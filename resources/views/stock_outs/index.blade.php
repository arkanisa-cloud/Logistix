@extends('layouts.app')

@section('title', 'Riwayat Barang Keluar')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <h1 class="text-2xl font-bold">Riwayat Barang Keluar</h1>
        <a href="{{ route('stock-outs.create') }}" class="rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Catat Barang Keluar</a>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
        <table class="w-full text-left text-sm">
            <caption class="sr-only">Riwayat transaksi barang keluar</caption>
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th scope="col" class="px-4 py-3">Tanggal</th>
                    <th scope="col" class="px-4 py-3">Kode</th>
                    <th scope="col" class="px-4 py-3">Barang</th>
                    <th scope="col" class="px-4 py-3">Jumlah Keluar</th>
                    <th scope="col" class="px-4 py-3">Penerima</th>
                    <th scope="col" class="px-4 py-3">Keterangan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($stockOuts as $stockOut)
                    <tr>
                        <td class="px-4 py-3">{{ $stockOut->date }}</td>
                        <td class="px-4 py-3">{{ $stockOut->item->code }}</td>
                        <td class="px-4 py-3">{{ $stockOut->item->name }}</td>
                        <td class="px-4 py-3">{{ $stockOut->quantity }}</td>
                        <td class="px-4 py-3">{{ $stockOut->recipent }}</td>
                        <td class="max-w-sm whitespace-pre-line break-words px-4 py-3">{{ $stockOut->description ?? '—' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-10 text-center text-gray-500">Belum ada transaksi barang keluar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
