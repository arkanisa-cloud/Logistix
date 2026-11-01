@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
    <h1 class="text-2xl font-bold">Tambah Kategori</h1>

    <form action="{{ route('categories.store') }}" method="POST"
        class="flex flex-col gap-5 rounded-lg border border-gray-200 bg-white p-6">
        @csrf

        <div class="flex flex-col gap-2">
            <label for="name" class="text-sm font-medium">Nama Kategori</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required maxlength="255"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-600 focus:outline-2 focus:outline-blue-600">
        </div>

        <div class="flex flex-col gap-2">
            <label for="description" class="text-sm font-medium">Deskripsi (opsional)</label>
            <textarea id="description" name="description" rows="3" maxlength="255"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-600 focus:outline-2 focus:outline-blue-600">{{ old('description') }}</textarea>
        </div>

        <div class="flex flex-wrap items-center gap-4">
            <button type="submit"
                class="cursor-pointer rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Simpan</button>
            <a href="{{ route('categories.index') }}" class="text-sm text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
@endsection
