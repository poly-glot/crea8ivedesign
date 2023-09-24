$(document).ready(function()
{
	 $('#slider').cycle
	 ({
			fx:     'fade', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
			speed:  'slow',
			timeout: 6000,
			pager:  '#pager',
			pagerAnchorBuilder: function(i,el) 
			{
				return '<a href="#"><span>'+(i+1)+'</span></a>';
			}
	});
	
	//Disable Auto Slideshow
	//$('#slider').cycle("pause");
	
	 $('#design_a_logo').cycle
	 ({
			fx:     'fade', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
			speed:  'slow',
			timeout: 6000,
			pager:  false
	});	
	
	 $('#design_a_website').cycle
	 ({
			fx:     'fade', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
			speed:  'slow',
			timeout: 6000,
			pager:  false
	});	
	 
	 $('#design_a_stationery').cycle
	 ({
			fx:     'fade', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
			speed:  'slow',
			timeout: 6000,
			pager:  false
	});		 
	
	
	
	$(".homepage_package").click(function()
	{
		$(".homepage_package_selected").removeClass("homepage_package_selected");
		$(this).find("input").attr("checked", "checked");
		$(this).addClass("homepage_package_selected");
		$("#packageForm").submit();
		return false;
	});

});
