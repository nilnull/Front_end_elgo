<!--header-->
	<?php include 'header.php';?>

<script>
    $(document).ready(function(){
        $(".prev_camp").trigger("click");
    });
</script>

	<!--Profile-->
	<section class="wrap mainBody-container">	
		<div class="row">			
			<div class="card-bgColor--body card card-container" style="height:600px;">
				<a href="#js-hashtags-campaign-preview" class="js-popup prev_camp">
                    <div>hastags campaign preview</div>
                </a>
                <a href="#js-checkin-campaign-preview" class="js-popup ">
                    <div>checkin campaign preview</div>
                </a>
                <a href="#js-clicks-campaign-preview" class="js-popup ">
                    <div>clickscampaign preview</div>
                </a>
                <a href="#js-posts-campaign-preview" class="js-popup ">
                    <div>posts campaign preview</div>
                </a>
                <a href="#js-survey-campaign-preview" class="js-popup">
                    <div>survey campaign preview</div>
                </a>
				
			</div>
		</div>
	</section>
	
	
<!--hashtag Camp preview popup-->
<div id="js-hashtags-campaign-preview" class="text-center campaign-preview--popup bg-color--white" style=" width:750px; display:none;min-height:822px;">


	<div class="popup-camp-header bg-color--red">
        
	</div>		
	<div class="popup-camp-body bg-color--blue" style="">
        <div class="static-part">
            <div class="cover">
            </div>
            <div class="brand-info">
            </div>
            <div class="camp-info">
            </div>
        </div>
        <div class="dynamic-part">
        </div>
	</div>
    <div class="popup-camp-footer ">
        <div class="">*payment occurs once per Hastag</div>
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