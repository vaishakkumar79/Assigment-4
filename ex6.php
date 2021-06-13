<html>
<body>
<h3>Fibonacci Series and Prime Numbers</h3>
<form method="post">
    <input type="text" name="num1" placeholder="Enter Amount"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php   
    if(isset($_POST['submit']))  
    {   
        $num = $_POST['num1'];
    }

?>