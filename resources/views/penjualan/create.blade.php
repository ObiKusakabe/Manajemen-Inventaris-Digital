@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Catat Penjualan</h2>

<form action="/penjualan" method="POST" class="bg-white p-6 shadow rounded-lg">
    @csrf

    <div class="mb-4">
        <label class="block mb-1">Produk</label>
        <select name="produk_id" class="w-full border p-2 rounded">
            @foreach ($products as $p)
            <option value="{{ $p->id }}">{{ $p->nama_produk }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Jumlah</label>
        <input type="number" name="jumlah" class="w-full border p-2 rounded" required>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Total Harga</label>
        <input type="number" name="total_harga" class="w-full border p-2 rounded" required>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Simpan</button>
</form>

@endsection
