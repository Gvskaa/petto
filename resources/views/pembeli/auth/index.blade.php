@extends('pembeli.layout_pembeli.main')

@section('title')
Home
@endsection

@section('container')
	<main id="main">
		<div class="container">
			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					@foreach ( $daftar_artikel as $artikel )

                    <div class="item-slide">
						<img src="{{asset($artikel->gambar_artikel) }}"  width="580" height="190">
						<div class="slide-info slide-1">
							<h2 class="f-title">{{$artikel->judul_artikel}}</h2>
							<a href="{{route('pembeli.artikel.lihat', $artikel->id)}}" class="btn-link" >Lihat Selengkapnya</a>
						</div>
					</div>
                    @endforeach
				</div>
			</div>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="/pembeli/images/cat_banner.png" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="/pembeli/images/purina_banner.png" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>


			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Produk Baru</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="/pembeli/images/bannerkucing.png" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									@foreach($daftar_barang as $barang)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{route('pembeli.barang.detail', $barang->id)}}" name="Barang">
												<figure><img src="{{asset($barang->foto_barang)}}" width="200" height="200" alt="Barang"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">Baru</span>
											</div>
											<div class="wrap-btn">
												<a href="{{route('pembeli.barang.detail', $barang->id)}}" class="function-link">Detail Barang</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$barang->nama_barang}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$barang->harga_barang}}</span></div>
										</div>
									</div>
									@endforeach

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			{{-- <div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Kategori Produk</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="/pembeli/images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							<a href="{{route('pembeli.index') . '?kategori=Anjing'}}" class="tab-control-item">Anjing</a>
							<a href="#fashion_1b" class="">Kucing</a>
							<a href="#fashion_1c" class="">Ikan</a>
							<a href="#fashion_1d" class="">Burung</a>
						</div>
						<div class="tab-contents">
							@foreach($daftar_barang_kategori as $barang)
							<div class="tab-content-item active" id="fashion_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{route('pembeli.barang.detail', $barang->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{asset($barang->foto_barang)}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$barang->nama_barang}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$barang->harga_barang}}</span></div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</main>
@endsection