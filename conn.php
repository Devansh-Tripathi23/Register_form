<?php
$server="localhost";
$username="root";
$password="";
$db="prac_reg_form";

$conn =new mysqli($server,$username,$password,$db);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
else{
    echo "Connection Successfully";
}


?>