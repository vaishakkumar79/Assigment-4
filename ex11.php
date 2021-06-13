<html>
<body>
<center>
	<div>
		<form method="POST">
			<h2>Items</h2>
			<br>
			<label>Enter Items</label>
			<input type="text" name="names" placeholder="Enter Item Names">
			<br><br>
			<label>Enter Price</label>
			<input type="text" name="price" placeholder="Enter Price">	
			<br>
			<br>
			<input type="submit" name="submit">	
			<br>
			<br>
		</form>
	</div>
	<div>
		<div>
			<h2>Entered Items</h2>
			<br>
			<table border="1">
				<tr>
					<th>Item Name</th>
					<th>Item Price</th>
				</tr>
				<tr>
					<?php
						if(isset($_POST['submit']))  
						{   
							$names = $_POST['names']; 
							$price = $_POST['price'];
							$nme = explode(',',$names);
							$x = count($nme);
							$prc = explode(',',$price);	
							for($i=0;$i<$x;$i++){
							echo "<tr>";
							echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
						}
						echo "<tr>";
						echo "</table>";
						echo '<br>';
						$total = 0;
						for($i=0; $i<$x;$i++)
						{
							$total = $total + $prc[$i];
						}
						echo '<h4>Total Amount : '.$total;
						$mx= max($prc);
						$ky = array_search($mx, $prc);
						echo '<br>';
						echo 'Costliest item : '.$nme[$ky];
						$mn= min($prc);
						$key = array_search($mn, $prc);
						echo '<br>';
						echo 'Cheapest item :  '.$nme[$key];
						}     
					?>
				</tr>
			</table>
			<br><br>
		</div>
	</div>
</center>
</body>
</html>