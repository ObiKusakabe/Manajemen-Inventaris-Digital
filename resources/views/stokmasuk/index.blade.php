@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Stok Masuk</h2>

<a href="/stok-masuk/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-4 inline-block">
    + Tambah Stok Masuk
</a>

<div class="bg-white p-4 shadow rounded-lg overflow-x-auto">
    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100">
        <tr>
            <th class="p-2">Produk</th>
            <th class="p-2">Jumlah</th>
            <th class="p-2">Tanggal</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($stokMasuk as $d)
        <tr class="border-b">
            <td class="p-2">{{ $d->product->nama_produk }}</td>
            <td class="p-2">{{ $d->jumlah }}</td>
            <td class="p-2">{{ $d->tanggal }}</td>
        </tr>
        @endforeach
        </tbody>

    </table>
</div>

@endsection
