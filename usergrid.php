<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script>

	function editUser(id)
	{
		//alert(id);
		//console.log(id);
		//document.write(id);
		
		document.cookie="uid="+id;
		
		window.location="edituser.php";
		
		
	}

</script>

</head>
<?php

	require "connect.php";
	
	$msg="";
	if(isset($_COOKIE["m"]))
	{
		$msg=$_COOKIE["m"];
		
		setcookie("m","",time()-3600);
	}
	
	$qr="select * from reg";
	$res =mysqli_query($cn,$qr);
	
	

?>
<body>
    
<center>User Grid</center>
	 <table align="center" border="1">
     	<tr>
        	<th>Serial No.</th>
        	<th>Name</th>
        	<th>User ID</th>
        	<th>Password</th>
        	<th>Action</th>                                                
        </tr>
     	<?php
		
			while($row=mysqli_fetch_array($res)) 
			{
		?>
        <tr>
        	<td><? $row["sr_no"] ?></td>
        	<td><?= $row["nm"] ?></td>
        	<td><?= $row["uid"] ?></td>
        	<td><?= $row["pass"] ?></td>  
            <td><a href="javascript:editUser('<?=$row["sr_no"]?>')">Edit</a> <a href="">Delete</a></td> 


                                              
        </tr>
        
        
        
        <?php
			}
		?>
        
        
     
     
     </table>
     
     <center><?=$msg?></center>




</body>
</html>