{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> --}}







<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		@yield('title')
	</title>
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
	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							{{-- <ul>
								<li class="menu-item" >
									<a title="Telephone: 0831-4831-6196" href="#" ><span class="icon label-before fa fa-mobile"></span>Telepon: 0831-4831-6196</a>
								</li>
							</ul> --}}
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
									<a href="{{route('pembeli.pemesanan')}}" class="link-term mercado-item-title">Pemesanan</a>
								</li>
								<li class="menu-item">
									<a href="#contact" class="link-term mercado-item-title">Hubungi Kami</a>
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
            <hr>
            <div class="container bootstrap snippet">
                <div class="row">
                    <div class="col-sm-10">
                        <h1>Profile</h1>
                        <h1>{{$pembeli->nama_pembeli}}</h1>
                    </div>
                    <div class="col-sm-2"><a href="{{route('pembeli.logout')}}" class="pull-right"><img title="profile image"
                        class="img-circle img-responsive" alt="" width="100" height="100"
                        src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
                    </div>
                <div class="row">
                    <div class="col-sm-3">
                        <!--left col-->
                        {{-- <div class="text-center">
                            <img src="{{asset($pembeli->foto_pembeli)}}" class="avatar img-circle img-thumbnail"
                                alt="avatar">
                            <h6>Upload a different photo...</h6>
                            <input type="file" class="text-center center-block file-upload" name="foto_pembeli">
                        </div> --}}
                        </hr><br>
            
            
                        {{-- <div class="panel panel-default">
                            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
                        </div>
            
            
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125
                            </li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13
                            </li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37
                            </li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78
                            </li>
                        </ul>
            
                        <div class="panel panel-default">
                            <div class="panel-heading">Social Media</div>
                            <div class="panel-body">
                                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i
                                    class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i
                                    class="fa fa-google-plus fa-2x"></i>
                            </div>
                        </div> --}}
            
                    </div>
                    <!--/col-3-->
                    <div class="col-sm-9">
                        {{-- <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                            <li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                            <li><a data-toggle="tab" href="#settings">Menu 2</a></li>
                        </ul> --}}
            
            
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                
                                <form class="form" action="{{route('pembeli.ubah.profilPembeli')}}" method="post" id="registrationForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
            
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Nama</h4>
                                            </label>
                                            <input type="text" class="form-control" name="nama_pembeli" id="first_name"
                                                value="{{$pembeli->nama_pembeli}}" title="enter your first name if any.">
                                        </div>
                                    </div>
            
            
                                    <div class="form-group">
            
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Jenis Kelamin</h4>
                                            </label>
                                            <input type="text" class="form-control" name="jk_pembeli" id="phone"
                                                value="{{$pembeli->jk_pembeli}}" title="enter your phone number if any.">
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Nomor Telepon</h4>
                                            </label>
                                            <input type="text" class="form-control" name="tlp_pembeli" id="mobile"
                                                value="{{$pembeli->tlp_pembeli}}" title="enter your mobile number if any.">
                                        </div>
                                    </div>
                                    <div class="form-group">
            
                                        <div class="col-xs-6">
                                            <label for="email">
                                                <h4>Email</h4>
                                            </label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{$pembeli->email}}" title="enter your email.">
                                        </div>
                                    </div>
                                    <div class="form-group">
            
                                        <div class="col-xs-6">
                                            <label for="email">
                                                <h4>Alamat</h4>
                                            </label>
                                            <input type="text" class="form-control" name="alamat_pembeli" id="location" value="{{$pembeli->alamat_pembeli}}"
                                                title="enter a location">
                                        </div>
                                    </div>
                                    <div class="form-group">
            
                                        <div class="col-xs-6">
                                            <label for="password">
                                                <h4>Password</h4>
                                            </label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                value="password" title="enter your password.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit"><i
                                                    class=""></i> Simpan</button>
                                        </div>
                                    </div>
                                </form>
            
                                <hr>
            
                            </div>
                            <!--/tab-pane-->
                        </div>
                        <!--/tab-pane-->
                    </div>
                    <!--/tab-content-->
                </div>
                <!--/col-9-->
            </div>
            <!--/row-->
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
								<h4 class="fc-name">Gratis Biaya Pengiriman</h4>
								<p class="fc-desc">Gratis pada pembelian diatas 100rb</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Garansi</h4>
								<p class="fc-desc">30 Hari uang kembali</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Pembayaran Mudah</h4>
								<p class="fc-desc">Sistem pembayaran yang mudah</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Bantuan Online</h4>
								<p class="fc-desc">Kami dapat membantu 24/7</p>
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
								<h3 id="contact" class="item-header">Detail Kontak</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Jl. Raya Lohbener Lama No. 08, Indramayu, Jawa Barat</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">0831-4831-6196</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">petto@petmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Hubungi Kami</span>
										<b class="phone-number">0831-4831-6196</b>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Bantuan Akun</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="{{route('pembeli.profilPembeli',$pembeli->id)}}" class="link-term">Akun Saya</a></li>
												<li class="menu-item"><a href="{{route('pembeli.chart')}}" class="link-term">Keranjang</a></li>
												<li class="menu-item"><a href="{{route('pembeli.logout')}}" class="link-term">Keluar</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Infomasi</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="{{route('pembeli.pemesanan')}}" class="link-term">Riwayat Pemesanan</a></li>
												<li class="menu-item"><a href="#contact" class="link-term">Hubungi Kami</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						{{-- <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Pembayaran yang kami dukung</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="/pembeli/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div> --}}

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Media Sosial</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
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
						</div>
					</div>
				</div>
				<br>
				<br>
			</div>
			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2022 Petto. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>							
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
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>