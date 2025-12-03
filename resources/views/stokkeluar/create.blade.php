@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Tambah Stok Keluar</h2>

<form action="/stok-keluar" method="POST" class="bg-white p-6 shadow rounded-lg">
    @csrf

    <div class="mb-4">
        <label class="block mb-1">Produk</label>
        <select name="produk_id" class="w-full border p-2 rounded">
            @foreach ($produk as $p)
            <option value="{{ $p->id }}">{{ $p->nama_produk }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Jumlah</label>
        <input type="number" name="jumlah" class="w-full border p-2 rounded" required>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Simpan</button>
</form>

@endsection
