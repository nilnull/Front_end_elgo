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
	<style>
	.card-container--s{min-height:136px}
	</style>	
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
			<li class="inline"><a href="#" class="user-nav__item bold">Create Campaigns</a></li>
			<li class="inline"><a href="#" class="user-nav__item user-nav__item--active bold">Users Insigths</a></li>
			<li class="inline"><a href="#" class="user-nav__item bold">Notifications</a></li>
			<li class="inline"><a href="#"><i class="fa fa-gear user-nav__fa-gear"></i></a></li>
		</ul>
	</section>
	
	
	
	
	<!--Content-->
	<section class="wrap mainBody-container">
	
		<div class="card-container">
			<span class="bold">Campaign:</span>
			<a href="#" class="inline createCampaign-top-menu">Create</a>
			<a href="#" class="inline createCampaign-top-menu createCampaign-top-menu--active">Dashboard</a>
		</div>
		
		
		
		<div class="row dashboard">
            <div class="card-container row">
                    <div class="col col2 h6">
                            Dashboard/Be A LEGO Creator <span class="bold">/Users</span>
                    </div >
                
                    <div class=" h7 float-right">
                        Type: <span class="bold">SHARE</span>&nbsp;
                        <a href="#" >Edit</a>&nbsp;
                        <a href="#" >Preview</a>&nbsp;
                        <a href="#" >Invite More</a>&nbsp;
                    </div >
            </div>
            <div class="card-container row h8">
                    <div class="col col5 ">
                         <span class="bold">Sort by:</span> Invited applied
                    </div >
                    <div class="col col5 ">
                             <span class="bold">Status:</span> Accepted Declined Pending
                    </div >
                    <div class="col col5 ">
                             <span class="bold">Posted:</span> All Facebook Twitter
                    </div >
                    <div class="col col5 ">
                             <span class="bold">Reach:</span> Top Engagment
                    </div >
                    <div class="col col5 ">
                             
                    </div >
            </div>
            <div class="row card-container ">
                <table class="dashboard-table h7" style="width:100%"  cellpadding="30">

                        <tr class="MainTitle">
                            <th colspan="5">
                                Be A LEGO CREATOR
                            </th>
                            <th colspan="4">
                                Posted
                            </th>
                        </tr>
                        <tr>
                            <th >Individual</th>
                            <th >Group Name</th>
                            <th >State</th>
                            <th >Action</th>
                            <th >Status</th>
                            <th class="h5"><span class="social-circle fa fa-facebook"></span></th>
                            <th class="h5"><span class="social-circle fa fa-twitter"></span></th>
                            <th class="h5"><span class="social-circle fa fa-google-plus"></span></th>
                            <th class="h5"><span class="social-circle fa fa-linkedin"></span></th>
                        </tr>
                    <tbody>
                        <?php $i=0;
                        while($i<3){
                        ?>
                        <tr>
                            <td>test</td>
                            <td>Group random Name</td>
                            <td class="green">Applied</td>
                            <td>test</td>
                            <td ><span class="task-done fa fa-check"></span></td>
                            <td ><span class="task-done fa fa-check "></span></td>
                            <td ><span class="task-not-done fa fa-remove"></span></td>
                            <td></td>
                            <td ><div><span class="task-not-done fa fa-remove"></span></div></td>
                        </tr>
                        <tr>
                            <td>test</td>
                            <td>Group random Name</td>
                            <td class="green">test</td>
                            <td>test</td>
                            <td ><span class="task-not-done fa fa-remove"></span></td>
                            <td ><span class="task-not-done fa fa-remove"></span></td>
                            <td ><span class="task-done fa fa-check "></span></td>
                            <td></td>
                            <td ><div><span class="task-done fa fa-check "></span></div></td>
                        </tr>
                        <tr>
                            <td>test</td>
                            <td>Group random Name</td>
                            <td class="green">Invited</td>
                            <td>test</td>
                            <td ><span class="gray-font fa fa-remove"></span><span class="gray-font fa fa-check"></span></td>
                            <td ><span class="task-not-done fa fa-remove"></span></td>
                            <td ><div><span class="task-done fa fa-check "></span></div></td>
                            <td></td>
                            <td ><span class="task-done fa fa-check "></span></td>
                        </tr>
                        <?php $i++;}?>
                    </tbody>
                </table>		
			</div>
            <div class="row ">
                <div class=" h7 float-right dashboard-pagination">
                    <div class="col "><span class="bold inline"> <a href="#" class="">Prev</a> </span>&nbsp; Page </div>
                    <div class="col col8"><input type="text" class="field" value="8"/></div>
                    <div class="col ">&nbsp;/80<span class="bold"> <a href="#" class="">Next </a></span></div>
                </div >
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