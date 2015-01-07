$(document).ready(function(){

	//Fancybox
	var fancybox_option = {padding:6,closeBtn:false,autoSize:false,scrolling:'no',width:410,height:'auto'};
	$('.js-popup').fancybox(fancybox_option);
	// $.fancybox.open($('#js-register--brand'),(fancybox_option));
	
	// Registration Form
	var current_set, next_set, previous_set, left, opacity, scale, animating, step_count = 1, step_percentage = 0;
	function update_text(a, b){
		$(a).text(b);
	}

	$(".js-next").click(function(){
		if(animating) return false;
		animating = true;
		
		current_set = $(this).parent().parent();
		next_set = $(this).parent().parent().next();
		
		next_set.show(); 
		
		current_set.animate({opacity: 0}, {
			step: function(now, mx) {
				scale = 1 - (1 - now) * 0.2;
				left = (now * 50)+"%";
				opacity = 1 - now;
				current_set.css({'transform': 'scale('+scale+')'});
				next_set.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_set.hide();
				animating = false;
				if (current_set.parent().hasClass('js-register-form--individual')){
					step_count++;
					update_text('.js-step-count', step_count);
					update_text('.js-point', '5');
					var get_point = parseInt($('.js-point').text());
					if(get_point > 0){
						$('.js-point').parent().removeClass('steps-status--not-active');
					};
				};
			}, 
			easing: 'easeInOutBack'
		});
	});

	$(".js-previous").click(function(){
		if(animating) return false;
		animating = true;
		
		current_set = $(this).parent().parent();
		previous_set = $(this).parent().parent().prev();
		
		previous_set.show(); 
		current_set.animate({opacity: 0}, {
			step: function(now, mx) {
				scale = 0.8 + (1 - now) * 0.2;
				left = ((1-now) * 50)+"%";
				opacity = 1 - now;
				current_set.css({'left': left});
				previous_set.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_set.hide();
				animating = false;
				if (current_set.parent().hasClass('js-register-form--individual')){
					step_count = step_count - 1;
					update_text('.js-step-count', step_count);
				};
			}, 
			easing: 'easeInOutBack'
		});
	});

	$(".js-done").click(function(){
		$('.js-steps-box').animate({opacity: 0});
	});
	
	$('.js-edit').click(function(e){
		e.preventDefault();
		parent = $(this).parent().parent().parent();
		console.debug(parent.prop('id'));
		$('.card-border').each(function(i, obj) {
			if ($(obj).not(parent))
			{
				$(obj).not(document.getElementById(parent.prop('id'))).block({
					overlayCSS: {  
							top:'0',
							left:'0',
							backgroundColor:'#e6e6e6',
							opacity:.8,
							cursor:    null, 
						}, 
						message: null 
						
					});
				// $(obj).not( document.getElementById(parent.prop('id')) ).addClass( 'edit-popup--disable' );
			}
			
			
		});

		$(this).parent().parent().parent().find('.js-edit-popup').show().css('padding-top', '15' + 'px');
		$(this).parent().parent().parent().find('.js-edit-popup').show().css('padding-left', '15' + 'px');
		$(this).parent().parent().parent().find('.js-edit-popup').addClass('edit-popup--active');
	});
	
	$('.js-edit-popup__close').click(function(){
		$('.card-border').each(function(i, obj) {
			$(obj).unblock(); 
		});
		$(this).parent().removeClass('edit-popup--active');
		$(this).parent().css('padding-top', '0px');
	})
	
	$('.js-edit-popup__cancel').click(function(){
		$('.card-border').each(function(i, obj) {
			$(obj).unblock(); 
		});
		$(this).parent().parent().parent().parent().removeClass('edit-popup--active');
		$(this).parent().parent().parent().parent().css('padding-top', '0px');
	})
	
	
	var max_fields      = 20; //maximum input boxes allowed
	var x = 1; 
	var y = 1; 
	var z = 1; 
	var a = 1; 
	var b = 1; 
	var c = 1; 
	var d = 1; 

	$('.js-add-family').click(function(e){
		e.preventDefault();		
		if(x < max_fields){ 
			x++; //text box increment
			$('.input_relation_wrap').append(
					'<div class="row form-group" id=family-field' + x + '>\n\
						<div class="col col30"><select class="profile-form__select"> <option>Father</option></select></div>\n\
						<div class="col col60"><input type="text" class="profile-form__field--full" name="family_name[]" placeholder="Family Name"></div>\n\
						<div class="col col10"><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></div>\n\
					</div>');
					
		}

	})
	$('.js-add-nationality').click(function(e){
		e.preventDefault();		
		if(y < max_fields){ 
			y++; //text box increment
			$('.input_nationality_wrap').append(
					'<div class="row form-group" id=nationality-field' + y + '>\n\
						<label class="profile-form__label"></label> <select class="profile-form__select"><option>Malaysian</option></select>\n\
						<span><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></span>\n\
					</div>');
					
		}

	})
	$('.js-add-language').click(function(e){
		e.preventDefault();		
		if(z < max_fields){ 
			z++; //text box increment
			$('.input_language_wrap').append(
					'<div class="row form-group" id=language-field' + z + '>\n\
						<label class="profile-form__label"></label> <select class="profile-form__select"><option>Malaysian</option></select>\n\
						<span><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></span>\n\
					</div>');
					
		}

	})
	$('.js-add-blog').click(function(e){
		e.preventDefault();		
		if(a < max_fields){
			a++; //text box increment
			$('.input_blog_wrap').append(
					'<div class="row form-group" id=language-field' + a + '>\n\
						<label class="profile-form__label"></label> <input class="profile-form__field" name="blog[]">\n\
						<span><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></span>\n\
					</div>');
					
		}

	})
	$('.js-add-contact').click(function(e){
		e.preventDefault();		
		if(b < max_fields){
			b++; //text box increment
			$('.input_contact_wrap').append(
					'<div class="row form-group" id=language-field' + b + '>\n\
						<label class="profile-form__label"></label> <input class="profile-form__field" name="contact[]">\n\
						<span><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></span>\n\
					</div>');
					
		}

	})
	$('.js-add-email').click(function(e){
		e.preventDefault();		
		if(c < max_fields){ 
			c++; //text box increment
			$('.input_email_wrap').append(
					'<div class="row form-group" id=language-field' + c + '>\n\
						<label class="profile-form__label"></label> <input class="profile-form__field" name="email[]">\n\
						<span><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></span>\n\
					</div>');
					
		}

	})
	
	$('.js-add-transport').click(function(e){
		e.preventDefault();		
		if(d < max_fields){ 
			d++; //text box increment
			$('.input_transport_wrap').append(
					'<div class="row form-group" id=language-field' + d + '>\n\
						<label class="profile-form__label"></label> <input class="profile-form__field" name="transport[]">\n\
						<span><a href="#" class="fa fa-close text-color--grey profile-form__data"></a></span>\n\
					</div>');
					
		}

	})
});


// Function

function open_popup(a){
	$.fancybox.open($('#'+a));
}

function close_popup(){
	$.fancybox.close();
}

function change_selection_first_color(a){
  a.style.color = "#000";              
}

