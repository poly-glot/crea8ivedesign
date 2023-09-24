$(document).ready(function()
{
	 $('#slider2').cycle
	 ({
			fx:     'fade', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
			speed:  'slow',
			timeout: 6000,
			pager:  '#pager',
			pagerAnchorBuilder: function(i,el) 
			{
				$("#pager2").append('<a href="#" onclick="changePage(' + i + '); return false;"><span>'+(i+1)+'</span></a>');
				return '<a href="#"><span>'+(i+1)+'</span></a>';
			},
			pagerClick: function(i,el) 
			{
				$("#pager2 a.activeSlide").removeClass("activeSlide");
				var index = i + 1;
				$("#pager2 a:nth-child(" + index + ")").addClass("activeSlide");
			},
			prevNextClick: function(isNext, i, el)
			{
				$("#pager2 a.activeSlide").removeClass("activeSlide");
				var index = i + 1;
				$("#pager2 a:nth-child(" + index + ")").addClass("activeSlide");
			}
	});
	
	$('#slider2').cycle("pause");
	$("#pager2 a:first-child").addClass("activeSlide");		
	
	$("#prevLink1").click(function() { $('#slider2').cycle("prev"); return false; });
	$("#nextLink1").click(function() { $('#slider2').cycle("next"); return false; });	
	
	$("#prevLink2").click(function() { $('#slider2').cycle("prev"); return false; });
	$("#nextLink2").click(function() { $('#slider2').cycle("next"); return false; });		
	
});

function changePage(page)
{
    $("#pager").empty();
	 	$("#pager2").empty();
	
	
	 $('#slider2').cycle
	 ({
			fx:     'fade', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
			speed:  'slow',
			timeout: 6000,
			pager:  '#pager',
			startingSlide : page,
			pagerAnchorBuilder: function(i,el) 
			{
				$("#pager2").append('<a href="#" onclick="changePage(' + i + '); return false;"><span>'+(i+1)+'</span></a>');
				
				return '<a href="#"><span>'+(i+1)+'</span></a>';
			},
			pagerClick: function(i,el) 
			{
				$("#pager2 a.activeSlide").removeClass("activeSlide");
				var index = i + 1;
				$("#pager2 a:nth-child(" + index + ")").addClass("activeSlide");				
			}			
	});
	
	$('#slider2').cycle("pause");	
	$("#pager2 a.activeSlide").removeClass("activeSlide");
	var index = page + 1;
	if(index == 1)
	{
		$("#pager2 a:first-child").addClass("activeSlide");		
	}else{
		$("#pager2 a:nth-child(" + index + ")").addClass("activeSlide");
	}
}