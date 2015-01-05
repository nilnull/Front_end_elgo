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
	
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />	
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
			<li class="inline"><a href="#" class="user-nav__item user-nav__item--active bold">Create Campaigns</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Users Insigths</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Notifications</a></li>
			<li class="inline"><a href="#"><i class="fa fa-gear user-nav__fa-gear"></i></a></li>
		</ul>
	</section>
	
	
	
	
	<!--Profile-->
	<section class="wrap mainBody-container">
	
		<div class="card-container">
			<span class="bold">Campaign:</span>
			<a href="#" class="inline createCampaign-top-menu createCampaign-top-menu--active">Create</a>
			<a href="#" class="inline createCampaign-top-menu">Dashboard</a>
		</div>
		
		
		
		<div class="row">
		
			
			<div class="card__full">
				<div class="card-container row">
					<div class="float-left">
						<h5 class="h5 bold">Get Started!</h5>
						<span class="block h6">Pick your choice of user endorsement below.</span>
					</div>
					<div class="float-right">
						<ul class="no-margin no-padding no-style">
							<li class="step__item"><p class="bold">Step 1</p>Choose<br>Campaign</li>
							<li class="step__item step__item--active"><p class="bold">Step 2</p>Edit<br>Campaign</li>
							<li class="step__item"><p class="bold">Step 3</p>Invite<br>Users</li>
							<li class="step__item"><p class="bold">Step 4</p>Publish<br>Campaign</li>
						</ul>
					</div>
				</div>
			</div>
			
			
			
			<form>
			
				<div class="createCampain__form-container">
				
					<p class="h6 bold">Brief</p>
				
					<div class="createCampain__form-group row">
						<div class="col col2">
							<label class="createCampain__form-label">Title</label>
							<input class="createCampain__form-field" placeholder="Write your title here">
						</div>
					</div>
					
					<div class="createCampain__form-group row">
						<div class="col col1">
							<div class="col col2">
								<label class="createCampain__form-label">Period</label>
								<input class="createCampain__form-field createCampain__form-field--half js-datepicker" placeholder="Campaign Start">
								<input class="createCampain__form-field createCampain__form-field--half js-datepicker" placeholder="Campaign End">
							</div>
							<div class="col col2">
								<label class="createCampain__form-label">Budget</label>
								<input class="createCampain__form-field" placeholder="Credits">
							</div>
						</div>
					</div>
					
					<div class="createCampain__form-group row">
						<div class="col col1 createCampain__form-group--full">
							<label class="createCampain__form-label">Description</label>
							<textarea class="createCampain__form-field" placeholder="Write your title here" rows="8"></textarea>
						</div>
					</div>
					
					
					
					
					<p class="h6 bold">Upload</p>
					
					<div class="createCampain__form-group row">
						<div class="col col1">
							<div class="col col2">
								<label class="createCampain__form-label">Coverphoto<span class="createCampain__form-label-helper">(750w x 195h)</span></label>
								<input class="createCampain__form-field createCampain__form-field" type="file">
							</div>
							<div class="col col2">
								<label class="createCampain__form-label">Thumbnail<span class="createCampain__form-label-helper">(560w x 195h )</span></label>
								<input class="createCampain__form-field createCampain__form-field" type="file">
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<p class="h6 bold float-left">Platform</p>
						<a href="#" class="createCampaign__card-url float-right">Learn more</a>
					</div>
					
					<div class="createCampain__form-group row">
						<div class="col col1 createCampain__form-group--full">
							<select class="createCampain__form-select">
								<option>Platform</option>
								<option>Facebook</option>
								<option>Twitter</option>
								<option>Instagram</option>
							</select>
							<input class="createCampain__form-field createCampain__form-field--half" placeholder="Embed post link here">
						</div>
					</div>
					
					<div class="row">
						<div class="float-right col10">
							<input type="submit" value="ADD" class="float-right btn btn__bg-color--grey--dark">
						</div>
					</div>
					
					
					<a href="#" class="createCampaign__card-url">+ Add more</a>
					
				</div>
				
				
				<div class="card__full">
				
					
					<div class="card-container row">
					
						<div class="float-left message-box message-box--warning card-container--s">
							<span class="h6 bold block v-top">Note</span>
							<span>Not enough Credits. Please <a href="#" class="createCampaign__card-url">top up</a> now.</span>
						</div>
						
						
						<div class="float-right">
							<span class="h6 bold inline v-top">Summary</span>
							<div class="inline">
								<table class="createCampaign__summary">
									<tr class="text-right">
										<td width="40%">Maximum number of<br>users you can invite is</td>
										<td class="bold h2">0</td>
									</tr>
									<tr class="text-right">
										<td>Total Budget</td>
										<td class="bold h2">0</td>
									</tr>
								</table>
							</div>
							
							
							<div class="row">
								<div class="float-right col10">
									<input type="submit" value="NEXT" class="float-right btn btn__bg-color--red">
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
					
					
				
			</form>
			
			
			
		</div>
		
		
	</section>
	
	
	
	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	
	
	
	<!--Popup-->
	<?php include '../include/popup.php';?>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/placeholders.js"></script>
	<script src="../js/jquery.fancybox.js"></script>
	<script src="../js/main.js"></script>
	<script>
	
		$(function() {
			$( ".js-datepicker" ).datepicker();
		});
	
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53594061-5', 'auto');
		ga('send', 'pageview');
		
	</script>

</body>
</html>