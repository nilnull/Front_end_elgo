	<!--header-->
	<?php include 'header.php';?>
	
	<script>
		$(document).ready(function() {
			$('a[href="#All"]').trigger('click');
		});
	</script>
	<!--Profile-->
	<section class="wrap mainBody-container">	
        <div class="top-submenu-bar">
            <div class="sub-menu inline"> 
                <p class="bold inline submenu-title">Campaigns:</p>
                <div class="js-custom_menu__item inline " ><a href="#All" data-level="one" class=" top-submenu active">All (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Applied" data-level="one" class=" top-submenu">Applied (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Invited" data-level="one" class=" top-submenu">Invited (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Current" data-level="one" class=" top-submenu">Current (4)</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Completed" data-level="one" class=" top-submenu">Completed (4)</a></div>
            </div>
            <div class="float-right inline custom-text-input "> 
                <div class="inline h6 text-color--grey searchicon"><span class="fa fa-search"></span></div>
                <input type="text" class="float-right inline bg-color--body light h9 text-color--grey"  placeholder="Search">
            </div>
        </div>
        <!--  type : Applied -->
		<div class="row level-one-tab" id="All" style="" >
           <div class="sub-menu underlined ">
                <div class="js-custom_menu__item inline " ><a href="#AllAll" data-level="two" class=" top-submenu active">All</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Apperal" data-level="two" class=" top-submenu ">Apperal & accessories</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Banking" data-level="two" class=" top-submenu ">Banking</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Consumer" data-level="two" class=" top-submenu ">Consumer products</a></div>
                <div class="js-custom_menu__item inline " ><a href="#Electronics" data-level="two" class=" top-submenu ">Electronics</a></div>
               <div class="js-custom_menu__item inline " ><a href="#Food" data-level="two" class=" top-submenu ">Food & Beverage</a></div>
               <div class="js-custom_menu__item inline " ><a href="#Sports" data-level="two" class=" top-submenu ">Sports</a></div>
               <div class="js-custom_menu__item inline " ><a href="#Technology" data-level="two" class=" top-submenu ">Technology</a></div>
               <div class="js-custom_menu__item inline " ><a href="#Others" data-level="two" class=" top-submenu ">Others</a></div>
            </div>
            <div class="row level-two-tab" id="Banking" style="display:none;" >
                
            </div>
            <div class="row level-two-tab" id="AllAll" style="" >
                <?php $i=0; while($i<7){?>
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
                <div class="row col col10 center loadmore_btn" >
                    <input type="submit" class=" center btn  btn-bottom btn__bg-color--grey--light light" value="LOAD MORE">
                </div>
            </div>
		</div>
        
        <!--  type : Applied -->
        <div class="row level-one-tab" id="Applied" style="display:none;" >
        <?php $i=0; while($i<2){?>
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
                            <div class="float-right  inline Campaign-card-action"><input class="btn  btn-bottom btn__bg-color--grey no-transition right inline " type="submit" value="APPLIED"></div>
                            <div class="float-right  Campaign-card-type inline"><span class="bold h6 black">HASHTAG</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;}?>
        </div>
        
        <!--  type : Invited -->
        <div class="row level-one-tab" id="Invited" style="display:none;" >
            <?php $i=0; while($i<2){?>
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
                            <div class="float-right  inline Campaign-card-action"><input class="btn  btn-bottom btn__bg-color--red no-transition right inline " type="submit" value="JOIN"></div>
                            <div class="float-right  Campaign-card-type inline"><span class="bold h6 black">HASHTAG</span></div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <div class="float-right  inline Campaign-card-action"><input class="btn  btn-bottom btn__bg-color--grey no-transition right inline " type="submit" value="JOINED"></div>
                            <div class="float-right  Campaign-card-type inline"><span class="bold h6 black">HASHTAG</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;}?>
        </div>
        
        <!--  type : Current -->
        <div class="row level-one-tab" id="Current" style="display:none;" >
            <?php $i=0; while($i<2){?>
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
                    <div class="row campaing-card-bottombar-moreinfo btn__bg-color--grey--dark ">
                        <div class="float-left h7 inline camp-end-date text-color--white">                            
                            Campaign ends <br> on 21 Dec 2014
                        </div>
                        <div class="float-right  inline time-left text-color--white">
                            <span class="col col3 inline ">
                                <span class="h4 bold"> 05 </span>
                                <span class="h7">Days</span>
                            </span>
                            <span class="col col3 inline ">
                                <span class="h4 bold"> 20 </span>
                                <span class="h7">Hours</span>
                            </span>
                            <span class="col col3 inline ">
                                <span class="h4 bold"> 15 </span>
                                <span class="h7">Mins</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;}?>
        </div>
        
        <!--  type : Completed -->
        <div class="row level-one-tab" id="Completed" style="display:none;" >
            <?php $i=0; while($i<2){?>
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
                    <div class="row campaing-card-bottombar-moreinfo btn__bg-color--grey--dark ">
                        <div class="float-left  inline state text-color--white">
                            <span class="row h7 col col1">
                                Task Completed 
                            </span>
                            <span class="row col col1 h3 bold precent">
                                100%
                            </span>
                        </div>
                        <div class="float-left  inline time-used text-color--white">
                            <span class="row h7 col col1">
                                Time Used 
                            </span>
                            <span class="row col col1">
                                <span class="col col3 inline ">
                                    <span class="h5 bold"> 05 </span>
                                    <span class="h9">Days</span>
                                </span>
                                <span class="col col3 inline ">
                                    <span class="h5 bold"> 20 </span>
                                    <span class="h9">Hours</span>
                                </span>
                                <span class="col col3 inline ">
                                    <span class="h5 bold"> 15 </span>
                                    <span class="h9">Mins</span>
                                </span>
                            </span>
                        </div>
                        <div class="float-right  inline earned text-color--white">
                            <span class="row h7 col col1">
                                Earned
                            </span>
                            <span class="row col col1 h3 bold ">
                                0.60 E
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;}?>
        </div>
        
	</section>	
	<!--Footer-->
	<?php include '../include/footer.php';?>
	
	<!--Popup-->
	<?php include '../include/popup.php';?>

</body>
</html>