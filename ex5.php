<html>
<body>
	<h3>1 - Addition</h3>
	<h3>2 - Subtract</h3>
	<h3>3 - Multiply</h3>
	<h3>4 - Divide</h3>
	<form method="post">
		<input type="text" name="num1" value="" placeholder="Enter 1st number"/>
		<input type="text" name="num2" value="" placeholder="Enter 2nd number"/>
		<input type="text" name="option" value="" placeholder="1 / 2 / 3 / 4"/>
		<input type="submit" name="submit" value="Submit"/>
	</form>
<?php
	if(isset($_POST['submit']))
	{
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$ch = $_POST['option'];
		switch($ch)
		{
			case 1:	$r = $a+$b;
					echo " Addition = ".$r ;
					break;
			case 2:	$r = $a-$b;
					echo " Subtraction = ".$r ;
					break;
			case 3:	$r = $a*$b;
					echo " Multiplication = ".$r ;
					break;
			case 4:	$r = $a/$b;
					echo " Divison = ".$r ;
					break;
			default:echo ("invalid option\n");
		}
		return 0;
	}
?>
</body>
</html>