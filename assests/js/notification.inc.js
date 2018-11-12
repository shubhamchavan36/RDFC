$('document').ready(function(){
	if ($(window).width() > 640) {
		$('div.mobile-only').remove();
	}
  $("a#notificationLink").click(function(){
        $(this).toggleClass("active");
        $("div#popup-message").slideUp("300");        
        $("div#popup-notification").slideToggle("300");
        return false;                               
    });
  //clearNotification
   $("a.clearAllNotifications").bind('click',function(){      
            var toID = $(this).attr('toID');
            var type = $(this).attr('type');
            var aID = $(this).attr('aID');
            var ulClass = $(this).attr('ulClass');
            //&toID="+toID+"&type="+type
            var aUrl = SITEURL+"/inc/site.inc.php?xAction=clearAllNotifications";
                $.ajax({
                    type: "POST",
                    url: aUrl,
                    success: function (data) {
                        if(data=="OK"){
                            $("#"+aID+" span").remove();
                             $("#"+aID).trigger('click');
                            $("ul."+ulClass+" li").remove();
                            notificationCounter();
                        }
                    }
                });
                return false;
    });
     openLink();
     notificationCounter();
});
function notificationCounter(){
    var notificationCount = $('div.desk-only ul.notification_list li').not("#no_notifications").length;
    $("a.notification span").remove();  
    if(notificationCount > 0){
        $("a.notification").append('<span id="counter" class="counter">'+notificationCount+'</span>' );    
        $("div.popup-notification a.clearAllNotifications").show();
    }else{  
         $("ul.notification_list").html("<li id='no_notifications'>You dont have notifications</li>");  
         $("div.popup-notification a.clearAllNotifications").hide();
     }
}
function openLink(){
	    $("a.notificationMessage").unbind('click');
    	$("a.notificationMessage").bind('click',function(){   
            var notificationID = $(this).attr('rel');
            var notification_url = $(this).attr('redirectUrl');
            var redirectUrl = SITEURL+$(this).attr('redirectUrl');
            var aUrl = SITEURL+"/inc/site.inc.php?xAction=updateNotification&notification_url="+notification_url+"&redirectUrl="+redirectUrl;
                $.ajax({
                    type: "POST",
                    url: aUrl,
                    success: function (data) {
                       if(data == "OK"){
                             window.location.href = SITEURL+notification_url;
                        }
                    }
                });
            return false;
        });
}