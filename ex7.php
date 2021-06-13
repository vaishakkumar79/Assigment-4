<html>
<body>
    <h1>Electricity Bill</h1>
    <form method="post">
        <input type="text" name="num1" placeholder="Enter previous reading"/>
        <input type="text" name="num2"  placeholder="Enter currnet reading"/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
    <?php   
        if(isset($_POST['submit']))  
        {   
            $pre = $_POST['num1']; 
            $cur = $_POST['num2'];
            $unit = $cur - $pre;
            $total=0;  
            if ($unit <= 100)
            {
                $total= $unit * 3;
            }
            elseif ($unit <= 200)
            {
                $total = (100 * 3) + ($unit - 100) * 4;
            }
            elseif ($unit <= 300)
            {
                $total = (100 * 3) + (100 * 4) + ($unit - 200) * 5;
            }
            elseif ($unit > 300)
            {
                $total = (100 * 3) + (100 * 4) + (100 * 5) + ($unit - 300) * 6;
            }
            echo "The Previous Reading is $pre <br>";        
            echo "The Current Reading is $cur <br>"; 
            echo "The Units is $unit <br>"; 
            echo "The Total amount is $total <br>"; 
        }     
    ?> 
</body>
</html>