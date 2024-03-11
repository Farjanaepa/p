
<form method = "post"> 
    <input type="number" name = "fname">
    <input type="submit" name = "submit">
</form>

<?php   

$number = $_POST['fname'];
if($number >=101 && $number<=0){ 
    echo "please enter valid number";
}
elseif($number >=80 && $number <=100){ 
    echo "your result is A+";
}
elseif($number >=70 && $number <=79){ 
    echo "your result is A";
}
elseif($number >=60 && $number <= 69){ 
    echo "your result is A-";
}
elseif($number >=50 && $number <=59){ 
    echo "your result is B";
}
elseif($number >=40 && $number <=49){ 
    echo "your result is C";
}
elseif($number >=33 && $number <=39){ 
    echo "your result is D";
}
else{ 
    echo "you result is fail";
}




?>


