/**********************************************************
 BEGIN: PRELOADER
 **********************************************************/
jQuery(function($) {
	// Datepicker 
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
	});

	//login Dropdown
	$('#login .dropdown-toggle').click(function(){
		$('#login .dropdown-toggle').toggleClass('active');
		$('#login .dropdown-menu').toggleClass('show');
	});


	//show sidebar 
	$('.showSidebar').click(function(){
		$('.filterArea').addClass('active');
	});

	$('.hideSidebar').click(function(){
		$('.filterArea').removeClass('active');
	});

	// Ranger Slider
	

});

	// Details Slider 
	$(window).on('load', function(){
		// The slider being synced must be initialized first
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 165,
			itemMargin: 4,
			asNavFor: '#slider'
		});
		
		$('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});

		// team slider
		$('#teamSlider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 288,
			itemMargin: 4,
		});

		
	$('.datepicker').datepicker({
		startDate: new Date(),
	})
});

