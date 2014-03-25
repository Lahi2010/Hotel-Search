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
		
		
		
		
		$("input.calender").datepicker({
			dateFormat: 'yy-mm-dd',
    onSelect: function() {
        window.setTimeout($.proxy(function() {
            $(this).next(".calender").focus();
        }, this), 10);
    }
});

$('input.calender').datepicker({dateFormat: 'yy-mm-dd'}).datepicker('setDate', 'today');
	});
	
	</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#room_drop').change(function() {
        //$('#guest_drop').append(' <option value="55">55 guests</option>');
		
		var val=$('select[name="room_drop"] option:selected').val();
		if(val==1){
			$('#guest_drop').empty();
			$('#guest_drop').append(' <option value="1">1 Guest</option>');
			for(var i=2;i<5;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==2){
			$('#guest_drop').empty();
			for(var i=val;i<9;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==3){
			$('#guest_drop').empty();
			for(var i=val;i<13;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==4){
			$('#guest_drop').empty();
			for(var i=val;i<17;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==5){
			$('#guest_drop').empty();
			for(var i=val;i<21;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==6){
			$('#guest_drop').empty();
			for(var i=val;i<25;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==7){
			$('#guest_drop').empty();
			for(var i=val;i<29;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==8){
			$('#guest_drop').empty();
			for(var i=val;i<33;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
			if(val==9){
			$('#guest_drop').empty();
			for(var i=val;i<37;i++){
			$('#guest_drop').append(' <option value="'+i+'">'+i+' Guests</option>');
			}
			}
        });
    });
	
</script>
</head>

<body>
<div class="container">
<div class="dummy"></div>

<form action="index2.php" method="post">
<div class="all_search_wrap">
<div class="search_wrapper" id="before_search">
<div class="col"><input type="text" class="search_txt" placeholder="Singapore, singapore"></div>
<div class="col_med"><input type="text" class="calender cal_txt" id="fromDate" name="fromDate"/>
<input type="text" class="calender cal_txt" id="toDate" name="toDate"/></div>

<div class="col">
 
  <select name="room_drop" id="room_drop" class="search_dropdown">
    <option value="1">1 Room</option>
     <option value="2">2 Rooms</option>
      <option value="3">3 Rooms</option>
       <option value="4">4 Rooms</option>
        <option value="5">5 Rooms</option>
         <option value="6">6 Rooms</option>
          <option value="7">7 Rooms</option>
           <option value="8">8 Rooms</option>
            <option value="9">9+ Rooms</option>
  </select>
</div>
<div class="col">
 
  <select name="guest_drop" id="guest_drop" class="search_dropdown">
    <option value="1">1 Guest</option>
     <option value="2">2 Guests</option>
      <option value="3">3 Guests</option>
       <option value="4">4 Guests</option>
  </select>
</div>

<div class="col"><input type="submit" name="Search" id="Search" value="Search" class="search_button">


<div class="clearfix"></div></div>

</div>

</div>
</form>
<div class="dummy">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
</div>
</body>
</html>
