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
	
});


// Function
function close_popup(){
	$.fancybox.close();
}

function change_selection_first_color(a){
  a.style.color = "#000";              
}