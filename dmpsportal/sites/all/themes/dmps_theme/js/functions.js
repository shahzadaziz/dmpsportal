// Sudo Slider

$(document).ready(function(){	
   var sudoSlider = $("#slider").sudoSlider({
	numeric:true,
	auto:true,
	controlsFade:false,
	prevNext: false,
	pause: 5000
	});
});

// Tabs Slider
$(document).ready(function(){
	$(".tab-nav li:first").addClass("active"); //Activate first tab
	$(".tab-content") .hide();
	$(".tab-content:first").show(); //Show first tab content
	//On Click Event
	$(".tab-nav li").click(function() {
		$(".tab-nav li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active");
		$(".tab-content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});
});
// Vertical Slider
$(document).ready(function(){	
	var sudoSlider = $(".quick-videos").sudoSlider({
		vertical:true,
		continuous:false,
		auto:false,
		controlsFade:false
	});
});	

// Videos Slider

$(document).ready(function(){	
   var sudoSlider = $(".videos-slider").sudoSlider({
	numeric:true,
	auto:false,
	controlsFade:false,
	prevNext: true
	});
});
