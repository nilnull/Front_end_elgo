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
	
	<script>
		$(document).ready(function() {
			// $("#content div").hide(); // Initially hide all content
			// $("#tabs li:first").attr("id","current"); // Activate first tab
			// $("#tab1").show(); // Show first tab content
			// $("#content div:first").attr("rel").fadeIn('slow').removeClass('hidden'); // Show first tab content
			// console.debug($("#content div:first"));
			
			// console.debug($("#content div:first"));
			$('#tabs a').click(function(e) {
				e.preventDefault();
				$(".form-fieldset").hide();
                $(".individuProfile-topNav").removeClass('individuProfile-topNav--active');
                $(this).addClass('individuProfile-topNav--active');
				$('#' + $(this).attr('title')).show(); // Show content for current tab
			});
			
			$('#tabs-edit a').click(function(e) {
				e.preventDefault();
				$(".form-fieldset").hide();
                $('.individuProfile-topNav').removeClass('individuProfile-topNav--active');
				$(this).addClass('individuProfile-topNav--active');
				$('#' + $(this).attr('title')).show(); // Show content for current tab
			});
			
			$('.js-location-next').click(function(e) {
				e.preventDefault();
				var id = $(this).attr('id').split('-');
				current_set = $(this).parent().parent().parent();
				next_set = $(this).parent().parent().parent().next();
				next_set.show();
				current_set.hide();
				$(this).parent().parent().parent().parent().parent().find('.individuProfile-topNav--active').removeClass('individuProfile-topNav--active');
                // $('.individuProfile-topNav').removeClass('individuProfile-topNav--active');
				$(id[0] + "-edit").addClass('individuProfile-topNav--active');
			});
			
		});
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
		
	</section>
	
	
	
	
	<!--Individu Navigation-->
	<section class="wrap text-center">
		<ul class="bg-color--white no-style no-margin no-padding">
			<li class="inline"><a href="#" class="user-nav__item bold">Social Feed</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Profile</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Campaigns</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Hashtags</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Notifications</a></li>
			<li class="inline"><a href="#"><i class="fa fa-gear user-nav__fa-gear-active user-nav__item--active"></i></a></li>
		</ul>
	</section>
	
	
	
	
	<!--Profile-->
	<section class="wrap mainBody-container">	
		<div class="row">
			<div class="col col3">
				<div class="rel card-border"  id="personal-info">
					<div class="row form-group">
						<div class="profile--form__title">
							About You
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
					</div>
					<div style="margin-left: -15px;margin-right: -15px;">
						<img src="../img/individual/sample_cover_photo.jpg" class="profile-cover-small">
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Profile Photo</label>					
						<div>
							<img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle profile__cover-avatar">
						</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">First Name</label>
						<div class="profile-form__data">Jennifer</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Last Name</label>
						<div class="profile-form__data">Tang</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Age</label>
						<div class="profile-form__data">24</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Date of Birth</label>
						<div class="profile-form__data">1 Dec 1990</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Gender</label>
						<div class="profile-form__data">Female</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Nationality</label>
						<div class="profile-form__data">Malaysian</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Language</label>
						<div class="profile-form__data">Mandarin <span>English</span></div>
					</div>
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					<!--Edit Personal Info Popup-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								About You
							</div>
							<div class="rel inline" style="margin-left: -15px;margin-top: 6px;">
								<img src="../img/individual/sample_cover_photo.jpg" class="profile-cover-small">
								<input class=" abs btn small btn-bottom btn__bg-color--red no-transition" type="submit" value="change">
											
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Profile Photo</label>					
								<div>
									<img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle profile__cover-avatar">
									<div class="float-right individuSetting-form__btn">
										<input type="submit" class="inline btn small btn__bg-color--red no-transition" style="margin-top:80px;" value="change">
									</div>
								</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">First Name</label>
								<input class="profile-form__field" value="Jennifer">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Last Name</label>
								<input class="profile-form__field" value="Tang">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Age</label>
								<input class="profile-form__field" value="24">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Date of Birth</label>
								<input class="profile-form__field" value="1 Dec 1990">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Gender</label>
								<input type="radio" name="gender" value="male"><label for="male" style="font-size:15px !important" >Male</label>
								<input type="radio" name="gender" value="female" checked><label for="female" style="font-size:15px !important" >Female</label>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Nationality <span class="fa fa-plus-square js-add-nationality"></span></label>
								<select class="profile-form__select" name="nationality[]">
									<option>Malaysian</option>
								</select>
							</div>
							<div class="input_nationality_wrap"></div>
							<div class="row form-group">
								<label class="profile-form__label">Language <span><a class="fa fa-plus-square js-add-language"></a></span></label>
								<div class="profile-form__data">
									<select class="profile-form__select" name="language[]">
										<option>Malaysian</option>
									</select>
								</div>
							</div>
							<div class="input_language_wrap"></div>
							<div class="row">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
				
				
				<!--Contact details-->
				<div class="rel card-border"  id="contact-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Contact Details
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
						<div class="row form-group">
							<label class="profile-form__label">Blog</label>
							<div class="profile-form__data">jenn.my <span>madebysource.com</span></div>
						</div>
						<div class="row form-group">
							<label class="profile-form__label">Contact Nos.</label>
							<div class="profile-form__data">+60 12 345 6789 <span>+60 17 201 4156</span></div>
						</div>
						<div class="row form-group">
							<label class="profile-form__label">Email</label>
							<div class="profile-form__data">jen90@gmail.com <span>hello@jenn.my</span></div>
						</div>
					</div>
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					<!--Edit Contact Details-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Contact Details
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Blog <span class="fa fa-plus-square js-add-blog"></span></label>
								<input class="profile-form__field" name="blog[]" value="Jenn.my">
							</div>
							<div class="input_blog_wrap"></div>
							<div class="row form-group">
								<label class="profile-form__label">Contact Nos. <span class="fa fa-plus-square js-add-contact"></span></label>
								<input class="profile-form__field" name="contact[]" value="+60 12 345 6789 ">
							</div>
							<div class="input_contact_wrap"></div>
							<div class="row form-group">
								<label class="profile-form__label">Email <span class="fa fa-plus-square js-add-email"></span></label>
								<input class="profile-form__field" name="email[]" value="jen90@gmail.com">
							</div>
							<div class="input_email_wrap"></div>
							<div class="row">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
				
				<!--Social Communities-->
				<div class="rel card-border" id="social-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Social Communities
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
						<div class="row form-group">
							<label class="profile-form__label">Interests</label>
							<div class="profile-form__data">Art & Design</span></div>
						</div>
						<div class="row form-group">
							<label class="profile-form__label">Hobbies</label>
							<div class="profile-form__data">Indoors</div>
						</div>
						<div class="row form-group">
							<label class="profile-form__label">Politics</label>
							<div class="profile-form__data">Interactive Club</span></div>
						</div>
					</div>
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					<!--Edit Social Details-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Social Communities
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Interests <span class="fa fa-plus-square"></span></label>
								<input class="profile-form__field" value="Art & Design">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Hobbies <span class="fa fa-plus-square"></span></label>
								<input class="profile-form__field" value="Art & Design">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Politics <span class="fa fa-plus-square"></span></label>
								<input class="profile-form__field" value="Very Conservative">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Club & Societies <span class="fa fa-plus-square"></span></label>
								<input class="profile-form__field" value="Interactive Club">
							</div>
							<div class="row">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
			</div>
			<!--Family & Relationships-->
			<div class="col col3">
				<div class="rel card-border" id="family-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Family & Relationships
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
					</div>
					<div class="row"> 
						<label class="profile-form__margin_top profile-form__label bold">Relationship</label>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Status</label>
						<div class="profile-form__data">In a Relationship <span>with Mr.Beaan for 1 year</span></div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Anniversary</label>
						<div class="profile-form__data">6 Nov 2013</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Interested in</label>
						<div class="profile-form__data">Men & Woman</div>
					</div>
					<div class="row"> 
						<label class="profile-form__margin_top profile-form__label bold">Family</label>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Father</label>
						<div class="profile-form__data">Tang Ah Bang, 50</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Mother</label>
						<div class="profile-form__data">Ng Ah Jie, 48</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Sister</label>
						<div class="profile-form__data">Janice Tang, 25</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Sister</label>
						<div class="profile-form__data">Janet Tang, 18</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Brother</label>
						<div class="profile-form__data">Terry Tang, 14</div>
					</div>
					
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					<!--Edit Family Details-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Family & Relationships
							</div>
							<div class="row"> 
								<label class="profile-form__margin_top profile-form__label bold">Relationship</label>
							</div>
							
							<div class="row">
								<label class="profile-form__label">Status</label>
								<select class="profile-form__select">
									<option>in a Relationship</option>
								</select>
								<div class="row">										
										<label class="profile-form__label italic bold">with</label>										
										<input class="profile-form__field" value="Mr Bean">
								</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Anniversary</label>
								<input class="profile-form__field" value="6 Nov 2013">										
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Interested in </label>
								<select class="profile-form__select">
									<option>Men & Women</option>
								</select>
							</div>
							<div class="row"> 
								<label class="profile-form__margin_top profile-form__label bold">Family <span class="fa fa-plus-square js-add-family"></span></label>
							</div>
							<div class="row">
								<div class="col col30">
									<select class="profile-form__select">
										<option>Father</option>
										<option>Mother</option>
										<option>Sister</option>
										<option>Brother</option>
									</select>
								</div>
								<div class="col col60">
									<input class="profile-form__field--column" value="Tang Ah Bang, 50">	
								</div>
								<div class="col col10"><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></div>
							</div>
							<div class="input_relation_wrap"></div>
							<div class="row">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>		
				<div class="rel card-border" id="location-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Location
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
						
					</div>
					<div style="margin-left: -15px;margin-right: -15px;">
						<img src="../img/individual/sample_cover_photo.jpg" class="map_canvas ">
					</div>
					<div style="margin-left: -15px;margin-right: -15px;">
						<ul class="individuProfile-nav no-padding" id="tabs">
							<li class="inline">
								<a href="#" class="individuProfile-topNav individuProfile-topNav--active text-color--white" title="current-loc">Current*</a>
							</li>
							<li class="inline"><a href="#" class="individuProfile-topNav text-color--white" title="hometown">Hometown</a></li>
							<li class="inline"><a href="#" class="individuProfile-topNav text-color--white" title="other-place">Others Places Lived</a></li>
						</ul>
					</div>
					<form class="register-form">
						<fieldset class="form-fieldset" id="current-loc">
							<div class="row form-group">
								<label class="profile-form__label">Address</label>
								<div class="profile-form__data">31 Jalan Betek Sungai Rambai</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Ppostcode</label>
								<div class="profile-form__data">1400</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Town</label>
								<div class="profile-form__data">Bukit Mertajam</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">State</label>
								<div class="profile-form__data">Pulau Pinang</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Country</label>
								<div class="profile-form__data">Malaysia</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Building Type</label>
								<div class="profile-form__data">Condominium</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Home Ownership</label>
								<div class="profile-form__data">Renters</div>
							</div>
							<div class="row">
								<div class="profile-form__score-info">420 data score achieved</div>
							</div>
						</fieldset>
						<fieldset class="form-fieldset" id="hometown">
							<div class="row form-group">
								<label class="profile-form__label">Address - Hometown</label>
								<div class="profile-form__data">31 Jalan Betek Sungai Rambai</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Ppostcode</label>
								<div class="profile-form__data">1400</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Town</label>
								<div class="profile-form__data">Bukit Mertajam</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">State</label>
								<div class="profile-form__data">Pulau Pinang</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Country</label>
								<div class="profile-form__data">Malaysia</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Building Type</label>
								<div class="profile-form__data">Condominium</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Home Ownership</label>
								<div class="profile-form__data">Renters</div>
							</div>
							<div class="row">
								<div class="profile-form__score-info">420 data score achieved</div>
							</div>
						</fieldset>
                        <fieldset class="form-fieldset" id="other-place">
                            <div class="row form-group">
                                <label class="profile-form__label">Places</label>
                                <div class="profile-form__data">Taiwan</div>
                            </div>
                            <div class="row form-group">
                                <label class="profile-form__label"></label>
                                <div class="profile-form__data">Mar 2006 -  Mar 2007</div>
                            </div>
                        </fieldset>
					</form>
					
					<!--Location Edit -->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Location							
							</div>							
							<div style="margin-left: -15px;margin-top: 6px;">
								<img src="../img/individual/sample_cover_photo.jpg" class="map_canvas ">
							</div>
							<div style="margin-left: -15px;margin-right: -15px;" id="tabs-edit">
								<ul class="individuProfile-nav no-padding">
									<li class="inline">
										<a href="#" class="individuProfile-topNav individuProfile-topNav--active text-color--white" title="current-edit">Current*</a>
									</li>
									<li class="inline"><a href="#" class="individuProfile-topNav text-color--white" title="hometown-edit">Hometown</a></li>
									<li class="inline"><a href="#" class="individuProfile-topNav text-color--white" title="other-edit">Others Places Lived</a></li>
								</ul>
							</div>
							<form class="register-form">
								<fieldset class="form-fieldset" id="current-edit">
									<div class="row form-group">
										<label class="profile-form__label">Address</label>
										<input class="profile-form__field" value="31, Jalan Betek">
									</div>
                                    <div class="row form-group">
                                        <label class="profile-form__label"></label>
                                        <input class="profile-form__field" value="Sungai Rambai">
                                    </div>
									<div class="row form-group">
										<label class="profile-form__label">Postcode</label>
										<input class="profile-form__field" value="14000">
									</div>
									<div class="row form-group">
										<label class="profile-form__label">Town</label>
										<input class="profile-form__field" value="Bukit Mertajam">
									</div>
									<div class="row form-group">
										<label class="profile-form__label">State</label>
										<select class="profile-form__select">
											<option>Pulau Pinang</option>
										</select>
									</div>
									<div class="row form-group">
										<label class="profile-form__label">Country</label>
										<select class="profile-form__select">
											<option>Malaysia</option>
										</select>
									</div>
									<div class="row form-group">
										<label class="profile-form__label">Building Type</label>
										<select class="profile-form__select">
											<option>Condominium</option>
										</select>
									</div>
									<div class="row form-group">
										<label class="profile-form__label">Ownership</label>
										<select class="profile-form__select">
											<option>Renters</option>
										</select>
									</div>
									<div class="row">
										<div class="inline profile-form__score-info">420 data score achieved</div>
										<div class="float-right individuSetting-form__btn">
											<input type="submit" class="inline btn small no-transition btn__bg-color--red js-location-next" id="next-hometown" value="NEXT">
										</div>
										<div class="float-right individuSetting-form__btn">
											<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
										</div>
									</div>
								</fieldset>
                                <fieldset class="form-fieldset" id="hometown-edit">
                                    <div class="row form-group">
                                        <label class="profile-form__label">Address</label>
                                        <input class="profile-form__field" value="31, Jalan Betek">
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label"></label>
                                        <input class="profile-form__field" value="Sungai Rambai">
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label">Postcode</label>
                                        <input class="profile-form__field" value="14000">
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label">Town</label>
                                        <input class="profile-form__field" value="Bukit Mertajam">
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label">State</label>
                                        <select class="profile-form__select">
                                            <option>Pulau Pinang</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label">Country</label>
                                        <select class="profile-form__select">
                                            <option>Malaysia</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label">Building Type</label>
                                        <select class="profile-form__select">
                                            <option>Condominium</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label">Ownership</label>
                                        <select class="profile-form__select">
                                            <option>Renters</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="inline profile-form__score-info">420 data score achieved</div>
                                        <div class="float-right individuSetting-form__btn">
                                            <input type="submit" class="inline btn small no-transition btn__bg-color--red js-location-next" id="next-other" value="NEXT">
                                        </div>
                                        <div class="float-right individuSetting-form__btn">
                                            <input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="form-fieldset" id="other-edit">
                                    <div class="row form-group">
                                        <label class="profile-form__label">Places <span class="fa fa-plus-square js-add-nationality"></span></label>
                                        <input class="profile-form__field" value="Taiwan">
                                    </div>
                                    <div class="row form-group">
                                        <label class="profile-form__label"></label>
                                        <div class="col col30">
                                            <input class="profile-form__field--column" value="Mar 2006">
                                        </div>
                                        <div class="col col30">
                                            <input class="profile-form__field--column" value="Mar 2007">
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="inline profile-form__score-info">420 data score achieved</div>
                                        <div class="float-right individuSetting-form__btn">
                                            <input type="submit" class="inline btn small no-transition btn__bg-color--red js-location-next" value="NEXT">
                                        </div>
                                        <div class="float-right individuSetting-form__btn">
                                            <input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
                                        </div>
                                    </div>
                                </fieldset>
							</form>							
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
				<div class="rel card-border" id="transportation-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Transportation
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>		
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Ownership</label>
						<div class="profile-form__data">Car for 2 years</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Date Purchased</label>
						<div class="profile-form__data">6 Nov 2011</div>
					</div>	
					<div class="row form-group">
						<label class="profile-form__label">Public Transport</label>
						<div class="profile-form__data">Bus<span>Train</span></div>
					</div>	
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					<!--Edit Transportation Info-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Transportation
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Ownership</label>
								<input class="profile-form__field" value="Car">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Date Purchased</label>
								<input class="profile-form__field" value="6 Nov 2011">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Public   Transport <span class="fa fa-plus-square js-add-transport"></span></label>
								<input class="profile-form__field" value="Bus">
							</div>
							<div class="input_transport_wrap"></div>
							<div class="row">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
			</div>
			<div class="col col3">
				<!--Contact details-->
				<div class="rel card-border" id="work-info">
				<!--<span style="display:inline;"></span>-->
					<div class="row form-group">
						<div class="profile--form__title">
							Work
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
					</div>
					<div class="row">
						<div>
							<div class="col col4 profile-form__label_small bold">Now</div>
							<div class="col col4 italic profile-form__info">position</div>
							<div class="col col2 profile-form__data">Graphic Designer</div>
						</div>
					</div>
					<div class="row">
						<div>
							<div class="col col4 profile-form__label_small bold"></div>
							<div class="col col4 italic profile-form__info">rank</div>
							<div class="col col2 profile-form__data">Senior</div>
						</div>
					</div>
					<div class="row">
						<div style="overflow: hidden;white-space: nowrap;">
							<div class="col col4 profile-form__label_small bold">Joined</div>
							<div class="col col4 italic profile-form__info">experience</div>
							<div class="col col2 profile-form__data">1 years(s) 7 month(s)</div>
						</div>
					</div>
					<div class="row">
						<div>
							<div class="col col4 profile-form__label_small bold">Mar 2013</div>
							<div class="col col4 italic profile-form__info">workplace</div>
							<div class="col col2 profile-form__data">TWITTERJAYA</div>
						</div>
					</div>
					<div class="row">
						<div>
							<div class="col col4 profile-form__label_small bold"></div>
							<div class="col col4 italic profile-form__info">industry</div>
							<div class="col col2 profile-form__data">Digital</div>
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					
					<!--Edit Work Info-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Work
							</div>
							<div class="work-info">
								<div class="row form-group">
									<div>
										<div class="col col4"><input class="profile-form__field--column" value="Now"></div>
										<div class="col col4 italic profile-form__info">position</div>
										<div class="col col2">
											<select class="profile-form__select--column">
												<option>Graphic Designer</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div>
										<div class="col col4 profile-form__label_small bold"> </div>
										<div class="col col4 italic profile-form__info">rank</div>
										<div class="col col2">
											<select class="profile-form__select--column">
												<option>Senior</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div>
										<div class="col col4">
											<input class="profile-form__field--column" value="Mar 2013">
										</div>
										<div class="col col4 italic profile-form__info">workplace</div>
										<div class="col col2 profile-form__data">
											<input class="profile-form__field--column" value="TWITTERJAYA">
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div>
										<div class="col col4 profile-form__label_small bold"></div>
										<div class="col col4 italic profile-form__info">industry</div>
										<div class="col col2 profile-form__data">
											<input class="profile-form__field--column" value="Digital">
										</div>
									</div>
								</div>
								<div class="divider"></div>
							</div>
							<div class="row float-right form-group" style="margin-right:12px">
								<label class=" profile-form__info">Add <span class="fa fa-plus-square"></span></label>
							</div>
							<div class="row form-group">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
				<div class="rel card-border" id="income-info">
				<!--<span style="display:inline;"></span>-->
					<div class="row form-group">
						<div class="profile--form__title">
							Income
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Personal</label>
						<div class="profile-form__data">RM 1800 - RM 2500</div>
					</div>	
					<div class="row form-group">
						<label class="profile-form__label">Household</label>
						<div class="profile-form__data">RM 6000 - RM 7000</div>
					</div>
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					<!--Edit Income Details-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Income
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Personal <span class="fa fa-plus-square"></span></label>
								<div class="profile-form__data">
									<select class="profile-form__select">
										<option>RM 1800 - RM 2500</option>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Household <span class="fa fa-plus-square"></span></label>
								<div class="profile-form__data">
									<select class="profile-form__select">
										<option>RM 6000 - RM 7000</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>
						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
				
				<div class="rel card-border" id="education-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Education
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a></a>
						</div>
					</div>
					<div class="row">
						<div>
							<div class="col col4 profile-form__label_small bold">2012 July</div>
							<div class="col col4 italic profile-form__info">studied</div>
							<div class="col col2 profile-form__data">Bachelor's Degree in Graphic Design</div>
						</div>
					</div>
					<div class="row">
						<div>
							<div class="col col4 profile-form__label_small bold"></div>
							<div class="col col4 italic profile-form__info">at</div>
							<div class="col col2 profile-form__data">Sunway University</div>
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="profile-form__score-info">420 data score achieved</div>
					</div>
					
					<!--Edit Education Details-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Education
							</div>
							<div class="education-info">
								<div class="row">
									<div class="col col20 profile-form__label_small bold"><input class="profile-form__field--column" value="2012 July"></div>
									<div class="col col20 italic profile-form__info">studied</div>
									<div class="col col60 profile-form__data">
										<select class="profile-form__select--column">
											<option>Bachelor's Degree</option>
										</select>
										<div class="row form-group">
											<input class="profile-form__field--column" value="Graphic Design">
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col20 profile-form__label_small bold"></div>
									<div class="col col20 italic profile-form__info">at</div>
									<div class="col col60 profile-form__data">
										<input class="profile-form__field--column" value="Sunway University">
									</div>
								</div>
								<div class="divider"></div>
							</div>
							<div class="row float-right form-group" style="margin-right:12px">
								<label class=" profile-form__info">Add <span class="fa fa-plus-square"></span></label>
							</div>
							<div class="row form-group">
								<div class="inline profile-form__score-info">420 data score achieved</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--red" value="DONE">
								</div>
								<div class="float-right individuSetting-form__btn">
									<input type="submit" class="inline btn small no-transition btn__bg-color--grey js-edit-popup__cancel" value="CANCEL">
								</div>
							</div>

						</div>
						<span class="abs edit-popup__close pointer js-edit-popup__close" title="Close">x</span>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	<!--Popup-->
	<?php include '../include/popup.php';?>

</body>
</html>