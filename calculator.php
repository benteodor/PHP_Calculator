<?php 

if(isset($_POST['submit'])){

    $drop=$_POST['drop'];
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    

    switch($drop){

        case "add":
            $num3=$num1+$num2;
            break;
        case "sub":
            $num3=$num1-$num2;
            break;  

        case "mul":
            $num3=$num1*$num2;
            break;
        case "div":
            $num3=$num1/$num2;
            break;
        default:
           $num3="Please select operation ";
    }



}

?>


    
    
        
    