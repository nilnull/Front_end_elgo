<!--header-->
	<?php include 'header.php';?>
<style>
.ct-chart .ct-bar {
  stroke-width: 25px;
}
.ct-chart .ct-label.ct-horizontal {
  text-align: center;
}
</style>
       
<script>
    $(document).ready(function(){
        $('.loadUserInfo').click(function(event){
            userlist_type=$(this).data('type');
            //get the data from the server for this 
            //by ajaxing or getting a preloaded table
        });
        
        $('.toggle_Userlist_overview').click(function(event){
            
            $(".dashboard_campaign_overview").toggle();
            $(".dashboard_campaign_userListing").toggle();
        });
        
        //for coloring groups
        var groups_colors = {proSocialMedia:"orange", Malaysia:"red"};
        $( ".groupSquareColor" ).each(function( index ) {
            groupName=$(this).data('group');
            $(this).addClass('bg-color--'+groups_colors[groupName]);//
        });
        $('.select_element').click(function(){
            $('.ct-chart.graph').parent().toggle();
            $('.ct-chart.bars').parent().toggle();
        });
        //full description and explantion of the chart library in
        //http://www.smashingmagazine.com/2014/12/16/chartist-js-open-source-library-responsive-charts/
        // for charts //labels for x-axis and series for Y-axis
        //graph chart
        var graph_data={
          labels: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', 'Today'],
          series: [
            [15, 50, 60, 75, 90, 40, 60,40]
          ]
        };
        var graph_options={
          width: 1100,
          height: 320,
        lineSmooth: false
        };
        new Chartist.Line('.ct-chart.graph', graph_data, graph_options);
        
        //bar chart
        var bar_data={
          labels: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', 'Today'],
          series: [
            [15, 50, 60, 75, 90, 40, 60, 40],
            [20, 50, 10, 30, 30, 55, 80, 30],
              [95, 80, 50, 7, 20, 50, 10, 20]
          ]
        };
        var bar_options={
          width: 1100,
          height: 320,
        seriesBarDistance: 25,
        };
        new Chartist.Bar('.ct-chart.bars', bar_data, bar_options);
        
    });
