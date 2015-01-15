<!--header-->
	<?php include 'header.php';?>
<style>

</style>
       
<script>
    $(document).ready(function(){
    });
</script>

	<!--Content-->
	<section class="wrap mainBody-container">
		<div class="row card-container messaging-display-form bg-color--white h3 text-color--grey--darker">
            
            <div class=" row header">
                  
                <div class="col col4 left-panel ">
                        <span class="h6 inline list-label text-color--grey--darker">Users</span>
<!--                    only for brand-->
                    <div class=" float-right inline ">
                        <input type="submit" class="float-right inline new_msg btn   bg-color--red " value="New Message">
                    </div>
                </div>

                
                <div class="col col75  right-panel ">
                    <span class="bold inline float-left h6"> Tan Tee how </span>
                </div>
            </div>
            <div class="content">
                <!-- users list -->
                <div class="col col4  left-panel">
                    <div class="search">
                        <div class=" inline custom-text-input "> 
                            <div class="float-left inline h6 text-color--grey searchicon"><span class="inline float-right fa fa-search"></span></div>
                            <input type="text" class="float-right inline bg-color--white light h9 text-color--grey"  placeholder="Search">
                        </div>
                    </div>
                    <div class="users-list  h7 text-color--grey--darker">
                        <?php $i=0; while($i<5){?>
                        <div class="user ">
                            <a href="#" class="text-color--grey--darker">
                            <div class="user-msg-photo inline">
                                <img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle user-avatar--header">
                            </div>
                            <div class="user-msg-name inline">
                                <span class="h6 inline "> Azwan Aziz</span>
                            </div>
                            </a>
                        </div>
                            
                        <?php $i++; }?>
                    </div>
                </div>

                <!-- message content -->
                <div class="col col75  right-panel">
                    <div class="msg-body">
                            <div class="message ">
                                <a href="#" class="text-color--grey--darker">
                                <div class="user-msg-photo inline">
                                    <img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle user-avatar--header">
                                </div>
                                <div class="user-msg-name inline float-right">
                                    <div class="h6  inline float-left "> 
                                        <span>
                                            Azwan
                                        </span>
                                        <span class="h9 inline float-right">
                                            1 Jan 2015, 5:45pm
                                        </span>
                                    </div>
                                    <div class="h7 float-left">
                                        bluasdj kjasdnkamsd ajs njasd jaksld askldja sdklasjd kasdj askdj lasj kl jaskl 
                                    </div>
                                </div>
                                </a>
                            </div>
                    </div>
                    <div class="write-new-msg">
                        <div class="user-msg-photo inline">
                                    <img src="http://www.100open.com/wp-content/uploads/2011/04/Lego-logo.jpeg" class="circle user-avatar--header">
                                </div>
                                <div class=" inline custom-text-input float-right"> 
                                    <input type="text" class="float-right inline bg-color--white light h9 text-color--grey"  placeholder="Add a new message">
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