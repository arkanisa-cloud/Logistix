@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')
    <h1 class="text-2xl font-bold">Edit Barang</h1>

    <form action="{{ route('items.update', $item) }}" method="POST" class="flex flex-col gap-5 rounded-lg border border-gray-200 bg-white p-6">
        @csrf
        @method('PUT')
        @include('items._form')
    </form>
@endsection
