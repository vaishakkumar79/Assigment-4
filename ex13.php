<?php
	$msg = '';
	$num = '';
	if(isset($_POST['submit'])) {
		$num = $_POST['num'];
		$msg = factorial($num);
	}
	function factorial($n)
	{
		if($n >= 0)
		{
			if($n == 0)
			{
				return 1;
			}
			else 
			{	
				return $n * factorial($n-1);
			}
		}
		else
		{
			return ' Invalid!! Insert Positive Ineteger ';
		}
	}
?>

<html>
<body>
	<center>
		<div>
			<h2>Factorial</h2>
			<form method="post">
				<input type="text" name="num" placeholder="Enter number">
				<br>
				<br>
				<input type="submit" name="submit">
			</form>
			</div>
		<h3><?php echo 'Factorial of <b> '. $num . '</b> is <b>' . $msg;  ?></h3>
	</center>
</body>	
</html>