$(document).ready(function(){
	$(".scroll-section:first").addClass('active');
	$("a.downscroll").click(function(e) { 
	   e.preventDefault();
	   //get index of current active 		 
	   currentActivIndex =   $(".scroll-section").index($(".scroll-section.active"));		    
		$(".scroll-section").removeClass('active');	
	   nextIndex = currentActivIndex + 1;
	   nextObj =   $(".scroll-section:eq(" + nextIndex + ")");
	   scrollPosition =  (nextObj.offset().top - $("div.book-slot").height());	
	   if(nextObj.hasClass('partner-with-us') || !(nextObj.length)){
			$("div.pageScroll a.downscroll").css('display','none');
			$("div.pageScroll a.upscroll").css('display','block');
			 $("html, body").animate({
				scrollTop: scrollPosition
			  }, "slow");
			
	   }else{
			  nextObj.addClass('active');
			  $("html, body").animate({
				scrollTop: scrollPosition
			  }, "slow");
	   }
	});
	$("a.upscroll").click(function(e){
			e.preventDefault();			
			$(".scroll-section:first").addClass('active');	
			$('html,body').animate({ scrollTop: 0 }, 'slow');
			$("div.pageScroll a.upscroll").css('display','none');
			$("div.pageScroll a.downscroll").css('display','block');
	});	
	 $(window).scroll(function(){
			var winTop = $(window).scrollTop();
			var bannerTop = $("div.banner").offset().top; 
			var playerTop = $("div.sec-player").offset().top; 
			var eventTop = $("div.event").offset().top;
			var csrTop = $("li.csr:first").offset().top;
			var infraTop = $("li.infra").offset().top;
			var partnerTop = $("li.partner-with-us").offset().top;
			var heightTop = 100;
			$("div.pageScroll a.upscroll").css('display','none');
			$("div.pageScroll a.downscroll").css('display','block');
			
			if((winTop+heightTop) >= bannerTop && (winTop+heightTop) < playerTop) {
				$(".scroll-section").removeClass('active');	
				$("div.banner").addClass('active');
				$("div.pageScroll a.upscroll").css('display','none');
				$("div.pageScroll a.downscroll").css('display','block');
			}else if((winTop+heightTop) >= playerTop && (winTop+heightTop) < eventTop){
				$(".scroll-section").removeClass('active');	
				$("div.sec-player").addClass('active');
				$("div.pageScroll a.upscroll").css('display','none');
				$("div.pageScroll a.downscroll").css('display','block');
			}else if((winTop+heightTop) >= eventTop && (winTop+heightTop) < csrTop){
				$(".scroll-section").removeClass('active');	
				$("div.event").addClass('active');
				$("div.pageScroll a.upscroll").css('display','none');
				$("div.pageScroll a.downscroll").css('display','block');
			}else if((winTop+heightTop) >= csrTop && (winTop+heightTop) < infraTop){
				$(".scroll-section").removeClass('active');	
				$("li.csr:first").addClass('active');
				$("div.pageScroll a.upscroll").css('display','none');
				$("div.pageScroll a.downscroll").css('display','block');
			}else if((winTop+heightTop) >= infraTop && (winTop+heightTop) < partnerTop){
				$(".scroll-section").removeClass('active');	
				$("li.infra").addClass('active');
				$("div.pageScroll a.upscroll").css('display','none');
				$("div.pageScroll a.downscroll").css('display','block');
			}else if((winTop+heightTop) >= partnerTop){
				$("div.pageScroll a.downscroll").css('display','none');
				$("div.pageScroll a.upscroll").css('display','block');
				$("li.partner-with-us").addClass('active');
		   }
	 });	
});