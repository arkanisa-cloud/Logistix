@extends('layouts.app')

@section('title', 'Barang Keluar')

@section('content')
    <h1 class="text-2xl font-bold">Catat Barang Keluar</h1>

    <form action="{{ route('stock-outs.store') }}" method="POST" class="flex flex-col gap-5 rounded-lg border border-gray-200 bg-white p-6">
        @csrf

        <div class="flex flex-col gap-2">
            <label for="item_id" class="text-sm font-medium">Barang</label>
            <select id="item_id" name="item_id" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
                <option value="">Pilih barang</option>
                @foreach ($items as $item)
                    <option value="{{ $item->id }}" @selected(old('item_id') == $item->id)>{{ $item->code }} — {{ $item->name }} (stok: {{ $item->quantity }})</option>
                @endforeach
            </select>
            @if ($items->isEmpty())
                <p class="text-sm text-gray-600">Tambahkan barang terlebih dahulu melalui menu Barang.</p>
            @endif
        </div>

        <div class="flex flex-col gap-2">
            <label for="quantity" class="text-sm font-medium">Jumlah Keluar</label>
            <input id="quantity" name="quantity" type="number" min="1" step="1" value="{{ old('quantity') }}" required
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
        </div>

        <div class="flex flex-col gap-2">
            <label for="recipent" class="text-sm font-medium">Penerima</label>
            <input id="recipent" name="recipent" type="text" value="{{ old('recipent') }}" required maxlength="255"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
        </div>

        <div class="flex flex-col gap-2">
            <label for="date" class="text-sm font-medium">Tanggal</label>
            <input id="date" name="date" type="date" value="{{ old('date', date('Y-m-d')) }}" required
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
        </div>

        <div class="flex flex-col gap-2">
            <label for="description" class="text-sm font-medium">Keterangan (opsional)</label>
            <textarea id="description" name="description" rows="3" maxlength="255"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">{{ old('description') }}</textarea>
        </div>

        <div class="flex flex-wrap items-center gap-4">
            <button type="submit" class="cursor-pointer rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Simpan</button>
            <a href="{{ route('stock-outs.index') }}" class="text-sm text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
@endsection
