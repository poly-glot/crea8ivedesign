$(document).ready(function()
{
	if ( $.browser.msie )
	{
		 $(".topmenus > ul > li:last-child").addClass("last-child");
		 $(".topmenus > ul > li:last-child").css("background","none");
		 $("#footer ul.bottom_menus > li:first-child").addClass("first-child");
		 $("#footer ul.bottom_menus > li:last-child").addClass("last-child");
		 $("#trigger_list ul li:last-child").addClass("last-child");
		 $(".good_contents .column:last-child").addClass("last-child");
	}

	$(".tooltip").tipTip({maxWidth: "auto", edgeOffset: 10});


     $('ul.sf-menu').superfish({
            delay: 200,												// delay on mouseout
            animation: {opacity:'show',height:'show'},
            autoArrows: false,										// disable generation of arrow mark-up
            dropShadows: false,									// disable drop shadows
            speed: "fast",
			pause:false
     });

	$("#trigger_opener").click(function()
	{
			if($(this).hasClass("open"))
			{
				$(this).removeClass("open");
				$("#trigger_list").animate({width: 'toggle'});
			}else{
				$(this).addClass("open");
				$("#trigger_list").animate({width: 'toggle'});
			}

			return false;
	});


	 $("#toTop").scrollToTop({speed:500,start:100});

	//$("a[rel^='prettyPhoto']").prettyPhoto();
	$("a[rel^='prettyPhoto']").prettyPhoto({overlay_gallery: false});

	$("#special_promo_package").click(function()
	{
			$(".inputx input").removeAttr("checked");
			$("#OrderLogoPackageId").val("27");
			$("#packageForm").submit();

			return false;
	});

	$("#how_it_works_steps ul > li > a").click(function() {
		$.scrollTo($(this).attr("href"), 1000);
		return false;
	});

	$("a.packageBtn").click(function() {
		var package = $(this).parents(".homepage_package");
		$(".homepage_package_selected").removeClass("homepage_package_selected");
		package.find("input").attr("checked", "checked");
		package.addClass("homepage_package_selected");
		$("#packageForm").submit();
		return false;
	});

	$("#industry_list_select").change(function() {
		document.location = $(this).val();
	});

	$('#slidshow_container').cycle({
		fx: 'fade', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
		speed: 'slow',
		timeout: 6000,
		pager: false
	});

	$('#slidshow_container').cycle("pause");

	$("#slideshow_prev_link").click(function() {
		$('#slidshow_container').cycle('prev');
		return false;
	});

	$("#slideshow_next_link").click(function() {
		$('#slidshow_container').cycle('next');
		return false;
	});
});
