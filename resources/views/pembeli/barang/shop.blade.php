@extends('pembeli.layout_pembeli.main')

@section('title')
Belanja
@endsection

@section('container')
	<!--main area-->
	<main id="main" class="main-site left-sidebar">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{route('pembeli.index')}}" class="link">Home</a></li>
					<li class="item-link"><span>Belanja</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="/pembeli/images/shop_banner.png" alt=""></figure>
						</a>
					</div>
					<div class="wrap-shop-control">
						<h1 class="shop-title">DAFTAR BARANG</h1>
					</div><!--end wrap shop control-->
					<div class="row">
						<ul class="product-list grid-products equal-container">
                            @foreach($daftar_barang as $barang)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" title="image">
											<figure><img src="{{asset($barang->foto_barang)}}" alt="image"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" class="product-name"><span>{{$barang->nama_barang}}</span></a>
										<div class="wrap-price"><span class="product-price">{{$barang->harga_barang}}</span></div>
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" class="btn add-to-cart">Lihat</a>
									</div>
								</div>
							</li>
                            @endforeach
							
							<div class="wrap-show-advance-info-box style-1">
								<h3 class="title-box">Kategori Produk</h3>
							@foreach($daftar_barang_kategori as $barang)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" title="image">
											<figure><img src="{{asset($barang->foto_barang)}}" alt="image"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" class="product-name"><span>{{$barang->nama_barang}}</span></a>
										<div class="wrap-price"><span class="product-price">{{$barang->harga_barang}}</span></div>
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" class="btn add-to-cart">Lihat</a>
									</div>
								</div>
							</li>
							@endforeach
							</div>
						</ul>
					</div>
					<div class="wrap-pagination-info">
						<ul class="page-numbers">
							<li><span class="page-number-item current" >1</span></li>
							<li><a class="page-number-item" href="#" >2</a></li>
							<li><a class="page-number-item" href="#" >3</a></li>
							<li><a class="page-number-item next-link" href="#" >Next</a></li>
						</ul>
					</div>
				</div><!--end main products area-->
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Kategori</h2>
						<div class="widget-content">
							<ul class="list-category">
								<li class="category-item has-child-cate">
									<a href="{{route('pembeli.shop') . '?kategori=Anjing'}}" class="cate-link">Anjing</a>
								</li>
								<li class="category-item has-child-cate">
									<a href="{{route('pembeli.shop') . '?kategori=Kucing'}}" class="cate-link">Kucing</a>
								</li>
								<li class="category-item has-child-cate">
									<a href="{{route('pembeli.shop') . '?kategori=Ikan'}}" class="cate-link">Ikan</a>
								</li>
								<li class="category-item">
									<a href="{{route('pembeli.shop') . '?kategori=Burung'}}" class="cate-link">Burung</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->
				</div><!--end sitebar-->
			</div><!--end row-->
		</div><!--end container-->
	</main>
@endsection