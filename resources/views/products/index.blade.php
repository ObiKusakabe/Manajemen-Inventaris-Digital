@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>

<a href="/products/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-4 inline-block">
    + Tambah Produk
</a>

<div class="bg-white p-4 shadow rounded-lg overflow-x-auto">
    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100">
        <tr>
            <th class="p-2">Nama</th>
            <th class="p-2">Kategori</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Stok</th>
            <th class="p-2">Aksi</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($products as $p)
        <tr class="border-b">
            <td class="p-2">{{ $p->nama_produk }}</td>
            <td class="p-2">{{ $p->kategori->nama_kategori ?? '-' }}</td>
            <td class="p-2">Rp {{ number_format($p->harga) }}</td>
            <td class="p-2">{{ $p->stok }}</td>
            <td class="p-2 flex gap-2">
                <a href="/products/{{ $p->id }}/edit" class="text-blue-600">Edit</a>

                <form action="/products/{{ $p->id }}" method="POST" onsubmit="return confirm('Hapus produk?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
</div>

@endsection
