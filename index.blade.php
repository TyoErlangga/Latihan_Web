@extends('layouts.app')

@section('content')
<h2 class="fw-bold text-center mb-4 text-primary">Daftar Produk Kami</h2>

<div class="row justify-content-center">
    @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card text-center p-3">
                <img src="{{ asset('images/'.$product['image']) }}" class="card-img-top mx-auto" alt="{{ $product['name'] }}" style="width: 200px; height: 200px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $product['name'] }}</h5>
                    <p class="text-muted">{{ $product['info'] }}</p>
                    <p class="text-primary fw-bold">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <a href="{{ url('/products/'.$product['id']) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
