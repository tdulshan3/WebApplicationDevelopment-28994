<?php
    $x=6;
    $y=4;
    
    echo "Sum : ".$x+$y." <br> Difference : ".$x-$y." <br> Product : ".$x*$y." <br> Divsion : ".$x/$y."<br><br><br>";
    for ($i=5; $i<=15; $i++)
    {
        echo "$i<br>";
    }
    echo "<br><br><br>";
    $un=216;
    if($un<=50){
        echo "electricity bill :".$un*3.5;
    }
    elseif (51<=100){
        echo "electricity bill :".$un*4;
    }
    elseif (101<=150){
        echo "electricity bill :".$un*5.20;
    }
    else{
        echo "electricity bill :".$un*6.50;
    }
    echo "<br><br><br>";

    $day=9;
    switch($day){
        case 7 : echo "Sunday";
        break;
        case 1 : echo "Monday";
        break;
        case 2 : echo "Thuesday";
        break;
        case 3 : echo "Wednesday";
        break;
        case 4 : echo "Thursday";
        break;
        case 5 : echo "Friday";
        break;
        case 6 : echo "Saturday";
        break;
        default : echo "Invalid";
        break;
    }
    echo "<br><br><br>";
    $fruit=array("apple", "orange", "mango");
    foreach($fruit as $x ){
        echo "$x <br>";
    }
    
?>
