<!--header-->
	<?php include 'header.php';?>

	<!--Profile-->
	<section class="wrap mainBody-container">	
	   <div class="card-container">
			<div class="row">
				<p class="h5 trustedbrands text-color--dark-blue">My Account Summary</p>
			</div>
			<div class="row">
				<div class="payment-info">Bellow are your last 3 Transaction made during your last login on Mon, Dec 01, 20014 at 05.06PM</div>
			</div>
           
			<div class="row">
				<table class="table-payments" width="100%" style="">
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
                <div class="add_payment_cred btn bg-color--grey--lightest">
                    <div class="col col30 center  ">
					<input type="submit" value="ADD PAY PAL ACCOUNT" class="float-left btn btn__bg-color--red">
				    </div>
                </div>
                <div class="add_payment_cred form row bg-color--grey--lightest">
                    <div class="col col30 h5">
					<input type="text"  placeholder="ADD PAY ACCOUNT ID" class="float-left payment-form__field h7">
				    </div>
                    <div class="col col10 center h5">
					<input type="submit" value="ADD" class="float-right btn btn__bg-color--red ">
				    </div>
                </div>
			</div>
			<div class="row">
                <div class="float-right">
					<div class="text-right">*1 USD equal to 1 eligo Dollar   <span><a class="payment__card-url" href="#">Help</a></span>
					</div>
				</div>
				<div class=" col col 30 float-left transaction_related_btn">
					<input type="submit" value="VIEW TRANSACTION HISTORY(LAST 3 MONTH)" class="float-left btn btn__bg-color--red">
				</div>
                
                <div class=" col col 30 float-left transaction_related_btn">
					<input type="submit" value="Edit PAY PAL ACCOUNT" class="float-left btn btn__bg-color--red">
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	
	
	
	<!--Popup-->
	<?php include '../include/popup.php';?>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/placeholders.js"></script>
	<script src="../js/jquery.fancybox.js"></script>
	<script src="../js/main.js"></script>
	<script>
	
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53594061-5', 'auto');
		ga('send', 'pageview');
		
	</script>

</body>
</html>