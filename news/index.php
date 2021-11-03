<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Anasayfa</title>

	<?php include 'theme/src.php' ?>
</head>
<body>
	

	<nav class="topbar p-2">
		<div class=" container">
			<div class="row justify-content-between align-items-center">
				<div>
					<a href="index.php"><img src="assets/img/logo.png" alt=""></a>
				</div>

				<div class="d-flex">
					<div class="info-box">
						<span>BIST<i class="fas fa-minus p-1" aria-hidden="true"></i></span>
						<span class="text-white">1,456 ₺</span>
					</div>

					<div class="info-box">
						<span>EURO<i class="fas fa-caret-up p-1"></i></span>
						<span class="text-white">1,456 ₺</span>
					</div>
					<div class="info-box">
						<span>DOLAR <i class="fas fa-caret-down p-1"></i></span>
						<span class="text-white">1,456 ₺</span>
					</div>
					<div class="info-box">
						<span>ALTIN<i class="fas fa-caret-up p-1"></i></span>
						<span class="text-white">1,456 ₺</span>
					</div>
				</div>

				<div class="d-flex align-items-center">
					<div class="date p-3">
						<span>2 Nisan Cuma</span>
						<div>
							<span class="font-size:16px">17</span>
							<span> Güneşli</span>
						</div>
					</div>
					<div class="socialmedia m-3">
						<i class="fab fa-facebook-f"></i>
						<i class="fa fa-instagram fw-bold" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<nav class="navbar">
		<div class="container p-0">
			<div class="topnav">
				<a href="#"><img src="assets/img/logo.png" alt="" class="logo"></a>
				<div id="myLinks">
					<ul class="navbar-nav">
						<li>    
							<div class="dropdown">
								<i class="fa fa-bars dropbtn" aria-hidden="true"></i>
								<div class="dropdown-content">
									<a href="#">Link 1</a>
									<a href="#">Link 2</a>
									<a href="#">Link 3</a>
								</div>
							</div>
						</li>

						<li><a href="#">Lorem</a></li>
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Lorem</a></li>			
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Lorem</a></li>

						<li>
							<div class="search d-flex align-items-center">
								<i class="fa fa-search" aria-hidden="true"></i>
								<input type="text" name="search" placeholder="Search.." class="text-white">
							</div>	
						</li>
					</ul>
				</div>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars "></i>
				</a>
			</div>
		</div>
	</nav>



	<div  id="slider-header" class="mt-4 container slider-header">
		<div class="row">
			<nav class="thumb-nav">
				<a href="#"><span>1</span></a>
				<a href="#"><span>2</span></a>
				<a href="#"><span>3</span></a>
				<a href="#"><span>4</span></a>
			</nav>
			<ul class="container-slider">
				<li style="background: url('assets/img/bitcoin-with-other.png') no-repeat center center; -webkit-background-size: cover">
					<div class="header-title">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<h3>Lorem ipsum dolor sit amet consectetur</h3>
					</div>
				</li>
				<li style="background: url('assets/img/bitcoin-with-other-coins-4AV2V4X.jpg') no-repeat center center; -webkit-background-size: cover">
					<div class="header-title">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<h3>Lorem ipsum dolor sit amet consectetur</h3>
					</div>
				</li>
				<li style="background: url('assets/img/bitcoin-with-other.png') no-repeat center center; -webkit-background-size: cover">
					<div class="header-title">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<h3>Lorem ipsum dolor sit amet consectetur</h3>
					</div>
				</li>
				<li style="background: url('assets/img/bitcoin-with-other-coins-4AV2V4X.jpg') no-repeat center center; -webkit-background-size: cover">
					<div class="header-title">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<h3>Lorem ipsum dolor sit amet consectetur</h3>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="container p-0">
		<div class="row m-0 ">
			<div class="col-md-8 mt-4 p-0">
				<div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block" src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="First slide">
						</div>

						<div class="carousel-item">
							<img class="d-block" src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="First slide">
						</div>

						<div class="carousel-item">
							<img class="d-block" src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="First slide">
						</div>

						<div class="carousel-item">
							<img class="d-block" src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="First slide">
						</div>

					</div>
				</div>
			</div>


			<div class="col-md-4 mt-4 news-box-title">
				<h5>Lorem Ipsum</h5>
				<div class="news-box  mt-4">
					<div class="col-8">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-4">
						<img src="assets/img/money-exchange-HGQ2UT9.jpg" alt="">
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-8">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-4">
						<img src="assets/img/business-economy-growth-prediction-graph-DKQ8X3V.jpg" alt="">
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-8">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-4">
						<img src="assets/img/hand-holding-mobile-and-graphs-of-currency-exchang-GHL7BNR.jpg" alt="">
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-8">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-4">
						<img src="assets/img/cryptocurrency-coins-with-exchange-rate-table-PHCU3TX.jpg" alt="">
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-8">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-4">
						<img src="assets/img/car-dealer-businessman-holding-a-car-key-car-loan--A7TVUV6.jpg" alt="">
					</div>
				</div>

				<div class="clearfix"></div>
			</div>

		</div>
	</div>

	<div class="container content mt-4 px-4 py-3">
		<div class="row">
			<div class="col-md-6 big-box">
				<img src="assets/img/flag.png" alt="">
				<h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
			</div>
			<div class="col-md-6 big-box">
				<div class="col-md-6 float-left">
					<div class="item">
						<img src="assets/img/businessman-checking-foreign-exchange-rates-XQ6KHWA.jpg" alt="">
						<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
					</div>
				</div>
				<div class="col-md-6 float-right">
					<div class="item">
						<img src="assets/img/woman-holding-hands-cash-money-in-glass-bank-UTS33GX.jpg" alt="">
						<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
					</div>
				</div>


				<div class="clearfix"></div>	
				<div class="col-md-6 float-left">
					<div class="item ">
						<img src="assets/img/protective-face-mask-on-white-background-world-map-YNJLMPG.jpg" alt="">
						<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
					</div>
				</div>
				<div class="col-md-6 float-right">
					<div class="item">
						<img src="assets/img/cryptocurrency-coins-with-exchange-rate-table-PHCU3TX.jpg" alt="">
						<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
					</div>
				</div>

				
			</div>
		</div>
	</div>

	<div class="container mt-4">
		<div class="row">
			<div class="flex ">
				<div class="item mt-3 col-xl-4 col-md-6 col-xs-12">
					<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					<h6>Lorem ipsum dolor sit amet consectetur</h6>
					<p>Lorem ipsum dolor sit amet consectetur</p>
				</div>
				<div class="item mt-3 col-xl-4 col-md-6 col-xs-12">
					<img src="assets/img/money-exchange-HGQ2UT9.jpg" alt="">
					<h6>Lorem ipsum dolor sit amet consectetur</h6>
					<p>Lorem ipsum dolor sit amet consectetur</p>
				</div>
				<div class="item mt-3 col-xl-4 col-md-6 col-xs-12">
					<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
					<h6>Lorem ipsum dolor sit amet consectetur</h6>
					<p>Lorem ipsum dolor sit amet consectetur</p>
				</div>
				
				<div class="item mt-3 col-xl-4 col-md-6 col-xs-12">
					<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					<h6>Lorem ipsum dolor sit amet consectetur</h6>
					<p>Lorem ipsum dolor sit amet consectetur</p>
				</div>
				<div class="item mt-3 col-xl-4 col-md-6 col-xs-12">
					<img src="assets/img/money-exchange-HGQ2UT9.jpg" alt="">
					<h6>Lorem ipsum dolor sit amet consectetur</h6>
					<p>Lorem ipsum dolor sit amet consectetur</p>
				</div>
				<div class="item mt-3 col-xl-4 col-md-6 col-xs-12">
					<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
					<h6>Lorem ipsum dolor sit amet consectetur</h6>
					<p>Lorem ipsum dolor sit amet consectetur</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row  flex">
			<div class="col-xl-4 col-xs-12  p-3 item bitcoins">
				<img src="assets/img/closeup-bitcoins-mockup-on-the-keyboard-with-money-DWPLFPP.jpg" style="height: 530px;">
				<h6>Lorem ipsum dolor sit amet consectetur</h6>
				<p>Lorem ipsum dolor sit amet consectetur</p>
			</div>
			<div class="col-xl-8 p-0">
				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>

				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row  flex">

			<div class="col-xl-8 p-0">
				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>

				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

				</div>
			</div>

			<div class="col-xl-4 col-xs-12  p-3 item bitcoins">
				<img src="assets/img/closeup-bitcoins-mockup-on-the-keyboard-with-money-DWPLFPP.jpg" style="height: 530px;">
				<h6>Lorem ipsum dolor sit amet consectetur</h6>
				<p>Lorem ipsum dolor sit amet consectetur</p>
			</div>
		</div>
	</div>


	<div class="container turkey mt-4">
		<h3>Türkiye</h3>
		<div class="row flex-wrap">

			<div class="item p-2">
				<img src="assets/img/businessman-checking-foreign-exchange-rates-XQ6KHWA.jpg" alt="">
				<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
			</div>
			<div class="item p-2">
				<img src="assets/img/businessman-checking-foreign-exchange-rates-XQ6KHWA.jpg" alt="">
				<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
			</div>
			<div class="item p-2">
				<img src="assets/img/businessman-checking-foreign-exchange-rates-XQ6KHWA.jpg" alt="">
				<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
			</div>
			<div class="item p-2">
				<img src="assets/img/businessman-checking-foreign-exchange-rates-XQ6KHWA.jpg" alt="">
				<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit? </p>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row  flex">
			<div class="col-xl-4 col-xs-12  p-3 item bitcoins">
				<img src="assets/img/closeup-bitcoins-mockup-on-the-keyboard-with-money-DWPLFPP.jpg" style="height: 530px;">
				<h6>Lorem ipsum dolor sit amet consectetur</h6>
				<p>Lorem ipsum dolor sit amet consectetur</p>
			</div>
			<div class="col-xl-8 p-0">
				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>

				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row  flex">

			<div class="col-xl-8 p-0">
				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>

				<div class="flex">
					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

					<div class="col-md-6 col-xs-12 p-3 item">
						<img src="assets/img/hands-with-money-at-bank-office-or-exchanger-PXSCB2B.jpg" alt="">
						<h6>Lorem ipsum dolor sit amet consectetur</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>

				</div>
			</div>

			<div class="col-xl-4 col-xs-12  p-3 item bitcoins">
				<img src="assets/img/closeup-bitcoins-mockup-on-the-keyboard-with-money-DWPLFPP.jpg" style="height: 530px;">
				<h6>Lorem ipsum dolor sit amet consectetur</h6>
				<p>Lorem ipsum dolor sit amet consectetur</p>
			</div>
		</div>
	</div>


	<div class="container mt-4">
		<div class="row">
			<div class="col-md-4 pt-3" style="background:#f8f7f8;">
				<h4 class="px-2">Lorem Ipsum</h4>
				<div class="news-box  mt-4">
					<div class="col-5 p-1">
						<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					</div>
					<div class="col-7 p-1">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-5 p-1">
						<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					</div>
					<div class="col-7 p-1">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-5 p-1">
						<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					</div>
					<div class="col-7 p-1">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-5 p-1">
						<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					</div>
					<div class="col-7 p-1">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-5 p-1">
						<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					</div>
					<div class="col-7 p-1">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="news-box  mt-4">
					<div class="col-5 p-1">
						<img src="assets/img/bitcoin-with-other-coins-4AV2V4X.jpg" alt="">
					</div>
					<div class="col-7 p-1">
						<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="clearfix"></div>

			</div>


			<div class="col-md-8 write p-0 pt-3" style="font-weight: 600;">
				<h4 class="px-4">Lorem Ipsum</h4>
				<div class="col-md-12">
					<div class="col-xl-4 col-lg-12 block">
						<p>Lorem, ipsum dolor sit amet</p>
					</div>
					<div class="col-xl-4 col-lg-12 block">
						<p>Lorem, ipsum dolor sit amet</p>
					</div>
					<div class="col-xl-4 col-lg-12 block">
						<p>Lorem, ipsum dolor sit amet</p>
					</div>
				</div>	


				<div class="col-md-12">
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>

					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
				</div>


				<div class="col-md-12">
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>

					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
				</div>	



				<div class="col-md-12">
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>

					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 block">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing</p>
					</div>
				</div>	
			</div>
		</div>
	</div>



	<footer class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 footer mt-5">
					<div class="col-md-9 float-left">
						<div class="col-md-12">
							<div class="col-md-3 float-left">		
								<a href="index.php"><img src="assets/img/logo.png"  alt=""></a>

							</div>
							<div class="col-md-9 float-left">			
								<ul class="footer-nav">
									<li><a href="">Lorem</a></li>
									<li><a href="">Lorem</a></li>
									<li><a href="">Lorem</a></li>
									<li><a href="">Lorem</a></li>
									<li><a href="">Lorem</a></li>
									<li><a href="">Lorem</a></li>
									<li><a href="">Lorem</a></li>
									<li><a href="">Lorem</a></li>
								</ul>
							</div>
						</div>


						<div class="clearfix">
							
						</div>
						<div class="col-md-12">
							<div class="col-md-4 float-left mt-5">
								<div class="footersocialmedia">
									<a href="#"><i class="fab fa-facebook-f">Facebook</i></a>
									<a href="#"><i class="fab fa-twitter">Twitter</i></a>
									<a href="#"><i class="fab fa-instagram">Instagram</i></a>
									<a href="#"><i class="fab fa-youtube">Youtube</i></a>
								</div>
							</div>
							<div class="col-md-4 float-left mt-5">
								<div>
									<h5><b>Lorem Ipsum</b></h5>
									<ul>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 float-left mt-5">
								
								<div>
									<h5><b>Lorem Ipsum</b></h5>
									<ul>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
										<li>lorem ipsum</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-3 float-left">

					</div>

				</div>



			</div>
		</div>




		<div class="container-fluid">
			<p class="text-center mt-5 text-white  mb-0" style="padding: 15px;
			border-top: 1px solid;"> ©2021 Tüm hakları saklıdır</p>
		</div>
	</footer>

	<?php include 'theme/js.php' ?>
</body>
</html>