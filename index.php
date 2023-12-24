<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$question=$_REQUEST['question'];

if(isset($_POST['send']))
{

    $host="localhost";
    $user ="root";
    $password ="";
    $db ="WattageCalculator";

    $conn = mysqli_connect($host,$user,$password,$db);
    $insert ="insert into WattageCalculator values('$name','$email','$phone','$question')";

    $mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style= 'color:blue;'>Your quistion has been sent!</h1>");
    }
    else{
        echo("<h1 style= 'color:red;'>Worng</h1>");
    }

}

?>