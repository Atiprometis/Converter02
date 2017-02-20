<!DOCTYPE html>
<html>
<head>
<script>
	function check(){
		var checkdata = true; 
		var msg= "Please enter"
		// ถ้า นัมเบอร์ไม่เท่ากับ ค่าว่าง 
    if(document.getElementById("one").value==""){
    	checkdata = false;
    	msg+= " money";
    	}
   	if(!checkdata){
   		alert(msg);
   	}
   	return checkdata;
	}

</script>


<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<title></title>
</head>
<body>




			
 	<div class="container">
 	<form action="currency.php" method="post">
 	  <div class="Currency">
 	  <h1>Currency Converter</h1>
 	  </div>
 		
 	  <div class="Currency-2">
 	  		
 			
 			<div class="box-currentcy">
 				<input type="text" name="one" id="one" class="text-cen" placeholder="  Input Money">
 				<br>
	 	  		<select class="Changeoption" name="two">
	 	  			
	 				<option value="THB">Thai Baht</option> 
	 				<option value="USD">US Dollar</option>
	 				<option value="EUR">Euro</option>
	 				<option value="SGD">Singapore Dollar</option>
	 			</select>
 			</div>	
 			<div class="Currency-3">
 				<h3>TO</h3>
 			</div>
 		<select class="Changeoption" name="tree">
 			<option value="THB">Thai Baht</option> 
 			<option value="USD">US Dollar</option>
 			<option value="EUR">Euro</option>
 			<option value="SGD">Singapore Dollar</option>
 		</select>
 		<br>
 			<button type="submit" name="submit" class="btn btn-info button-cen"onclick="return check();">CONVERTER</button>
 										

 		
 		
 	  </div>		
 		
 		
 		
 	  </form>
 	</div>







 	
</body>
</html>