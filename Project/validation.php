<?php
session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');    // they select your data base



$name = $_POST['user'];
$pass = $_POST['password'];


$s = " select * from  usertable where name = '$name' && password = '$pass'";   // here the match user name and password

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);       // count the number how many time number is appear in the dbtable

if($num ==1){

    $_SESSION['username']= $name;




    header('location:home.php');        // ya page paye switch karayee ga apko home wala 

}else{

    header('location:login.php');       // aghr user or pass sahi nhi hwa tou login sa aga nhi bhara ga 
   
}


?>