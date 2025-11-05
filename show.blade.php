@extends('layouts.app')

@section('content')
<div class="container py-5 text-center" style="background: linear-gradient(135deg, #0d47a1, #42a5f5); color: white; border-radius: 20px;">
    <h2 class="fw-bold mb-4">Detail Produk</h2>

    <div class="card mx-auto shadow-lg" style="max-width: 600px; border-radius: 15px;">
        <div class="card-body">
            <img src="{{ asset('images/'.$product['image']) }}" 
                 alt="{{ $product['name'] }}" 
                 class="img-fluid mb-3" 
                 style="width: 250px; height: 250px; object-fit: contain;">

            <h3 class="fw-bold text-primary">{{ $product['name'] }}</h3>
            <p class="text-muted">{{ $product['info'] }}</p>
            <h4 class="fw-bold text-success mt-3">Rp {{ number_format($product['price'], 0, ',', '.') }}</h4>

            <div class="mt-4">
                <a href="{{ url('/products') }}" class="btn btn-outline-primary btn-lg">
                    ← Kembali ke Produk
                </a>
                <button class="btn btn-primary btn-lg">🛒 Tambah ke Keranjang</button>
            </div>
        </div>
    </div>
</div>
@endsection
