<!--Login Popup-->
<div id="js-login" class="text-center" style="display:none;height:555px;">
	<div class="table">
		<div class="table-cell">
			<div class="margin-center col60">
				<a href="#js-login--individual" class="block btn btn__bg-color--blue js-popup" style="margin-bottom:10px">LOGIN AS INDIVIDUAL</a>
				<a href="#js-login--brand" class="block btn btn__bg-color--red js-popup">LOGIN AS BRAND</a>
			</div>
		</div>
	</div>
</div>




<!--Individual Login-->
<div id="js-login--individual" class="text-center" style="display:none;height:555px;">


	<div class="popup-header bg-color--blue">
		<span class="popup-title">LOGIN AS AN INDIVIDUAL</span>
	</div>	
	
	

	<div class="socialconnect-container margin-center col70" style="margin-top: 75px;">
		<a class="rel block btn btn__connect btn__connect--facebook js-next">
			<i class="fa fa-facebook"></i>FACEBOOK CONNECT
		</a>
		<div class="rel text-with-middle-line"><span>or</span></div>
		<a class="rel block btn btn__connect btn__connect--google js-next">
			<i class="fa fa-google-plus"></i>GOOGLE CONNECT
		</a>
	</div>
	<a class="inline btn btn__bg-color--grey btn__popup" onclick="close_popup()">Cancel</a>
	
	
</div>




<!--Brands Login-->
<div id="js-login--brand" class="text-center" style="display:none;height:555px;">


	<div class="popup-header bg-color--red">
		<span class="popup-title">LOGIN AS AN BRAND</span>
	</div>	
	
	

	<form>
		<div class="form-group">
			<input class="form-field form-field--transparent" placeholder="Email">
		</div>
		<div class="form-group">
			<input class="form-field form-field--transparent" placeholder="Password">
		</div>
		<div class="form-group">
			<a class="inline btn btn__bg-color--grey btn__popup" onclick="close_popup()">Cancel</a>
			<input type="submit" class="inline btn btn__bg-color--red btn__popup" value="Login" />
		</div>
	</form>	
	
	
	
</div>







