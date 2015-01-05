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
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css?v=1.0" media="all" />
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
			<li class="inline"><a href="#" class="user-nav__item user-nav__item--active bold">Users Search</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Notifications</a></li>
			<li class="inline"><a href="#"><i class="fa fa-gear user-nav__fa-gear"></i></a></li>
		</ul>
	</section>
	
	
	
	
	<!--Profile-->
	<section class="wrap mainBody-container">	
		<div class="row">
		
			<div class="col col40">
			
				<div class="card-container card-title">
					<h5 class="h5">Users Search</h5>
				</div>
				<ul class="no-style user-insights">
					<?php for($i=0;$i<10;$i++){?>
					<li class="rel user-insights__item <?php echo $i == 3?'user-insights__item--active':'';?>">
						<a href="#" class="abs user-insights__item-close">x</a>
						<span><?php echo $i == 3?'Educations':'eligo';?></span>
						<?php if($i == 3){?>
						<div class="user-insights__item-details">
							<form class="user-insights__form">
								<div class="user-insights__form-group row">
									<label class="col col30 user-insights__label">Studied <a href="#" class="text-color--white">x</a></label>
									<div class="col col70">
										<span class="block">University <a href="#" class="text-color--white">x</a></span>
										<input class="user-insights__form-field" type="text" placeholder="add more">
									</div>
								</div>
								<div class="user-insights__form-group row">
									<label class="col col30 user-insights__label">Level of Education <a href="#" class="text-color--white">x</a></label>
									<div class="col col70">
										<span class="block">High School <a href="#" class="text-color--white">x</a></span>
										<input class="user-insights__form-field" type="text" placeholder="add more">
									</div>
								</div>
							</form>
						</div>
						<?php }?>
					</li>
					<?php }?>
				</ul>
				
				
			</div>
			
			<div class="col col60">
			
				<div class="card-container card-title">
					<h5 class="h5">Results</h5>
				</div>
				<!--<div class="card card-container">
					<p class="bold">Your Social Media Platforms</p>
					<ul class="no-margin no-padding no-style">
						<li class="inline"><a href="#" class="h5 connect-to connect-to__google-plus connect-to--connected"><i class="fa fa-google-plus"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__twitter connect-to--connected"><i class="fa fa-twitter"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__instagram connect-to--connected"><i class="fa fa-instagram"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__linkedin connect-to--connected"><i class="fa fa-linkedin-square"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__youtube"><i class="fa fa-youtube"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__foursquare connect-to--connected"><i class="fa fa-foursquare"></i></a></li>
					</ul>
				</div>-->				
				
				
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