<?php

$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$result=NULL;
$operand=$_REQUEST['operand'];



switch($operand){
//for multiplicative
case 1:{
    $result=$num1+$num2;
    break;
}
//for multiply
case 2:{
    
    $result=$num1*$num2;
    break;
}

//for minus
case 3:{
    $result=$num1-$num2;
    break;
}
//for divide
case 4:{
    $result=$num1/$num2;
    break;
}
default:{
    $result=0;
}

}


echo json_encode(array('status'=>"success",'data'=>$result));
?>
