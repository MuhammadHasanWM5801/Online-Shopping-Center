<?php
session_start();
header('location: login.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');    // they select your data base



$name = $_POST['user'];
$pass = $_POST['password'];


$s = " select * from  usertable where name = '$name'";

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);       // count the number how many time number is appear in the dbtable

if($num ==1){
    echo " username Already Taken";

}else{
    $reg = "insert into usertable(name , password) values ('$name','$pass')";
    mysqli_query($con, $reg);
     echo "Registration Sucessfull!!!";
    
}


?>