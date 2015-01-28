<!--header-->
<?php include 'header.php';?>

	
	
	<!--Profile-->
	<section class="wrap mainBody-container">	
        <div class="top-submenu-bar">
            <div class="sub-menu inline"> 
                <p class="bold inline submenu-title">Campaigns:</p>
                <div class="js-custom_menu__item inline " ><a href="#IndivProfile_About" data-level="one" class=" top-submenu active">About</a></div>
                <div class="js-custom_menu__item inline " ><a href="#IndivProfile_edit" data-level="one" class=" top-submenu">Edit</a></div>
            </div>
        </div>
        
		<div class="row subtab-content  profile-content level-one-tab" id="IndivProfile_About" >
        
			<div class="col col2">
			
				<div class="card card-container card-bgColor--blue text-color--white">
					<p class="h5 text-color--white">Your profile is 80% complete.</p>
					<div class="col40">
						<a href="#js-register--individual" class="inline btn btn__bg-color--blue--dark">COMPLETE PROFILE NOW</a>
					</div>
				</div>
				
				<div class="card_white">
					<div class="card-container ">
						<p class="bold no-margin">Your Leaderboard</p>
						<span class="card__desc">See who has the highest Social Score.</span>
					</div>
					
					<div class="fluid-menu text-center">
						<ul class="fluid-menu--row no-padding">
							<li class="fluid-menu--cell"><a href="#" class="leaderboard-nav__link">All</a></li>
							<li class="fluid-menu--cell"><a href="#" class="leaderboard-nav__link leaderboard-nav__link--active">Facebook</a></li>
							<li class="fluid-menu--cell"><a href="#" class="leaderboard-nav__link">Google+</a></li>
							<li class="fluid-menu--cell"><a href="#" class="leaderboard-nav__link">Twitter</a></li>
							<li class="fluid-menu--cell"><a href="#" class="leaderboard-nav__link">Instagram</a></li>
							<li class="fluid-menu--cell"><a href="#" class="leaderboard-nav__link leaderboard-nav__link--last">Linkedin</a></li>
						</ul>
					</div>
					
					<table class="table-responsive leaderboard-list">
						<tr>
							<td>Rank</td>
							<td>User</td>
							<td>Friends</td>
							<td>Shares</td>
							<td>Likes</td>
							<td class="leaderboard-row-score bold">Score</td>
						</tr>
						<?php for($i=0;$i<5;$i++){?>
						<tr>
							<td><?php echo $i;?></td>
							<td>Atiqah Sulaiman</td>
							<td>1202</td>
							<td>765</td>
							<td>524</td>
							<td class="leaderboard-row-score bold">2492</td>
						</tr>
						<?php }?>
						<tr class="leaderboard-row--me">
							<td>214</td>
							<td>You</td>
							<td>1202</td>
							<td>765</td>
							<td>524</td>
							<td class="leaderboard-row-score bold">2492</td>
						</tr>
					</table>
					
				</div>
				
			</div>
			
			<div class="col col2">			
				<div class="card_white card-container">
					<p class="bold">Your Social Media Platforms</p>
					<ul class="no-margin no-padding no-style">
						<li class="inline"><a href="#" class="h2 connect-to connect-to__google-plus connect-to--connected"><i class="fa fa-google-plus"></i></a></li>
						<li class="inline"><a href="#" class="h2 connect-to connect-to__twitter connect-to--connected"><i class="fa fa-twitter"></i></a></li>
						<li class="inline"><a href="#" class="h2 connect-to connect-to__instagram connect-to--connected"><i class="fa fa-instagram"></i></a></li>
						<li class="inline"><a href="#" class="h2 connect-to connect-to__linkedin connect-to--connected"><i class="fa fa-linkedin-square"></i></a></li>
						<li class="inline"><a href="#" class="h2 connect-to connect-to__youtube"><i class="fa fa-youtube"></i></a></li>
						<li class="inline"><a href="#" class="h2 connect-to connect-to__foursquare connect-to--connected"><i class="fa fa-foursquare"></i></a></li>
					</ul>
				</div>
				
				<div class="card_white card-container card-bgColor--white">
					<span class="light">No recent activity</span>
				</div>
				
			</div>
		
		</div>
	</section>
	
	
	
	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	
	
	
	<!--Popup-->
	<?php include '../include/popup.php';?>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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