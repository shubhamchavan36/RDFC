function showLoader(){
	if($("div.loader").length > 0){
	 	$("div.loader").show();
	}
}

function hideLoader(){
	if($("div.loader").length > 0){
	 	$("div.loader").hide();
	}
}

function isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	}
	return true;
}
$( document ).ready( function () {
                $( "a.fmFbshare" ).click( function () {
			var $obj = $( this );
			shareFacebook( $obj );
			return false;
		});

		$( "a.fmTwshare" ).click( function () {
			var $obj = $( this );
			twitterShare( $obj );
			return false;
		});
});
function shareFacebook( $obj ) {
		var shareUrl = $obj.attr('shareUrl');
		window.open( "https://www.facebook.com/sharer.php?u="+shareUrl, "Facebook Share", "height=300, width=600,scrollbars=yes" );
		return false;
	}

function twitterShare( $obj ) {
		var shareUrl = $obj.attr('shareUrl');
		var shareTitle = $obj.attr('shareTitle');
		// var titleTemp = title.replace(/#/g, "%23"); 
		window.open( "http://twitter.com/share?url="+shareUrl+"&text="+shareTitle,"Twitter Share", "height=300, width=600,scrollbars=yes" );
		return false;
	}
function compareValue(no1,no2){
    no1 = parseInt(no1);
    no2 = parseInt(no2);
    if(no1 > no2){
       return 1;
    }else if(no1 < no2){
        return -1;
    }else{
        return 0;
    }
}
function compareDate(fromDate,toDate){
  var fromDateArr=fromDate.split("-");
  var toDateArr=toDate.split("-");
  var flag = 0;
  flag = compareValue(fromDateArr[2],toDateArr[2]);
   if(flag==0){
      flag = compareValue(fromDateArr[1],toDateArr[1])
      if(flag==0){
          flag = compareValue(fromDateArr[0],toDateArr[0])
      }
   }
  return flag;
}        
	
	