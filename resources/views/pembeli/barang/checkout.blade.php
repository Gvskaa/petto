<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CheckOut</title>
	<link rel="shortcut icon" type="image/x-icon" href="/pembeli/images/favicon.ico">
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
<body class=" checkout page ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

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
								<li class="menu-item" ><a title="Register or Login" href="pembeli.logout">Logout</a></li>
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
									<a href="shop.html" class="link-term mercado-item-title">Belanja</a>
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

	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">Billing Address</h3>
					@csrf
					<form action="#" method="POST" name="frm-billing">
						<p class="row-in-form">
							<label for="fname">Nama<span>*</span></label>
							<input id="fname" type="text" name="fname" value="{{$pembelian->pembeli->nama_pembeli}}" placeholder="Your name" readonly>
						</p>
						<p class="row-in-form">
							<label for="email">Email</label>
							<input id="email" type="email" name="email" value="{{$pembelian->pembeli->email}}" placeholder="Type your email" readonly>
						</p>
						<p class="row-in-form">
							<label for="phone">Nomor Telepom<span>*</span></label>
							<input id="phone" type="number" name="phone" value="{{$pembelian->pembeli->tlp_pembeli}}" placeholder="10 digits format" readonly>
						</p>
						<p class="row-in-form">
							<label for="add">Alamat</label>
							<input id="add" type="text" name="add" value="{{$pembelian->pembeli->alamat_pembeli}}" placeholder="Street at apartment number" readonly>
						</p>
						<p class="row-in-form fill-wife">
							
						</p>
					</form>
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Upload Bukti Pembayaran</h4>
						<div class="choose-payment-methods">
							<div class="form-group">
							</div>
						</div>
						<p class="summary-info grand-total"><span>Total Bayar</span> <span class="grand-total-price">Rp. {{$pembelian->barang->harga_barang * $pembelian->jumlah_barang}}</span></p>
						
						<form action="{{route('pembeli.formulir.pemesanan',$pembelian->id)}}" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="file" class="form-control form-control-lg" name="bukti_pembayaran" >
							<button class="btn btn-medium">Upload Bukti Pembayaran</button>
						</form>
					</div>
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
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
	<script src="/pembeli/js/bootstrap.min.js"></script>
	<script src="/pembeli/js/chosen.jquery.min.js"></script>
	<script src="/pembeli/js/owl.carousel.min.js"></script>
	<script src="/pembeli/js/jquery.sticky.js"></script>
	<script src="/pembeli/js/functions.js"></script>
	<!--footer area-->

</body>
</html>