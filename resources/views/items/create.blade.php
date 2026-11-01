@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')
    <h1 class="text-2xl font-bold">Tambah Barang</h1>

    @if ($categories->isEmpty() || $locations->isEmpty())
        <p role="status" class="rounded-lg border border-amber-200 bg-amber-50 p-4 text-amber-900">Tambahkan kategori dan
            lokasi terlebih dahulu melalui menu navigasi agar barang dapat disimpan.</p>
    @endif

    <form action="{{ route('items.store') }}" method="POST"
        class="flex flex-col gap-5 rounded-lg border border-gray-200 bg-white p-6">
        @csrf
        @include('items._form')
    </form>
@endsection
