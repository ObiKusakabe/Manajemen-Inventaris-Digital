@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>

<form action="/products" method="POST" class="bg-white p-6 shadow rounded-lg">
    @csrf

    <div class="mb-4">
        <label class="block mb-1">Nama Produk</label>
        <input name="nama_produk" type="text" class="w-full border rounded p-2" required>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Kategori</label>
        <select name="kategori_id" class="w-full border rounded p-2">
            @foreach ($kategori as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Harga</label>
        <input name="harga" type="number" class="w-full border rounded p-2" required>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Stok</label>
        <input name="stok" type="number" class="w-full border rounded p-2" required>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Simpan</button>
</form>

@endsection
