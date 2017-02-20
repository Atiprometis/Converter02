
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

	<title></title>

</head>
<body>
	
		<?php 
	function currency_conversion($amount, $from, $to){
		
				    $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

				    $data = file_get_contents($url);

					
					
				    preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
				    $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
				    return round($converted, 3);
	}
			$one = ($_POST["one"]);
			$two = ($_POST["two"]);
			$tree  = ($_POST["tree"]);
			// $all = currency_conversion("$one","$two","$tree");
			$result = currency_conversion("$one","$two","$tree");
	
?>
	

	<div class="container">
 	<form action="currency.php" method="post">
 	  <div class="Currency">
 	  <h1>Currency Converter</h1>
 	  </div>
 		
 	  <div class="Currency-2">
 	  		
 			
 			<div class="box-currentcy">
 				
 				
	 	  		
 			</div>	
 			<div class="Currency-3 font-size">
 				<h2><?php echo "$one"." "."$two"." = ";?><?php echo "$result"." "."$tree"; ?></h2>
 				

 			</div>


 			
 			
 				
 	  </div>		
 		
 		
 		
 	  </form>
 	</div>
	
</body>
</html>