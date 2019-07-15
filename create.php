<?php
$u=$_REQUEST['userr'];
$p=$_REQUEST['passs'];

$conection=new mysqli("localhost","root","","login");
$insert="INSERT INTO loginup (username,password) values ('$u','$p')";
if($u=!NULL || $p=!NULL){
if(mysqli_query($conection,$insert)){
    echo "done your account is creating";
    header('Location: login.html');
}else{
    echo "error";
}
}else{
    echo "please enter your name and password";
}

time.sleep(2);
?>