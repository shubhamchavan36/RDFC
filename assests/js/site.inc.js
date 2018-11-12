$(document).ready(function(){
	 $("#nav-icon").click(function (e) {
		$(this).toggleClass("open"), 
		$("div.menu-wrap").toggleClass("active")
	  });
	
        $('#mycarousel').slick({ 		 
                scroll: 1
        }); 

        $('.league-table-nav').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            ]
        });

	$("form.member-login").submit(function(){
        if(FLGERR == 0){    
            var $frm = $(this);
            var aUrl = SITEURL+"/inc/site.inc.php?xAction=memberLogin&"+$("form#member-login").serialize();
            showLoader();
            $.ajax({
                type: 'post',
                url: aUrl,
                success: function(data){
                    if(data == 'OK'){
                        var redirectURL = "";
                        if($.trim($("form#member-login").find("#redirectMe").val()) != "")
                            redirectURL = SITEURL+"/"+$.trim($("form#member-login").find("#redirectMe").val());
                        else
                            redirectURL = SITEURL;
                        window.location = redirectURL;
                    } else if(data == 'ERR'){
                        hideLoader();
                        $.mxalert({msg:"Please enter valid login credentials."});
                    }
                }
            }); 
        }
            return false;
    });

    /*Code for distroy session when click on logout*/
    $("a.memberLogout").click(function(){
        var aUrl = SITEURL+"/inc/site.inc.php?xAction=memberLogout";
        showLoader();
            $.ajax({
                type: 'post',
                url: aUrl,
                success: function(data){
                    if(data == 'OK'){
                        window.location = SITEURL;
                    } else if(data == 'ERR'){
                        hideLoader();
                        $.mxalert({msg:"Something went wrong"});
                    }
                }
            }); 
            return false;
    });
    /*End of logout*/
		$("form#stay-connected").submit(function(){
		if(FLGERR == 0){ 
            
	   		var $frm = $(this);
			var aUrl = SITEURL+"/inc/site.inc.php?xAction=stayConnectedEmailSave";
			showLoader();
			$.ajax({
				type: 'post',
				url: aUrl,
				data:$frm.serialize(),
				/*success: function(data){
					hideLoader();
					if(data == 'OK'){
						$.mxalert({msg:"Email Send Successfully"});
					}else{
						$.mxalert({msg:"Email Not Send Successfully"});
					}
				}*/
				success: function(data){
				hideLoader();
                                    if($.trim(data) == 'OK'){
                                         $.mxalert( {
                                            msg: "You are subscription successfull."
                                         });
                                        $("form#stay-connected").trigger('reset');
                                        return false;
                                    } else if($.trim(data) == 'REGISTERED'){
                                        $.mxalert( {
                                            msg: "Mail ID alredy exists."
                                        });
                                    } else {
                                        $("form#stay-connected").trigger('reset'); 
                                        $.mxalert({msg:"Something went wrong please try again."});
                                        return false;
                                    }  
                                }
			
			});	
		}
			return false;
   });
    //code for assign city session
     $('select#cityPage,select#cityPopup,select#homeCity').change(function(){
        var aUrl = SITEURL+"/inc/site.inc.php?xAction=setCityInSession";    
        showLoader();
            $.ajax({
                type:"POST",
                url:aUrl,
                data:{'cityID':$(this).val()},
                success:function(data){
                    if(data=="OK"){
                        window.location.reload();
                    }else{
                        hideLoader();
                        $.mxalert({msg:"Something went wrong"});
                    }   
                }
            })
    });
	
	
});



//////////////////////////////////////////////////////////////////////////////
