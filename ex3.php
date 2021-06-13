<?php
    $num = 121; 
    $n = $num;
    $rev = 0;
    $sum = 0;
    $rem = 0;
    while($num > 1)
    {
        $rem = $num % 10;
        $sum = $sum + $rem;
        $rev = $rev * 10 + $rem;
        $num = (int)$num / 10;
    }
    echo "The number is $n <br>"; 
    echo "The sum is $sum <br>"; 
    echo "The reverse is $rev<br>";
    if($n == $rev){  
    echo "$n is Palindrome";     
    }
    else{  
    echo "$n is not a Palindrome";   
    }      
?> 