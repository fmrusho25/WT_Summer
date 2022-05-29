<?php

$number1       =$_POST["number1"];
$number2       =$_POST["number2"];
$operation     =$_POST["operation"];

if($operation=="+")
{
    echo "Addition Result is " ,  $number1 + $number2;

}

if($operation=="-")
{
    echo "Subtraction Result is " ,  $number1 - $number2;

}

if($operation=="*")
{
    echo "Multliplication Result is " ,  $number1 * $number2;

}

if($operation=="/")
{
    echo "Division Result is " , $number1 / $number2;

}

?>