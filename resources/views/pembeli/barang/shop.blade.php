@extends('pembeli.layout_pembeli.main')

@section('container')
	<!--main area-->
	<main id="main" class="main-site left-sidebar">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{route('pembeli.index')}}" class="link">home</a></li>
					<li class="item-link"><span>Shop</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="/pembeli/images/shop-banner.jpg" alt=""></figure>
						</a>
					</div>
					<div class="wrap-shop-control">
						<h1 class="shop-title">Daftar Barang</h1>
					</div><!--end wrap shop control-->
					<div class="row">
						<ul class="product-list grid-products equal-container">
                            @foreach($daftar_barang as $barang)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="{{asset($barang->foto_barang)}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>{{$barang->nama_barang}}</span></a>
										<div class="wrap-price"><span class="product-price">{{$barang->harga_barang}}</span></div>
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" class="btn add-to-cart">Keranjang</a>
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
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="{{asset($barang->foto_barang)}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>{{$barang->nama_barang}}</span></a>
										<div class="wrap-price"><span class="product-price">{{$barang->harga_barang}}</span></div>
										<a href="{{route('pembeli.barang.detail', $barang->id)}}" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
<<<<<<< HEAD
=======
							@endforeach
							</div>
>>>>>>> 1b8b5740aef6acf43875dc5ce2f66438e3ed490a
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
<<<<<<< HEAD
									<a href="#" class="cate-link">Makanan</a>
									<span class="toggle-control">+</span>
									<ul class="sub-cate">
										<li class="category-item"><a href="#" class="cate-link">Kering</a></li>
										<li class="category-item"><a href="#" class="cate-link">Basah</a></li>
									</ul>
=======
									<a href="{{route('pembeli.shop') . '?kategori=Anjing'}}" class="cate-link">Anjing</a>
								</li>
								<li class="category-item has-child-cate">
									<a href="#" class="cate-link">Furnitures & Home Decors</a>
								</li>
								<li class="category-item has-child-cate">
									<a href="#" class="cate-link">Digital & Electronics</a>
>>>>>>> 1b8b5740aef6acf43875dc5ce2f66438e3ed490a
								</li>
								<li class="category-item">
									<a href="#" class="cate-link">Obat</a>
								</li>
								<li class="category-item">
									<a href="#" class="cate-link">Aksesoris</a>
								</li>
								<li class="category-item">
									<a href="#" class="cate-link">Organics & Spa</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->
				</div><!--end sitebar-->
			</div><!--end row-->
		</div><!--end container-->
	</main>
@endsection