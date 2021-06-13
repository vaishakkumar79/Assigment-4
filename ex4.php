<?php  
	$num=407;  
	$amg=0;  
	$n=$num;  
	while($n!=0)  
	{  
		$rem=$n%10;  
		$amg=$amg+$rem*$rem*$rem;  
		$n=$n/10;  
	}  
	if($num==$amg){  
		echo "$num is an Armstrong number";  
	}  
	else{  
		echo "$num is not an armstrong number";  
	}  
?>  