<!--header-->
	<?php include 'header.php';?>
	
<script>
    $(document).ready(function(){
    
    });
</script>
	
	<!--Content-->
	<section class="wrap mainBody-container">
	
		<div class="card-container">
			<span class="bold">Campaign:</span>
			<a href="#" class="inline createCampaign-top-menu">Create</a>
			<a href="#" class="inline createCampaign-top-menu createCampaign-top-menu--active">Dashboard</a>
		</div>
		
		
		
		<div class="row dashboard">
            <div class="dashboard_campaign_cards_tab card-container" style="display:none;">
           <!--cards-->
	       <?php include 'dashboard/cards.php';?>
            </div>    
             
			<div class="dashboard_campaign_analysisInfo_tab card-container" >
                <div class="row h6 sub_path">
                    <p class="inline" >Dashboard / <span class="bold ">Campaign 1 Name</span></p>
                    <p class="inline float-right">Type: <span class="bold ">POST</span></p>
                </div>
                <div class="row dashboard_campaign_analysisInfo-stats ">
                    <div class="row dashboard_campaign_analysisInfo-stats_topbar">
                        <div class="col col2  dashboard_campaign_analysisInfo-stats_topbar-nums">
                            
                                <div class="col col4 dashboard_campaign_analysisInfo-stats_topbar__info">
                                    <p class="h5 bold">7,200</p>
                                    <p class="h7">Views</p>
                                </div>
                                <div class="col col4 dashboard_campaign_analysisInfo-stats_topbar__info">
                                    <p class="h5 bold">1,750</p>
                                    <p class="h7">Check-in</p>
                                </div>
                                <div class="col col4 dashboard_campaign_analysisInfo-stats_topbar__info active">
                                    <p class="h5 bold">2,500</p>
                                    <p class="h7">Spent</p>
                                </div>
                                <div class="col col4 dashboard_campaign_analysisInfo-stats_topbar__info">
                                    <p class="h5 bold">0.001</p>
                                    <p class="h7">Cost per Share</p>
                                </div>
                        </div>
                        <div class="inline float-right dashboard_campaign_analysisInfo-stats_topbar-charttype">
                            <div class=" select_element ">
                                <span>overview select</span>
                                <select class="col col1" style="display:none;">
                                    <option>
                                        overview
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row dashboard_campaign_analysisInfo-stats_chart">
                        <div class="row dashboard_campaign_analysisInfo-stats_chart-graph">
                            
                        </div>
                        <div class="row dashboard_campaign_analysisInfo-stats_chart-bars" style="display:none;">
                        </div>
                    </div>
                </div>
                <div class="row dashboard_campaign_analysisInfo-summerytbl ">
                    <div class="row dashboard_campaign_analysisInfo-summerytbl-thead"> 
                        <div class="col col20 thead_td"> Campaign</div>
                        <div class="col col0-5 thead_td"> start</div>
                        <div class="col col0-5 thead_td"> end</div>
                        <div class="col col30 thead_td"> User</div>
                        <div class="col col40 thead_td"> Spent</div>
                    </div>
                    <div class="row dashboard_campaign_analysisInfo-summerytbl-tbody">
                        <div class="tbody_tr">
                            <div class="col col20   tbody_tr_td"> 
                                Campaing 1 name 
                                <p class="bold">(POSTS)</p>
                            </div>
                            <div class="col col0-5  tbody_tr_td"> 31 Dec</div>
                            <div class="col col0-5  tbody_tr_td"> 24 Jan</div>
                            <div class="col col30   tbody_tr_td"> 
                                <p class="bold">
                                    Total Users Invited and Applied: 2,780
                                </p>
                                <div class="row" >
                                    <span>Total User Joined: 1,770</span>
                                    <span class="float-right percentage_num"  data-percentage-variable="userJoined">60%</span>
                                    <div class="percentage_bar" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                </div>
                                <div class="row" >
                                    <span>Total User Joined: 1,770</span>
                                    <span class="float-right percentage_num"  data-percentage-variable="userDeclined">15%</span>
                                    <div class="percentage_bar" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                </div>
                                <div class="row" >
                                    <span>Total User Joined: 1,770</span>
                                    <span class="float-right percentage_num"  data-percentage-variable="userPending">25%</span>
                                    <div class="percentage_bar" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                </div>
                                
                            </div>
                            <div class="col col40   tbody_tr_td"> 
                                    <p class="bold">
                                        Spent 800 out of 1,000
                                    </p>
                                    <div class="row" >
                                        <div class="col col2">
                                            <span>Facebook: 550 (Pay per Post:0.3)</span>
                                            <span class="float-right percentage_num"  data-percentage-variable="FacebookJoined">60%</span>
                                            <div class="percentage_bar" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                        </div>    
                                        <div class="col col40 info-bubble">
                                            <div class="">
                                                1,343 out of 1,770 user completed this task.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col col2">
                                            <span>Twitter: 250 (Pay per Post:0.2)</span>
                                            <span class="float-right percentage_num"  data-percentage-variable="TwitterJoined">15%</span>
                                            <div class="percentage_bar" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                        </div>    
                                        <div class="col col40 info-bubble">
                                            <div class="">
                                                1,120 out of 1,770 user completed this task.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col col2">
                                            <span>Left: 150</span>
                                            <span class="float-right percentage_num"  data-percentage-variable="Left">25%</span>
                                            <div class="percentage_bar" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                        </div>    
                                        <div class="col col40 info-bubble">
                                            <div class="">
                                                <a href="#" class="text-color--red">Invite more</a> users to join the campaign.
                                            </div>
                                        </div>
                                    </div>
                            </div>
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