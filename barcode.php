<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
         /* auto is the initial value */
         
		width:176mm;
		height: 500mm;
		background-color : red;
		
		/* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();" >

	<div style="margin: 20% 50%">
		<?php
		
		
		//$Object = new DateTime();  /* to print the time */
		$DateAndTime = date("Ymdms");  
		$random_number= mt_rand(1, 100); /* to print the random number */
		
		include 'barcode128.php';
		//$product = $_POST['product'];
		$quantity = $_POST['print_qty'];
		
		$product_id = $_POST['up_opt'];
		$arr = array($product_id,'_',$DateAndTime,$random_number);

		for($i=1;$i<=$quantity;$i++){
			
			echo  "<p class='inline'><span ></span>".bar128(join($arr))."</p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>