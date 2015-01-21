	<!--header-->
	<?php include 'header.php';?>
	
	<!--Profile-->
	<section class="wrap mainBody-container">
	
		<div class="card-container">
			<span class="bold">Payments:</span>
			<a href="#" class="inline createcampaign-top-menu createcampaign-top-menu--active">Top Up</a>
			<a href="#" class="inline createcampaign-top-menu">Add</a>
			
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