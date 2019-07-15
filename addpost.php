<html>
<head>
     <title>Add new post</title></head>
<body>
    <form method="post" enctype="multipart/form-data">
    Post: <input type="text" name="postt">
        <input type="submit" value="Post">
    </form>
    </body>
</html>
<?php
$conn=new mysqli("localhost","root","","login");
$p=$_REQUEST['postt'];
$insert="insert into post(post) values ('$p')";

if($p=!NULL){
    
    
if(mysqli_query($conn,$insert)){
    echo "Your Post Is success";
    
}}else{
    echo "please write your post";
}
?>