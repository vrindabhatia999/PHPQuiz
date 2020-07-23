<!DOCTYPE html>
<html>
<head>
	<title>ANSWERS</title>
</head>
<body>
	<?php
	  $correct=0;
	  $rad1=$_POST['q-1'];
	  $rad2=$_POST['q-2'];
	  $rad3=$_POST['q-3'];
	  $rad4=$_POST['q-4'];
	  $rad5=$_POST['q-5'];
	  $rad6=$_POST['q-6'];
	  $rad7=$_POST['q-7'];
	  $rad8=$_POST['q-8'];
	  $rad9=$_POST['q-9'];
	  $rad10=$_POST['q-10'];
	  
	   
	  	if ($rad1=="A") {
	  	   $correct++;
	  		# code...
	  	}  
	  	
	  	if($rad2=="C"){
	  	   $correct++;
	  	}
                 
	  	
	  	if($rad3=="D"){
	  	   $correct++;
	  	}
	  	
                 
	  	
	  	if($rad4=="C"){
	  	   $correct++;
	  	}
                 
	  	
	  	if($rad5=="B"){
	  	   $correct++;
	  	}
                 
	  	
	  	if($rad6=="B"){
	  	   $correct++;
	  	}
                 
	  	
	  	if($rad7=="A"){
	  	   $correct++;
	  	}
                 
	  	
	  	if($rad8=="B"){
	  	   $correct++;
	  	}
                 
	  	
	  	if($rad9=="C"){
	  	   $correct++;
	  	}
                 
	  	
	  	if($rad10=="B"){
	  	   $correct++;
	  	} 
	  	echo "<h2>Your Total Score Is:</h2>".$correct;
	  
	   
                 
	  	
	  	 

	  	

	   
	  ?>


</body>
</html>