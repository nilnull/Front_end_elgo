<!--Header-->
	<?php include 'header.php';?>

	<script>
        $(document).ready(function(event){
            $('.toggle')
        });
</script>
	
	
	<!--settings-->
	<section class="wrap mainBody-container">	
		<div class="row">			
			<div class="card-container card-title">
				<h5 class="h5">Settings</h5>
				
				
			</div>
			<div class="row">
				<table class="table-brand__settings" width="100%">
					<tr>
						<th colspan="3" class="light">Signing in</th>
					</tr>
					<tr>
						<td class="col3">							
							<table class="table-brand__settings--inside" width="100%">
								<tr>
									<th colspan="3">Basic</th>
								</tr>
								<tr>
									<td rowspan="2" ><a href="#" class=""><img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="brand__setting-img"></a></td>
									<td style="text-align: middle;"><a href="#" class="brand__setting-icon brand__setting-icon--facebook"><i class="fa fa-facebook"></i></a></td>
									<td>/teehow </td>
								</tr>
								<tr>
									<td style="text-align: left;"><a href="#" class=" left brand__setting-icon brand__setting-icon--google-plus"><i class="fa fa-google-plus"></i></a></td>
									<td class="left">/teehow </td>
								</tr>
							</table>
						</td>
						<td class="col3">
							<table class="table-brand__settings--inside" width="100%">
								<tr>
									<th colspan="2">Recovery email</th>
								</tr>
								<tr>
									<td class="brandSettings__form--label">Email</td>
									<td>teehow@gmail.com</td>
								</tr>
							</table>
						</td>
						<td class="col3">
							<table class="table-brand__settings--inside" width="100%">
								<tr>
									<th colspan="2">Recovery phone</th>
								</tr>
								<tr>
									<td class="brandSettings__form--label">Phone</td>
									<td>+60172014156</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table class="table-brand__settings" width="100%">
					<tr>
						<th colspan="3" class="light">Email Notification</th>
					</tr>
					<tr>
						<td class="col3">
							<span  class="bold h6">Web</span>
							<span>
								<label class="brandSettings__form brandSettings__form--checkboxLabel"><input type="checkbox" class="custom-checkbox-field" name="-" checked/> Users applied your campaign</label>
								<label class="brandSettings__form brandSettings__form--checkboxLabel"><input type="checkbox" class="custom-checkbox-field" name="-" /> Users accepted/declined invitation</label>
                                <span>
                                    <div class="brandSettings__form ">
                                        <input type="checkbox" class="circular-checkbox" name="email_timing[]">once a day &nbsp;&nbsp;
                                        <input type="checkbox" class="circular-checkbox" name="email_timing[]">As they happen
                                    </div>
							    </span>
								<label class="brandSettings__form brandSettings__form--checkboxLabel"><input type="checkbox" class="custom-checkbox-field" name="-" /> Campaign reminder</label>
							</span>
						</td>
						<td class="col3">
							<span  class="bold h6">We'll also let you know about: </span>
							
							
							<span>
                                <label class="brandSettings__form brandSettings__form--checkboxLabel"><input type="checkbox" class="custom-checkbox-field" name="-" checked /> New Message</label>
                                <span>
                                    <div class="brandSettings__form ">
                                        <input type="checkbox" class="circular-checkbox" name="web_timing[]">once a day &nbsp;&nbsp;
                                        <input type="checkbox" class="circular-checkbox" name="web_timing[]">As they happen
                                    </div>
							    </span>
                                <label class="brandSettings__form brandSettings__form--checkboxLabel ">
                                    <input type="checkbox" class="custom-checkbox-field" name="-" /> Transaction status 
                                </label>
								<label class="brandSettings__form brandSettings__form--checkboxLabel"><input type="checkbox" class="custom-checkbox-field" name="-" checked /> Announcements about new features</label>
								<label class="brandSettings__form brandSettings__form--checkboxLabel"><input type="checkbox" class="custom-checkbox-field" name="-" /> Invitation to give us feedback</label>
								
								
							</span>
						</td>
						<td class="col3 bold h6"></td>
					</tr>
				</table>
                <form method="POST" action="this">
                    <div class="float-right"><input type="submit" class="btn btn__bg-color--red" value="DELETE ACCOUNT"/></div>
                </form>
			</div>
		</div>
	</section>
	
	
<!--
	<div class=" float-left inline custom-checkbox"><div class="decoration actived disabled">
        <div class="lbl-text light inline float-left">Yes</div>
        <div class="toggle inline bg-color--white"><a href=""></a></div>
        <div class="lbl-text light inline float-right">No</div>
    </div><input type="checkbox" name="chkbx_empty" ></div>
-->
	
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