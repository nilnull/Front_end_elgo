<!DOCTYPE html>
<!--[if IE 7]>     <html class="ie7" lang="en-us"> <![endif]-->
<!--[if IE 8]>     <html class="ie8" lang="en-us"> <![endif]-->
<!--[if IE 9]>     <html class="ie9" lang="en-us"> <![endif]-->
<!--[if !IE]><!--> <html lang="en-us"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Pi">
	<title>eligo.me</title>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css?v=1.0" media="all" />
	<link rel="stylesheet" href="../css/dropdown.css?v=1.0" media="all" />
	<!--[if IE]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body class="inside-page">

	<!--Red top border-->
	<div class="top-border bg-color--red"></div>
	
	
	
	<!--Header-->
	<div class="bg-color--black">	
	
		<header>
			<div class="wrap">
				<div class="header-container row">
					<a href="./"><img src="../img/logo.png" alt="eligo logo float-left"></a>
					<div class="float-right">
						<img src="../img/credit.png" class="inline img-credit">
						<div class="inline text-color--white">100</div>
						<img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle user-avatar--header">
						<a href="#" class="btn__header__item"><i class="fa fa-bars v-middle text-color--white"></i></a>
					</div>
				</div>
			</div>
		</header>
	
	</div>
	
	
	
	
	<!--Cover Photo-->
	<section class="rel wrap profile__cover">
	
		<img src="../img/individual/sample_cover_photo.jpg" class="abs top profile__cover-photo">
		
		<div class="rel profile__cover-score">
			
			<img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="inline circle profile__cover-avatar">
			
		</div>
		
		<div class="abs bottom margin-center text-center profile__cover-userInfo">
			<div class="profile__cover-copy">
				<span class="bold h5">Little Elephant</span>
				<ul class="no-style no-padding no-margin">
					<li class="profile__cover-userInfo-details">Selangor, Malaysia</li>
					<li class="profile__cover-userInfo-details">madebysource.com</li>
					<li class="profile__cover-userInfo-details">Joined December 2014</li>
				</ul>
			</div>
		</div>
		
	</section>
	
	
	
	
	<!--Individu Navigation-->
	<section class="wrap text-center">
		<ul class="bg-color--white no-style no-margin no-padding">
			<li class="inline"><a href="#" class="user-nav__item bold">Profile</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Create Campaigns</a></li>
			<li class="inline"><a href="#" class="user-nav__item user-nav__item--active bold">Users Insigths</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Notifications</a></li>
			<li class="inline"><a href="#"><i class="fa fa-gear user-nav__fa-gear"></i></a></li>
		</ul>
	</section>
	
	
	
	
	<!--Profile-->
	<section class="wrap mainBody-container">
	
		<div class="card-container">
			<span class="bold">Payments:</span>
			<a href="#" class="inline createCampaign-top-menu createCampaign-top-menu--active">Top Up</a>
			<a href="#" class="inline createCampaign-top-menu">Add</a>
			
			<div class="row">
				<table width="100%" class="table-paymentsTopup">
					<td width="30%">
						<table class="table-paymentsTopup--noBorder">
							<td class="bold" width="200">Account <br>Balance</td>
							<td class="bold" width="200" align="right">100</td>
						</table>
					</td>
					<td width="70%">
						<table class="table-paymentsTopup--noBorder">
							<td class="bold">Reload <br> Now</td>
							<td>Amount*(USD):</td>
							<td><input type="text" class="payment-form__field" placeholder="Min. 50 USD"></td>
							<td>
								<select class="payment-form__select">
									<option value="1" data-description="Expires 1/2017">American Express</option>
									<option value="2" data-description="Expires 1/2017">Visa</option>
								</select>
							</td>
							<td>
								<a href="#js-topup-payment" class="btn btn__bg-color--red paymnet-topUp__next-btn js-popup">NEXT</a>
							</td>
						</table>
					</td>
				<table>
			</div>
			<div class="row">
				<div class="col col20">
					<input type="submit" value="ADD PAYMENT METHOD" class="float-left btn btn__bg-color--red">
				</div>
				<div class="col col80">
					<div class="text-right">*1 USD equal to 1 eligo Dollar   <span><a class="payment__card-url" href="#">Help</a></span>
					</div>
				</div>
			</div>
			<div class="row">
				<p class="h5 trustedbrands text-color--dark-blue">My Account Summary</p>
			</div>
			<div class="row">
				<div class="payment-info">Bellow are your last 3 Transaction made during your last login on Mon, Dec 01, 20014 at 05.06PM</div>
			</div>
			<div class="row">
				<table class="table-payments" width="100%">
					<tr>
						<th>#</th>
						<th>Date</th>
						<th>Payment Method</th>
						<th>Amounts</th>
						<th>Order ID</th>
						<th>Status</th>
					</tr>
					<!--if $result%2 == 0 use class blink-row-->
					<tr class="odd-row">
						<td>1</td>
						<td>28 Nov 2014</td>
						<td>Pay Pal Transaction</td>
						<td>1000 eligo Dollars(USD 300)</td>
						<td>VM00080451</td>
						<td>Success</td>
					</tr>
					<tr class="blink-row">
						<td>2</td>
						<td>28 Nov 2014</td>
						<td>Pay Pal Transaction</td>
						<td>1000 eligo Dollars(USD 300)</td>
						<td>VM00080451</td>
						<td>Success</td>
					</tr>
					
				</table>
			</div>
			<div class="row">
				<div class="col col 30">
					<input type="submit" value="VIEW TRANSACTION HISTORY(LAST 3 MONTH)" class="float-left btn btn__bg-color--red">
				</div>
			</div>
		</div>
	</section>
	
	<!--top Up PAyments-->
	<div id="js-topup-payment" style="display:none;height:360px;">
		<div class="popup-header">
			<a href="./"><img src="../img/payment/payment_logo.png" alt="eligo logo float-left"></a>
			<a href="./"><img src="../img/payment/paypal_secured.png" alt="eligo" class="logo float-right"></a>
		</div>	
		
		<div class="text-center">
			<p>Kindly note that selecting PayPal as your reload channel will take you out of eligo website into PayPal payment page.
			</p>
			<p class="payment-topUp__margin-bottom">After you have successfully made the payment, you will be redirect back into eligo website.</p>
			
			<div class="row">
				<a href="#js-topup-checkout" class="btn btn__bg-color--red paymnet-topUp__next-btn js-popup">NEXT</a>
			</div>
		</div>
	</div>
	<!--top Up PAyments-->
	<div id="js-topup-checkout" style="display:none;height:365px;">
		<div class="popup-header">
			<a href="./"><img src="../img/payment/payment_logo.png" alt="eligo logo float-left"></a>
			<a href="./"><img src="../img/payment/paypal_secured.png" alt="eligo" class="logo float-right"></a>
		</div>	
		<div class="text-center">
			<p class="bold">Confirmation</p>
			<p class="payment-topUp__margin-bottom">
				Amount*(USD): 50.00
				<br>Eligo Dollar: 50.00
				<br>Email: hello@lego.com
			</p>
			
			<div class="row">
				<img src="../img/payment/paypal_checkout.png" class="abs btn__paypalConnect pointer">
				<!--<a href="#js-topup-checkout" class="trustedbrands btn paymnet-topUp__next-btn btn__bg-color--red js-popup" style="margin-top:10px;">NEXT</a>-->
			</div>
		</div>
	</div>
	
	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	
	
	
	<!--Popup-->
	<?php include '../include/popup.php';?>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/placeholders.js"></script>
	<script src="../js/jquery.fancybox.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/select.js"></script>
	<script src="../js/jquery.ddslick.js"></script>
	<script>
	
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53594061-5', 'auto');
		ga('send', 'pageview');
		
	</script>
	<script>
		$( document ).ready(function() {
			$('.payment-form__select').ddslick({
				selectText: "Select your favorite social network",
				 defaultSelectedIndex:1
			});
		});
	</script>
</body>
</html>