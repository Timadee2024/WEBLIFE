<?php
//1 -> connect
require "connection.php";

//2 -> collect

$cat = $_REQUEST["ctxt"];
$fnm = $_FILES["f"]["name"];
$src = $_FILES["f"]["tmp_name"];
$dest = "Tintin\\$fnm";

$status = $_REQUEST["status"];

echo $qr="insert into lt_products values ('null','$cat','$fnm','$status')";
mysqli_query($cn,$qr);

$raf = mysqli_affected_rows($cn);
	
	if($raf>=1)
	{
		
		move_uploaded_file($src,$dest);
		
		echo "the product category is saved!";
	}
	else
	{
			echo "Issue in saving!";
	}
	
	
	
	
	
	//3 -> insert/update/delete or view/select
	

?>