<!--Individual form-->
<div id="js-register--individual" class="text-center" style="display:none;height:555px;">


	<div class="popup-header bg-color--blue">
		<span class="popup-title">JOIN AS AN INDIVIDUAL</span>
	</div>	
	
	
	<div class="steps-status row js-steps-box">
		<div class="col col3">
			<div class="steps-status__item">
				<span class="block steps-status__text">STEP</span>
				<span class="block steps-status__number"><span class="js-step-count">1</span>/3</span>
			</div>
		</div>
		<div class="col col3">
			<div class="steps-status__item">
				<span class="block steps-status__text">COMPLETE (%)</span>
				<span class="block steps-status__number js-step-percentage">0</span>
			</div>
		</div>
		<div class="col col3">
			<div class="steps-status__item steps-status--not-active">
				<span class="block steps-status__text">POINTS <i class="fa fa-question-circle"></i></span>
				<span class="block steps-status__number js-point">0</span>
			</div>
		</div>
	</div>
	
	
	<form class="register-form js-register-form--individual">
		
		<fieldset class="abs form-fieldset popup-container col1">
			<p class="bold">Sign Up using your social network account.</p>
			<div class="socialconnect-container margin-center col70">
				<a class="rel block btn btn__connect btn__connect--facebook js-next">
					<i class="fa fa-facebook"></i>FACEBOOK CONNECT
				</a>
				<div class="rel text-with-middle-line"><span>or</span></div>
				<a class="rel block btn btn__connect btn__connect--google js-next">
					<i class="fa fa-google-plus"></i>GOOGLE CONNECT
				</a>
			</div>
			<a class="inline btn btn__bg-color--grey btn__popup" onclick="close_popup()">Cancel</a>
		</fieldset>
		
		<fieldset class="abs form-fieldset col1">
			<div class="row">
				<div class="col col2">
					<input class="form-field form-field--transparent" placeholder="First Name">
					<input class="form-field form-field--transparent" placeholder="Email">
					<input class="form-field form-field--transparent" placeholder="Gender">
				</div>
				<div class="col col2">
					<input class="form-field form-field--transparent" placeholder="Last Name">
					<input class="form-field form-field--transparent" placeholder="Phone">
					<input class="form-field form-field--transparent" placeholder="Age">
				</div>
				<select class="form-field form-select form-field--transparent" onchange="changeMe(this)">
					<option selected disabled>Country</option>
					<option>Malaysia</option>
					<option>Russia</option>
					<option>Syria</option>
					<option>Nigeria</option>
					<option>Indonesia</option>
					<option>Uzbekistan</option>
				</select>
			</div>
			<div class="popup-container row">
				<a class="inline btn btn__bg-color--grey btn__popup float-left" onclick="close_popup()">Cancel</a>
				<input type="button" name="next" class="inline btn btn__bg-color--blue btn__popup float-right js-next" value="Next" />
			</div>
		</fieldset>
		
		<fieldset class="abs form-fieldset col1">
			<div class="row popup-container">
				<p class="bold text-left">Connect to</p>
				<ul class="margin-center no-margin no-padding no-style col60">
					<li class="inline"><a href="#" class="h5 connect-to connect-to__google-plus connect-to--connected"><i class="fa fa-google-plus"></i></a></li>
					<li class="inline"><a href="#" class="h5 connect-to connect-to__twitter connect-to--connected"><i class="fa fa-twitter"></i></a></li>
					<li class="inline"><a href="#" class="h5 connect-to connect-to__instagram connect-to--connected"><i class="fa fa-instagram"></i></a></li>
					<li class="inline"><a href="#" class="h5 connect-to connect-to__linkedin connect-to--connected"><i class="fa fa-linkedin-square"></i></a></li>
					<li class="inline"><a href="#" class="h5 connect-to connect-to__youtube"><i class="fa fa-youtube"></i></a></li>
					<li class="inline"><a href="#" class="h5 connect-to connect-to__foursquare connect-to--connected"><i class="fa fa-foursquare"></i></a></li>
				</ul>
			</div>
			<input class="form-field form-field--transparent" placeholder="Blog Address">
			<div class="popup-container row">
				<input type="button" name="previous" class="inline float-left btn btn__bg-color--grey btn__popup js-previous" value="Back" />
				<input type="button" name="next" class="inline btn btn__bg-color--blue btn__popup float-right js-next js-done" value="Done" />
			</div>
		</fieldset>
		
		<fieldset class="abs form-fieldset popup-container col1">
			<p class="popup__h1">Thank You!</p>
			<p>Quisque risus est, pellentesque facilisis libero at, dictum volutpat nisi. Vestibulum non cursus.</p>
			<div style="height:100px"></div>
			<a class="inline btn btn__bg-color--blue btn__popup" onclick="close_popup()">Close</a>
		</fieldset>
	
	</form>
	
	
</div>



<!--Brand form-->
<div id="js-register--brand" class="text-center" style="display:none;height:420px;">


	<div class="popup-header bg-color--red">
		<span class="popup-title">JOIN AS AN BRAND</span>
	</div>
	
	
	<form class="register-form">
		
		<fieldset class="abs form-fieldset col1">
			<div class="row">
				<input class="form-field form-field--transparent" placeholder="Company Name">
				<input class="form-field form-field--transparent" placeholder="Name">
				<div class="col col2">
					<input class="form-field form-field--transparent" placeholder="Company Email">
				</div>
				<div class="col col2">
					<input class="form-field form-field--transparent" placeholder="Phone">
				</div>
				<input class="form-field form-field--transparent" placeholder="Website URL">
				<select class="form-field form-select form-field--transparent" onchange="changeMe(this)">
					<option selected disabled>Industry</option>
					<option>Engineering</option>
					<option>Finance</option>
				</select>
			</div>
			<div class="popup-container row">
				<a class="inline btn btn__bg-color--grey btn__popup float-left" onclick="close_popup()">Cancel</a>
				<input type="button" name="next" class="inline btn btn__bg-color--red btn__popup float-right js-next" value="Next" />
			</div>
		</fieldset>
		
		<fieldset class="abs form-fieldset col1">
			<div class="row popup-container margin-center col70">
				<p class="popup__h1">Verify Account</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
				<p>&nbsp;</p>
				<a class="rel block btn btn__connect btn__connect--facebook js-next">
					<i class="fa fa-facebook"></i>FACEBOOK CONNECT
				</a>
			</div>
		</fieldset>
		
		<fieldset class="abs form-fieldset popup-container col1">
			<p class="popup__h1">Thank You!</p>
			<p>Quisque risus est, pellentesque facilisis libero at, dictum volutpat nisi. Vestibulum non cursus.</p>
			<div style="height:100px"></div>
			<a class="inline btn btn__bg-color--red btn__popup" onclick="close_popup()">Close</a>
		</fieldset>
	
	</form>
	
	
</div>