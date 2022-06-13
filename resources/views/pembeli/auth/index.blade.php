<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="/pembeli/images/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/pembeli/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/pembeli/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/pembeli/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/pembeli/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/pembeli/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="/pembeli/css/style.css">
	<link rel="stylesheet" type="text/css" href="/pembeli/css/color-01.css">
</head>
<body class="home-page home-01 ">
{{--
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div> --}}

	 <!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Telephone: 0831-4831-6196" href="#" ><span class="icon label-before fa fa-mobile"></span>Telepon: 0831-4831-6196</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" href="{{route('pembeli.logout')}}">Logout</a></li>
								<li class="menu-item" ><a title="Register or Login" href="{{route('pembeli.profilPembeli',$pembeli->id)}}">Profil</a></li>

							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{route('pembeli.index')}}" class="link-to-home"><img src=" /pembeli/images/logo.png" alt="mercado"></a>
						</div>



					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{route('pembeli.index')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{route('pembeli.shop')}}" class="link-term mercado-item-title">Belanja</a>
								</li>
								<li class="menu-item">
									<a href="{{route('pembeli.chart')}}" class="link-term mercado-item-title">Keranjang</a>
								</li>
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">Contact Us</a>
								</li>
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">Tentang Kami</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

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
						<figure><img src="/pembeli/images/home-1-banner-1.jpg" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="/pembeli/images/home-1-banner-2.jpg" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>


			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Produk Baru</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="/pembeli/images/home-1-banner-2.jpg" width="1170" height="240" alt=""></figure>
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
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Kategori Produk</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="/pembeli/images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							<a href="#fashion_1a" class="tab-control-item active">Smartphone</a>
							<a href="#fashion_1b" class="tab-control-item">Watch</a>
							<a href="#fashion_1c" class="tab-control-item">Laptop</a>
							<a href="#fashion_1d" class="tab-control-item">Tablet</a>
						</div>
						<div class="tab-contents">

							<div class="tab-content-item active" id="fashion_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For Men</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Business Men Leather Laptop Tote Bags Man Crossbody </span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="/pembeli/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
										<div class="group-flash">
											<span class="flash-item new-label">new</span>
											<span class="flash-item sale-label">sale</span>
										</div>
										<div class="wrap-btn">
											<a href="#" class="function-link">quick view</a>
										</div>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
										<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
									</div>
								</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1b">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1c">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1d">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="/pembeli/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Pengiriman Cepat</h4>
								<p class="fc-desc">Cepat & Aman</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Asuransi</h4>
								<p class="fc-desc">3 Hari </p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Aman</h4>
								<p class="fc-desc">Pembayran Aman & Terpercaya</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Pelayan</h4>
								<p class="fc-desc">CS siap melayani anda 24 jam</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Alamat Kantor</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Jl. Raya Arahan Desa Rambatan Kulon Gg. Macan </p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">0831-4831-6196</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">petto@gmail.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Admin</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Ingin menjadi penjual? Hubungi</span>
										<b class="phone-number">0850-7890-1456</b>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="/pembeli/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						{{-- <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="/pembeli/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="/pembeli/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div> --}}

					</div>
				</div>

				{{-- <div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title">Quick Links</h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
									<li><span class="row-title">Mobiles:</span></li>
									<li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
									<li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
									<li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Tablets:</span></li>
									<li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
									<li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Fashion:</span></li>
									<li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
									<li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
									<li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
									<li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
									<li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
									<li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
									<li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
									<li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
									<li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div> --}}

			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2022 PETTO. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">Tentang Kami</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

	<script src="/pembeli/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="/pembeli/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="/pembeli/js/bootstrap.min.js"></script>
	<script src="/pembeli/js/jquery.flexslider.js"></script>
	<script src="/pembeli/js/chosen.jquery.min.js"></script>
	<script src="/pembeli/js/owl.carousel.min.js"></script>
	<script src="/pembeli/js/jquery.countdown.min.js"></script>
	<script src="/pembeli/js/jquery.sticky.js"></script>
	<script src="/pembeli/js/functions.js"></script>
</body>
</html>
