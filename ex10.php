<?php
	if(isset($_POST['submit'])) {
		$ch = $_POST['option'];
		$str = $_POST['string'];
		switch($ch) {
		case 1:
				$msg = 'Reverse of ' . $str . ' is ' . strrev ( $str ) ;
				break;
		case 2:
				$msg = 'Length of ' . $str . ' is ' . strlen ( $str ) ;
				break;
		case 3:
				$msg = 'Substring of ' . $str . ' is ' . substr ( $str , 3 ) ;
				break;	
		case 4:
				$msg = 'Converting ' . $str . ' to upper case ' . strtoupper ( $str ) ;
				break;
		case 5:
				$msg = 'Converting ' . $str . ' to lower case ' . strtolower ( $str ) ;
				break;				
		case 6:
				$msg = 'Number of words in ' . $str . ' is ' . str_word_count ( $str ) ;
				break;
		default:
			$msg = 'invalid option';
		}
}
?>

<!DOCTYPE html>
<html>
<body>
	<center>
		<form method="post">
			<h1>String Operations</h1>
			<br>
			<input type="text" name="string" placeholder="Enter Your String" required>
			<br>
			<br>
			<select name="option">
				<option value="" disabled selected>Choose your option</option>
				<option value="1">Reversing the string</option>
				<option value="2">Finding the length of the string</option>
				<option value="3">Substring operations</option>
				<option value="4">Converting to uppercase</option>
				<option value="5">Converting to lowercase</option>
				<option value="6">Counting the number of words.</option>
			</select>
			<br>
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
		<br>
		<h1><?php echo $msg; ?></h1>
	</center>
</body>
</html>