</script>
	<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<link href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css" rel="stylesheet" type="text/css" />
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
                </div>
                <div class="row h6 ">
                    <div class="inline col col2 small-percentage_info h7">
                        <div class="col col3 space-left-inner">
                            <div class=" row " >
                                <span class="">Spent Today</span>
                                <span class="float-right percentage_num hide"  data-percentage-variable="userJoined" >3%</span>
                                <div class="percentage_bar small bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                <div class=" info_btm">3.5 of 1,000</div>
                            </div>
                        </div>
                        <div class="col col3 space-left-inner">
                            <div class=" row " >
                                <span>Total Spent</span> 
                                <span class="float-right percentage_num hide"  data-percentage-variable="userJoined" >80%</span>
                                <div class="percentage_bar small bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                <div class=" info_btm">800 of 1,000</div>
                            </div>
                        </div>
                        <div class="col col3 space-left-inner">
                            <div class=" row " >
                                <span>End Date</span>
                                <span class="float-right percentage_num hide"  data-percentage-variable="userJoined" >30%</span>
                                <div class="percentage_bar small bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                <div class=" info_btm">24Jan ( 17 days left)</div>
                            </div>
                        </div>
                    </div>
                    <div class=" inline float-right campaign_type">Type: <span class="bold ">POST</span></div>
                </div>
                <div class="dashboard_campaign_userListing" style="display:none;">
                    <div class="row">
                        <div class="col col20">
                            
                            <div class="row left-menu">
                                <div class=" toggle_Userlist_overview">
                                    <a href="#userlist" class="side-left-menu__item-link ">
                                        <h6 class="h7 ">BACK</h6>
                                    </a>
                                </div>
                                <div class=" js-custom_menu__item">
                                    <a href="#userlist_invited" data-type="invited" class="side-left-menu__item-link thinner active loadUserInfo">
                                        <h6 class="h7 ">Invited (1,890)</h6>
                                    </a>
                                </div>

                                <div class=" js-custom_menu__item">
                                    <a href="#userlist_applied" data-type="applied" class="side-left-menu__item-link thinner loadUserInfo">
                                        <h6 class="h7 ">Applied (12)</h6>
                                    </a>
                                </div>
                                
                                <div class=" js-custom_menu__item">
                                    <a href="#userlist_accepted" data-type="accepted" class="side-left-menu__item-link thinner loadUserInfo">
                                        <h6 class="h7 ">Accepted (1,290)</h6>
                                    </a>
                                </div>
                                
                                <div class=" js-custom_menu__item">
                                    <a href="#userlist_declined" data-type="declined" class="side-left-menu__item-link thinner loadUserInfo">
                                        <h6 class="h7 ">Declined (2)</h6>
                                    </a>
                                </div>
                                
                            </div>
                            <div class="row GroupInfo">
                                <div class="title bold"> Groups</div>
                                <div class="groupinfo_item"><div class="bulletpoint small_square groupSquareColor inline "  data-group='proSocialMedia'></div> Pro Social Media</div>
                                <div class="groupinfo_item"><div class="bulletpoint small_square groupSquareColor  inline"  data-group='Malaysia'></div> Malaysia</div>
                                <div class="groupinfo_item"><div class="bulletpoint task-done fa fa-check   inline"         data-group='Malaysia'></div> Task Completed (Posts/Hashtag-click to view more)</div>
                            </div>
                            <div class="row pagination">
                                <div class="float-right">
                                    <a href="#" class="text-color--red">prev</a>
                                    <input class="custom_txt_input inline" type='text' value="10"/>of 12
                                    <a href="#" class="text-color--red">Next</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col col80 ">
                            <div class="Custom_table bg-color--white h7"> 
                                <div class="table_header row text-color--white bg-color--grey--dark">
                                        <div class="border_transparent table_td col col2 ">User </div>
                                        <div class="border_transparent table_td col col20 ">Time Invited</div>
                                        <div class="border_transparent table_td col col20">Time Accepted</div>
                                        <div class="border_transparent table_td col col10"><span class="fa fa-facebook"></span></div>
                                </div> 
                                <div class="table_body row">
                                    <?php $i=0;while($i<10){?>  
                                    <div class="table_row h7">
                                        <div class="table_td col col2">
                                            <div class="small_square groupSquareColor inline " data-group='proSocialMedia'></div>
                                            <img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle user-avatar--header-smaller">
                                            Yvonne Ten
                                        </div>
                                        <div class="table_td col col20">20:10:05 10 Dec 2014</div>
                                        <div class="table_td col col20">20:10:05 10 Dec 2014</div>
                                        <div class="table_td col col10"><span class="task-done fa fa-check"></span></div>
                                    </div>
                                    <?php $i++;} ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
<!--                start of the analysis overview       -->
                <div class="dashboard_campaign_overview" >
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
                                    <div class="ct-chart graph col col1" >
                                        
                                    </div>
                            </div>
                            <div class="row dashboard_campaign_analysisInfo-stats_chart-bars" style="display:none;">
                                <div class="ct-chart bars col col1" >
                                        
                                </div>
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
                                        <div class="percentage_bar bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                    </div>
                                    <div class="row" >
                                        <span>Total User Joined: 1,770</span>
                                        <span class="float-right percentage_num"  data-percentage-variable="userDeclined">15%</span>
                                        <div class="percentage_bar bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
                                    </div>
                                    <div class="row" >
                                        <span>Total User Joined: 1,770</span>
                                        <span class="float-right percentage_num"  data-percentage-variable="userPending">25%</span>
                                        <div class="percentage_bar bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
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
                                                <div class="percentage_bar bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
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
                                                <div class="percentage_bar bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
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
                                                <div class="percentage_bar bg-color--body-darker" ><div class="percentage_bar-complete bg-color--red"></div></div>
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
                    <div class="row">
                            <input class="btn small btn__bg-color--red Campaign_edit "      data-campid='CampaignID_here' type="submit" value="EDIT">
                            <input class="btn small btn__bg-color--red Campaign_viewUsers toggle_Userlist_overview" data-campid='CampaignID_here' type="submit" value="VIEW ALL USERS">
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