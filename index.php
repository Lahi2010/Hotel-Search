<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="dist/css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="dist/datepicker/base/all.css">
<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="dist/js/jquery-1.11.0.js"></script>
<script src="dist/js/bootstrap.js"></script>

	
	<script src="dist/datepicker/js/core.js"></script>
	<script src="dist/datepicker/js/widget.js"></script>
	<script src="dist/datepicker/js/datepicker.js"></script>

	<script>
	$(function() {
		
		$( ".calender" ).datepicker({ dateFormat: 'yy-mm-dd' });
	});
	</script>

<script>

$(function(){
	
	$('#before_search').css({top: 50, opacity: 0});
	$('#j_search_btn').click(function(){
	//$("#before_search").fadeIn();
	//$("#before_search").animate({"left":"0px"}, "slow");
		//alert('sas');
		


	 $('#before_search').css({top: -50, opacity: 0}).
    animate({top: 0, opacity: 1}, 'slow');

	});
	});
	
</script>
</head>

<body>
<div class="container">

<div class="search_wrapper" id="before_search">
<div class="col"><input type="text" class="search_txt" placeholder="Singapore, singapore"></div>
<div class="col"><input type="text" class="search_txt calender"></div>
<div class="col"><input type="text" class="search_txt calender"></div>
<div class="col">
 
  <select name="select" id="select" class="search_dropdown">
    <option value="1">4 rroms</option>
  </select>
</div>
<div class="col">
 
  <select name="select2" id="select2" class="search_dropdown">
    <option value="1">7 guests</option>
  </select>
</div>

<div class="col"><input type="button" name="Search" id="Search" value="Search" class="search_button"></div>
</div>

<div class="search_wrapper" id="after_search" >
<div class="col-2"><span><img src="dist/images/map.png" width="35" height="33"/></span><span><label>Singapore, singapore</label></span></div>
<div class="col-2">
<span>
<img src="dist/images/calender_icon_large.png" width="33" height="32"/>
</span>
<span><label>22-02-2014</label></span>
<span><label>to</label></span>
<span><label>22-02-2014</label></span>
</div>
<div class="col-2"><span><img src="dist/images/family_icon.png" width="32" height="32"/></span>
<span><label>4 Rooms</label></span>
<span><label>,</label></span>
<span><label>7 Guests</label></span>
</div>

<div class="col-2-search"><input type="button" name="Search"  value="" class="search_icon_btn" id="j_search_btn"></div>
</div>

</div>
</body>
</html>
