<?PHP
$num1 = $_GET["num1"];
$op= $_GET["op"];
$num2= $_GET["num2"];
function calc($num1,$op,$num2){
$sum = 0;
    if($op=="Addition"){
        $sum = $num1+$num2;
    }
    else{
        $sum = $num1-$num2;
    }
    return $sum;
}
echo "The ",$op," of ",$num1," and ", $num2, " is ", calc($num1,$op,$num2);
?>