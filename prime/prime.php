
<form method = 'Post'>  
    <h1>Enter a Number</h1> <input type="text" name='fname'>
    <input type="submit" name= 'submit'>
</form>


<?php     

$num = $_POST["fname"];

$count = 0;

if(isset($_POST["submit"])){ 

    if($num ==0 || $num ==1){ 
        echo "Not A Prime or Composite";
    }

    for($x =2; $x<$num; $x++){ 
        if($num%$x ==0){ 
            $count ++;
        }
    }

    if($count ==0){ 
        echo "$num Prime Number";
    }
    else
        echo "$num Not A Prime Number";


}



?>
