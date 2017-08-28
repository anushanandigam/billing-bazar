<!DOCTYPE html>
<html>
<head>
<title>Confirm Flight Booking</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>

$(document).ready(function(){

var adults=localStorage.getItem("adults");
var childrens=localStorage.getItem("childrens");
var infants=localStorage.getItem("infants");
alert(adults+","+childrens+","+infants);

for (var i = 1; i <= adults; i++) {
$("#share").append('<form id="form'+i+'" class="adult'+i+'"></form>');
   $(".adult"+i+"").append('<div class="appm">Adult'+i+'</div>');
 
 $(".adult"+i+"").append('<input type="text" placeholder="First And Middle Name" name="givenName"/>&nbsp;&nbsp;&nbsp;');
  $(".adult"+i+"").append('<input type="text" placeholder="Last Name" name="surName"/>&nbsp;&nbsp;&nbsp;');
  $(".adult"+i+"").append('<select name="nameReference"><option value="">Title</option><option value="mr">Mr</option><option value="ms">Ms</option><option value="mrs">Mrs</option></select>&nbsp;&nbsp;&nbsp;');
$(".adult"+i+"").append('<input type="hidden" name="psgrtype" value="adt"/>');
 
}

for (var i = 1; i <= childrens; i++) {
$("#share1").append('<form id="form'+i+'" class="child'+i+'"></form>');
   $(".child"+i+"").append('<div class="appm">Child'+i+'</div>');
   
$(".child"+i+"").append('<input type="text" placeholder="First And Middle Name" name="givenName"/>&nbsp;&nbsp;&nbsp;');
  $(".child"+i+"").append('<input type="text" placeholder="Last Name" name="surName"/>&nbsp;&nbsp;&nbsp;');
  $(".child"+i+"").append('<select name="nameReference"><option value="">Title</option><option value="ms">Ms</option><option value="mstr">Mstr</option></select>&nbsp;&nbsp;&nbsp;');
  $(".child"+i+"").append('<input type="hidden" name="psgrtype" value="chd"/>');
  $(".child"+i+"").append('<input type="text" placeholder="DOB" name="dob" class="child_date"/>');  
  $(".child"+i+"").append('<input type="hidden" name="age" value="10"/>');

}


for (var i = 1; i <= infants; i++) {
$("#share2").append('<form id="form'+i+'" class="infant'+i+'"></form>');
   $(".infant"+i+"").append('<div class="appm">Infant'+i+'</div>');
$(".infant"+i+"").append('<input type="text" placeholder="First And Middle Name" name="givenName"/>&nbsp;&nbsp;&nbsp;');
  $(".infant"+i+"").append('<input type="text" placeholder="Last Name" name="surName"/>&nbsp;&nbsp;&nbsp;');
  $(".infant"+i+"").append('<select name="nameReference"><option value="">Title</option><option value="ms">Ms</option><option value="mstr">Mstr</option></select>&nbsp;&nbsp;&nbsp;');
   $(".infant"+i+"").append('<input type="hidden" name="psgrtype" value="inf"/>');
  $(".infant"+i+"").append('<input type="text" placeholder="DOB" name="dob" class="infant_date"/>');
 $(".infant"+i+"").append('<input type="hidden" name="age" value="2"/>');
}


$(".child_date").datepicker({
	changeMonth: true,
    changeYear: true,
    dateFormat: 'd-M-y'
});
$(".infant_date").datepicker({
	changeMonth: true,
    changeYear: true,
    dateFormat: 'd-M-y'
});

 var passengers=[];
$("#proceed_btn").click(function(){
  for(var i=1; i <= adults; i++){
    var adult={};
    $(".adult"+i+"").find(":input").each(function() {
    var x= $(this).val();
    adult[this.name] = $(this).val();
  });
 
    passengers.push(adult); 
};

for(var i=1; i <= childrens; i++){
    var child={};
    $(".child"+i+"").find(":input").each(function() {
    var x= $(this).val();
    child[this.name] = $(this).val();
  });

    passengers.push(child);
};

for(var i=1; i <= infants; i++){
    var infant={};
    $(".infant"+i+"").find(":input").each(function() {
    var x= $(this).val();
    infant[this.name] = $(this).val();
  });

    passengers.push(infant); 
};


console.log(passengers);
localStorage.setItem("passengers", JSON.stringify(passengers));
var n = localStorage.getItem("passengers");
console.log(n);
var localObj = localStorage.getItem("jsonData");
alert(localObj);

var name=$("#name").val();
var mobileno=$("#mobileno").val();
var email=$("#email").val();

var passengers_json=JSON.stringify(passengers);
console.log(passengers_json);
$.ajax({
   type: "POST",
   data: { passengers:passengers_json , localObj:localObj , adults:adults , childrens:childrens , infants:infants , name:name , mobileno:mobileno , email:email },
   url: "ajax_confirmflight.php",
   success: function(msg){
console.log(msg);
   }
});

})
});
</script>
</head>
<body>
<div style="padding-left: 20px;">
<div id="share">
	
</div>
<div id="share1">
	
</div>
<div id="share2">
	
</div>
<div id="share3">

	<div class="appm">Contact Information</div>
  <input type="text" placeholder="Name" name="name" id="name" />&nbsp;&nbsp;&nbsp;
  <input type="text" placeholder="Mobile No" name="mobileno" id="mobileno"/>&nbsp;&nbsp;&nbsp;
  <input type="email" placeholder="Email" name="email" id="email" />&nbsp;&nbsp;&nbsp;<br><br>
  <input type="submit" value="Proceed Now" class="btn btn-primary" id="proceed_btn">

</div>
</div>
</body>
<script>


 
</script>
</html>