@extends('pembeli.layout_pembeli.main')

@section('container')
	<!--main area-->
	<main id="main" class="main-site">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{route('pembeli.index')}}" class="link">Beranda</a></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Keranjang</h3>
					<ul class="products-cart">
                        @foreach($daftar_pembelian as $pembelian)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{asset($pembelian->barang->foto_barang)}}" width="900" height="900" alt=""></figure>
							</div>
							<div class="product-name">
								<h5>Nama Produk</h5>
								<a class="link-to-product" href="{{route('pembeli.barang.detail', $pembelian->barang->id)}}">{{$pembelian->barang->nama_barang}}</a>
							</div>
							<div class="quantity">
								<h5>Jumlah Barang</h5>
								<div class="quantity-input">
									<h4>{{$pembelian->jumlah_barang}}</h4>
								</div>
							</div>
							<div class="price-field sub-total">
								<h5>Total Harga</h5>
								<p class="price">{{$pembelian->barang->harga_barang * $pembelian->jumlah_barang}}</p>
							</div>
							<div class="price-field sub-total">
								{{-- <form action="{{route('pembeli.formulir_alamat', $pembelian->id)}}">
									<button type="submit" class="btn btn-inverse-danger btn-sm">
										Beli
									</button>
								</form>
								<form action="{{route('pembeli.pesan.hapus', $pembelian->id)}}", method="POST">
									@csrf
									<button type="submit" class="btn btn-inverse-danger btn-sm">
										Hapus
									</button>
								</form> --}}
                                <h5>Status Pemesanan</h5>
                                <p>{{$pembelian->status_pembayaran}}</p>
							</div>
						</li>
                        @endforeach												
					</ul>
				</div>
			</div><!--end main content area-->
		</div><!--end container-->
	</main>
@endsection