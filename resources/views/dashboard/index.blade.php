@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Dashboard Analitik</h2>
<button class="px-4 py-2 text-white bg-blue-600 rounded">
    Test Button
</button>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">

    <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="text-lg font-semibold">Total Produk</h3>
        <p class="text-3xl mt-2">{{ $totalProduk ?? 0 }}</p>
    </div>

    <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="text-lg font-semibold">Total Stok Masuk</h3>
        <p class="text-3xl mt-2">{{ $totalMasuk ?? 0 }}</p>
    </div>

    <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="text-lg font-semibold">Total Stok Keluar</h3>
        <p class="text-3xl mt-2">{{ $totalKeluar ?? 0 }}</p>
    </div>

</div>

@endsection
