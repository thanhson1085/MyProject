jQuery(document).ready(function(){
	jQuery(".dropdown dt a").click(function() {
		var toggleId = "#" + this.id.replace(/^link/,"ul");
		jQuery(".dropdown dd ul").not(toggleId).hide();
		jQuery(toggleId).toggle();
		if(jQuery(toggleId).css("display") == "none"){
			jQuery(this).removeClass("selected");
		}else{
			jQuery(this).addClass("selected");
		}
	});

	jQuery(".dropdown dd ul li a").click(function() {
		var text = jQuery(this).html();
		jQuery(".dropdown dt a span").html(text);
		jQuery(".dropdown dd ul").hide();
	});

	jQuery(document).bind('click', function(e) {
		var $clicked = jQuery(e.target);
		if (! $clicked.parents().hasClass("dropdown")){
			jQuery(".dropdown dd ul").hide();
			jQuery(".dropdown dt a").removeClass("selected");
		}

	});
});
					
