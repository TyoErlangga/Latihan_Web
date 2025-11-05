@extends('layouts.app')
@section('title','Keranjang - DrinkStore')

@section('content')
<h3>Keranjang Belanja</h3>
@if(empty($cart))
  <p class="text-muted">Keranjang kosong. <a href="{{ route('home') }}">Kembali belanja</a></p>
@else
  <form action="{{ route('cart.update') }}" method="POST">@csrf
    <table class="table">
      <thead><tr><th>Produk</th><th>Harga</th><th>Jumlah</th><th>Subtotal</th><th></th></tr></thead>
      <tbody>
      @php $total = 0; @endphp
      @foreach($cart as $id => $item)
        @php $sub = $item['price'] * $item['qty']; $total += $sub; @endphp
        <tr>
          <td>
            <div class="d-flex align-items-center gap-2">
              <img src="{{ $item['image'] }}" style="width:60px;height:40px;object-fit:contain" alt="">
              <div>{{ $item['name'] }}</div>
            </div>
          </td>
          <td>{{ number_format($item['price'],0,',','.') }}</td>
          <td><input name="qty[{{ $id }}]" value="{{ $item['qty'] }}" class="form-control" style="width:80px"></td>
          <td>{{ number_format($sub,0,',','.') }}</td>
          <td><a href="{{ route('cart.remove', $id) }}" class="btn btn-sm btn-outline-danger">Hapus</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center">
      <div>
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">Lanjut belanja</a>
      </div>
      <div>
        <strong>Total: {{ number_format($total,0,',','.') }} IDR</strong>
        <button class="btn btn-primary ms-3">Checkout (Simulasi)</button>
      </div>
    </div>
  </form>
@endif
@endsection
