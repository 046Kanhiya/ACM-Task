<?php

session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','12345');

mysqli_select_db($con, 'userregistration1');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable1 where name  = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo" Username already taken";
}
else{
    $reg= " insert into usertable1(name,password) values('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Succesful ";
}

?>