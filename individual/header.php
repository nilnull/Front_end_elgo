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

	<!--[if IE]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/placeholders.js"></script>
	<script src="../js/jquery.fancybox.js"></script>
	<script src="../js/main.js"></script>
	
	<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.blockui.js"></script>
	<script>
	
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53594061-5', 'auto');
		ga('send', 'pageview');
		
	</script>
	
	
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
						<img src="../img/individual/Lego-logo.jpeg" class="circle user-avatar--header">
						<a href="#tab1" class="btn__header__item"><i class="fa fa-bars v-middle text-color--white"></i></a>
					</div>
				</div>
			</div>
		</header>
	
	</div>
	
	
	
	
	<!--Cover Photo-->
	<section class="rel wrap profile__cover">
	
		<img src="../img/individual/sample_cover_photo.jpg" class="abs top profile__cover-photo">
		
		<div class="rel profile__cover-score">
		
			<div class="inline profile__cover-score__box profile__cover-score--eligo bg-color--red bold">
				<div class="table">
					<div class="table-cell">
						<span>eligo Score</span>
						<span class="h5">1.2</span><span class="h6">K</span>
					</div>
				</div>
			</div>
			
			<img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="inline circle profile__cover-avatar">
			
			<div class="inline profile__cover-score__box profile__cover-score--social bg-color--blue bold">
				<div class="table">
					<div class="table-cell">
						<span>Social Score</span>
						<span class="h5">1.2</span><span class="h6">K</span>
					</div>
				</div>
			</div>
			
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
		<div class="profile__cover-interact rel float-right text-color--black h6">
            
            <a href="#"><div class="col icon circle bg-color--white center"><span class="fa fa-paper-plane "></span></div></a>
            <a href="#"><div class="col icon circle bg-color--white center"><span class="fa fa-plus-square "></span></div></a>
            <a href="#"><div class="col icon circle bg-color--white center"><span class="fa fa-ellipsis-v "></span></div></a>
            
        </div>
	</section>
	
	
	
	
	<!--Individu Navigation-->
	<section class="wrap text-center">
		<ul class="bg-color--white no-style no-margin no-padding tabs-menu">
			<!-- <li class="inline"><a href="#tabs-1" class="user-nav__item bold">Social Feed</a></li> -->
			<li class="inline current"><a href="#tabs-2" class="user-nav__item bold">Profile</a></li>
			<li class="inline"><a href="#tabs-3" class="user-nav__item bold">Campaigns</a></li>
<!--			@if ($isUserProfile)-->
			<!-- <li class="inline"><a href="#tabs-4" class="user-nav__item bold">Hashtags</a></li> -->
			<li class="inline"><a href="#tabs-5" class="user-nav__item bold">Notifications</a></li>
			<li class="inline"><a href="#tabs-6" class="user-nav__item bold">Profile Settings</a></li>
			<li class="inline"><a href="#tabs-7"><i class="fa fa-gear user-nav__fa-gear"></i></a></li> 
<!--			@endif-->
		</ul>
	</section>
<?php
//just for tests
$brand_photos=array(
    'http://eil.com/images/main/Gnarls-Barkley-Crazy-354180.jpg',
    'http://eil.com/images/main/Gnarls-Barkley-Crazy-354180.jpg'
);
$people_photos=array(
    'http://eil.com/images/main/Gnarls-Barkley-Crazy-354180.jpg',
    'http://www.sohh.com/wp-content/uploads/2014/06/eminem-2012-07-05-300x3003.png',
    'http://xfinity.comcast.net/blogs/tv/files/2013/08/alec-baldwin.jpg',
    'http://img1.wikia.nocookie.net/__cb20131231005207/disney/images/2/2e/Will_Turner_Headshot.jpg',
    'http://news.bbcimg.co.uk/media/images/69247000/jpg/_69247083_einsteingettyafp.jpg',
    'http://www.dazzlingwallpaper.com/image/1359119289_angelina_jolie_famous_face_of_hollywood.jpg'
);
$brand_names=array('Lego',
                    'Petronas'
                   );
$people_names=array('Gnarls Barkley',
       'Marshal Mather',
       'alec baldwin',
       'will turner',
       'einstien',
       'Angelina'
            );
?>	