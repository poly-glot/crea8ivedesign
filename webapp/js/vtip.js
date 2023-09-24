/**
Vertigo Tip by www.vertigo-project.com
Requires jQuery
*/

this.vtip = function() {    
    this.xOffset = 0; // x distance from mouse
    this.yOffset = 25; // y distance from mouse       
	
    $(".vtip").unbind().hover(    
        function(e) {
			
			var tooltipHtml = $("#" + $(this).attr("rel"));

			if(tooltipHtml.length)
			{
				this.t 	= tooltipHtml.html();
				this.title = '';
			}else{
				this.t = this.title;
				this.title = '';
			}
            

            this.top = (e.pageY + yOffset); this.left = (e.pageX + xOffset);
            
            $('body').append( '<div id="vtip">' + this.t + '</div>' );
                        
            $('div#vtip').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
			
            
        },
        function() {
            this.title = this.t;
            $("div#vtip").fadeOut("slow").remove();
        }
    ).mousemove(
        function(e) {
            this.top = (e.pageY + yOffset);
            this.left = (e.pageX + xOffset);
                         
            $("div#vtip").css("top", this.top+"px").css("left", this.left+"px");
        }
    );            
    
};

jQuery(document).ready(function($){vtip();}) 