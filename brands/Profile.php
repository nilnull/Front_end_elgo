<!--Header-->
	<?php include 'header.php';?>

<script>
    $(document).ready(function(even){
        $('.latest_next-campaign').click(function(){
            alert('next');
        });
    });
</script>
        
<!--Content-->
	<section id="tabs-1" class="wrap mainBody-container brand-profile">
	
		<div class="card-container ">
                <span class="bold profile_submenu">Profile :</span>
            <ul class="subtabs-menu profile_submenu">
                <li class="inline top-submenu--active"><a href="#brandProfile_About" class="inline top-submenu ">About</a></li>
                <li class="inline"><a href="#brandProfile_edit" class="inline top-submenu">Edit</a></li>
            </ul>
		</div>
		<div class="row subtab-content" id="brandProfile_About" >
		
			<div class="col col2 left-panel">
				<div class="card_white card-container  little_seperation ">
                    <p class="bold">About PETRONAS Brands </p>
                    <p class="gray-light-font bitSmallerFont">   
					   This is an Offical PETRONAS manged page. Founded on 1974. Quisque fermentum 
                        purus diam, id mollis nulla feuget eget. Fusce semper eros dui.
                    </p>
				</div>
                <div class="card_white card-container  little_seperation ">
                    <p class="bold ">Overview </p>
                    <p class="gray-light-font bitSmallerFont">  
                        
                        Wlecome to PETRONAS Brans Facebook page, a platform to engage with the Brand!
                        We welcome va;ied feednacl on our products, initiatives, services and latest
                        developments. PETRONAS was incorporated on 17 Augist 1984 as the national iol
                        company of Malaysia, vested with the entire ownership and control of .... 
                        <a href="#" >Read More</a>
                        
                    </p>
				</div>
                <div class="card_white card-container  little_seperation ">
                    <p class="bold">Tagline </p>
                    <p class="gray-light-font bitSmallerFont">  
                        
                        inspire and develop the builders of tomorrow.<br>
                        <iframe class="youtubeVideo" width="100%" height="300px" scrolling="no" seamless="seamless"
                        src="http://www.youtube.com/embed/a2E5i6UgnqM">
                        </iframe>
                        
                    </p>
				</div>
			</div>
			
			<div class="col col2">			
				<div class="card_white card-container">
					<p class="bold">PETRONAS's Media Platforms</p>
					<ul class="no-margin no-padding no-style socials-card">
						<li class="inline"><a href="#" class="h5 connect-to connect-to__google-plus connect-to--connected brand-social-circle-size"><i class="fa fa-google-plus"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__twitter connect-to--connected brand-social-circle-size"><i class="fa fa-twitter"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__instagram connect-to--connected brand-social-circle-size"><i class="fa fa-instagram"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__linkedin connect-to--connected brand-social-circle-size"><i class="fa fa-linkedin-square"></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__youtube brand-social-circle-size"><i class="fa fa-youtube "></i></a></li>
						<li class="inline"><a href="#" class="h5 connect-to connect-to__foursquare connect-to--connected brand-social-circle-size"><i class="fa fa-foursquare"></i></a></li>
					</ul>
				</div>
				<div class="card card-container ">
					<p class="bold">Latest Campaign</p>
                    <div class="row latest_campaign_slider inline">
                      
                        <div class="col center browse-latest-campaign__cursors latest_next-campaign float-left">
                            <span class="float-left h5 fa fa-chevron-left " ></span>
                        </div>
                        
                        <div class="col campaign-card text-color--grey--light inline float-right">
                            <div class="row Campaign-card-title">
                                <span class="h7 rel left Campaign-card-camp-name">#CampaignHashtag </span>
                                <span class="rel float-right h7 fa fa-chevron-right text-color--grey  Campaign-card-more-cursore" ></span>
                            </div>
                            <div class="">
                                <img src="../img/individual/sample_cover_photo.jpg" class="Campaign-card-cover">
                            </div>
                            <div class="row campaing-card-bottombar">

                                <div class="float-right">
                                    <div class="float-right  inline Campaign-card-action"><input class="btn  btn-bottom btn__bg-color--red h9 no-transition right inline " type="submit" value="APPLY"></div>
                                    <div class="float-right  Campaign-card-type inline text-color--grey--darker"><span class="bold h6 black">HASHTAG</span></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col center browse-latest-campaign__cursors latest_prev-campaign inline float-right">
                            <span class="float-right h5 fa fa-chevron-right  " ></span>
                        </div>
                    </div>
				</div>
				<div class="card_white card-container card-bgColor--white">
					<span class="light">No recent activity</span>
				</div>
				
			</div>
		
		</div>
		<div class="row subtab-content" id="brandProfile_edit" style="display:none;">
            <div class="col col3">
				<div class="rel card-border"  id="personal-info">
					<div class="row form-group">
						<div class="profile--form__title">
							About
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a>
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
						<label class="profile-form__label">Company Name</label>
						<div class="profile-form__data">PETRONAS Brands</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">About</label>
						<div class="profile-form__data">
                        This is an Offical PETRONAS manged page. Founded on 1974. Quisque fermentum 
                        purus diam, id mollis nulla feuget eget. Fusce semper eros dui.
                        </div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Overview</label>
						<div class="profile-form__data">Wlecome to PETRONAS Brans Facebook page, a platform to engage with the Brand!
                        We welcome va;ied feednacl on our products, initiatives, services and latest
                        developments. PETRONAS was incorporated on 17 Augist 1984 as the national iol
                        company of Malaysia, vested with the entire ownership and control of .... 
                            </div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Tagline</label>
						<div class="profile-form__data">
                        inspire and develop the builders of tomorrow.
                        </div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Industry</label>
						<div class="profile-form__data">Market Place</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Website URL</label>
						<div class="profile-form__data">mymersra.com.my</div>
					</div>
					
					
					
					<!--Edit Personal Info Popup-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								About
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
								<label class="profile-form__label">Company Name</label>
								<input class="profile-form__field" value="PETRONAS Brands">
							</div>
                            <div class="row form-group">
								<label class="profile-form__label">About</label>
                                <textarea class="profile-form__field" >This is an Offical PETRONAS manged page. Founded on 1974. Quisque fermentum purus diam, id mollis nulla feuget eget. Fusce semper eros dui.</textarea>
							</div>
                             <div class="row form-group">
								<label class="profile-form__label">Overview</label>
                                <textarea class="profile-form__field" >Wlecome to PETRONAS Brans Facebook page, a platform to engage with the Brand! We welcome va;ied feednacl on our products, initiatives, services and latest developments. PETRONAS was incorporated on 17 Augist 1984 as the national iol company of Malaysia, vested with the entire ownership and control of ....</textarea>
							</div>
                             <div class="row form-group">
								<label class="profile-form__label">Tagline</label>
                                <textarea class="profile-form__field" >inspire and develop the builders of tomorrow.</textarea>
							</div>
                            <div class="row form-group">
								<label class="profile-form__label">Industry</label>
								<input class="profile-form__field" value="Market Place">
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Website URL</label>
								<input class="profile-form__field" value="mymersra.com.my">
							</div>
				            <div class="row">
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
        	<!--Video & Contact info-->
            <div class="col col3">
				<div class="rel card-border" id="video-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Video
						</div>
                        
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a>
						</div>
					</div>
                    <div class="row form-group">
                        <label class="profile-form__label" ></label>
                    </div>
					<div class="row form-group">
						<iframe class="youtubeVideo" width="100%" height="200px" scrolling="no" seamless="seamless"
                        src="http://www.youtube.com/embed/a2E5i6UgnqM">
                        </iframe>
					</div>
					
					<!--Edit Video-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Video
							</div>
							<div class="row form-group">
								<label class="profile-form__label">URL</label>
								<input class="profile-form__field" value="http://www.youtube.com/embed/a2E5i6UgnqM">
							</div>
                            <div class="row form-group">
                                <iframe class="youtubeVideo" width="100%" height="200px" scrolling="no" seamless="seamless"
                                src="http://www.youtube.com/embed/a2E5i6UgnqM">
                                </iframe>
                            </div>
							<div class="row">
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
				<div class="rel card-border" id="contact-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Contact Info
						</div>
						<div class="float-right">
							<a class="fa fa-pencil text-color--grey js-edit pointer"></a>
						</div>
					</div>
					<div class="row form-group">
						<label class="profile-form__label">Admin</label>
						<div class="profile-form__data">Abidul Wahab Ramadan</div>
					</div>
                    <div class="row form-group">
						<label class="profile-form__label">Company Email</label>
						<div class="profile-form__data">info@mymsra.com</div>
					</div>
                    <div class="row form-group">
						<label class="profile-form__label">Company No</label>
						<div class="profile-form__data">603 456 789</div>
					</div>
					
					<!--Edit Contact Info-->
					<div class="abs top left edit-popup js-edit-popup">
						<div class="margin-center edit-popup__container">
							<div class="profile--form__title">
								Contact Info
							</div>
							<div class="row form-group">
								<label class="profile-form__label">Admin</label>
								<input class="profile-form__field" value="Abidul Wahab Ramadan">
							</div>
                            <div class="row form-group">
								<label class="profile-form__label">Company Email</label>
								<input class="profile-form__field" value="info@mymsra.com">
							</div>
                            <div class="row form-group">
								<label class="profile-form__label">Company No</label>
								<input class="profile-form__field" value="603 456 789">
							</div>
							<div class="row">
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
            <!--Socials-->
            <div class="col col3">
				<div class="rel card-border" id="Socials-info">
					<div class="row form-group">
						<div class="profile--form__title">
							Socials
						</div>
                        <div class="row form-group">
                            <ul class="no-margin no-padding no-style socials-card">
                                <li class="inline"><a href="#" class="h5 connect-to connect-to__google-plus connect-to--connected "><i class="fa fa-google-plus"></i></a></li>
                                <li class="inline"><a href="#" class="h5 connect-to connect-to__twitter connect-to--connected "><i class="fa fa-twitter"></i></a></li>
                                <li class="inline"><a href="#" class="h5 connect-to connect-to__instagram connect-to--connected "><i class="fa fa-instagram"></i></a></li>
                                <li class="inline"><a href="#" class="h5 connect-to connect-to__linkedin connect-to--connected "><i class="fa fa-linkedin-square"></i></a></li>
                                <li class="inline"><a href="#" class="h5 connect-to connect-to__youtube "><i class="fa fa-youtube "></i></a></li>
                                <li class="inline"><a href="#" class="h5 connect-to connect-to__foursquare connect-to--connected "><i class="fa fa-foursquare"></i></a></li>
                            </ul>
					   </div>
						
					</div>
					
				</div>
            </div>
        </div>
		
		
		
	</section>
	
	
	
	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	
	
	
	<!--Popup-->
	<?php include '../include/popup.php';?>
	
	
	
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