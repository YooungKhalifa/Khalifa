<?php
$conection=new mysqli("localhost","root","","login");
$username=$_POST["username"];
$password=mysqli_real_escape_string($conection,$_POST['password']);
$query = "SELECT username,password FROM loginUP WHERE username='$username' AND password='$password'";
$result=mysqli_query($conection,$query) or die (mysqli_error());
if(mysqli_num_rows($result)!=0){
    echo "login in successfuly";
    header('Location: homepage.php');
}else{
    echo "wroong password";
}
?>