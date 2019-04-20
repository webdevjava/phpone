<?php
    

    function calculate(){
    $first = $_POST['first'];
    $second = $_POST['second'];
        
        
        switch($_POST['calculation']){
            case "addition":
            $add = $first+$second;
            return $add;
            break;
                
            case "minus":
            $minus = $first-$second;
            return $minus;
            break;
                
            case "multiply":
            $multiply = $first*$second;
            return $multiply;
            break;
                
            case "division":
            $divide = $first/$second;
            return $divide;
            break;
                
            default:
            echo "Invalid Number";
        }
    }

    echo "The Result is: ".calculate();
    
    
?>
<br>
 <a href="index.php">Now Back to the Calculation</a>