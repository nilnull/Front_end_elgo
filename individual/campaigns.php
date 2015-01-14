	<!--header-->
	<?php include 'header.php';?>
	
	<script>
		$(document).ready(function() {
			
		});
	</script>
	<!--Profile-->
	<section class="wrap mainBody-container">	
        <div class="card-container">
            <span class="bold">Campaigns:</span>
            <div class="js-custom_menu__item inline " ><a href="#All" data-level="one" class=" top-submenu active">All (4)</a></div>
            <div class="js-custom_menu__item inline " ><a href="#Applied" data-level="one" class=" top-submenu">Applied (4)</a></div>
            <div class="js-custom_menu__item inline " ><a href="#Invited" data-level="one" class=" top-submenu">Invited (4)</a></div>
            <div class="js-custom_menu__item inline " ><a href="#Current" data-level="one" class=" top-submenu">Current (4)</a></div>
            <div class="js-custom_menu__item inline " ><a href="#Completed" data-level="one" class=" top-submenu">Completed (4)</a></div>
        </div>
		<div class="row level-one-tab" id="All" style="" >
            <div class=" row card-container inner-camp-menu" style="margin-top:30px;">
                <span class="bold">Campaigns:</span>
                <div class="js-custom_menu__item inline "  ><a href="#All" data-level="two" class=" top-submenu active">All (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Applied" data-level="two" class=" top-submenu">Applied (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Invited" data-level="two" class=" top-submenu">Invited (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Current" data-level="two" class=" top-submenu">Current (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Completed" data-level="two" class=" top-submenu">Completed (4)</a></div>
            </div>
            <?php $i=0; while($i<4){?>
            <div class="col col2">
                <div class="campaign-card text-color--grey--light">
                    <div class="row Campaign-card-title">
                        <span class="h6 rel left Campaign-card-camp-name">#CampaignHashtag </span>
                        <span class="rel float-right h7 fa fa-chevron-right text-color--body-darker  Campaign-card-more-cursore" ></span>
                    </div>
                    <div class="">
                        <img src="../img/individual/sample_cover_photo.jpg" class="Campaign-card-cover">
                    </div>
                    <div class="row campaing-card-bottombar">
                        <div class="float-left">                            
                            <img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle  campaing-card-brand-avatar inline">
                            <div class=" Campaign-card-brand-name inline"><span class="bold h6 inline">Logitech</span></div>                            
                        </div>
                        <div class="float-right">
                            <div class="float-right  inline Campaign-card-action"><input class="btn  btn-bottom btn__bg-color--red no-transition right inline " type="submit" value="APPLY"></div>
                            <div class="float-right  Campaign-card-type inline"><span class="bold h6 black">HASHTAG</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;}?>
		</div>
        <div class="row level-one-tab" id="Applied" style="display:none;" >Applied </div>
        <div class="row level-one-tab" id="Invited" style="display:none;" >Invited </div>
        <div class="row level-one-tab" id="Current" style="display:none;" >Current </div>
        <div class="row level-one-tab" id="Completed" style="display:none;" >Completed </div>
        
	</section>	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	<!--Popup-->
	<?php include '../include/popup.php';?>

</body>
</html>