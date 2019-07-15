<?php
$con=new mysqli("localhost","root","","login");
 $sql="select ID,post from post";
$result= mysqli_query($con,$sql);

?>
<html>
<head>
    <title>Love</title>
    <link href="homepage.css" rel="stylesheet">
       </head>
    <body>
        <div class="all">
    <header id="header">
        <div class="btn">
        <a href="homepage.php">Home</a>
        <a href="homepage.php">Account</a>
            <a href="addpost.php">Add Posts</a>
        
            </div>
        </header>
        <div class="bodys">
        <div class="post">
            
            <?php
            
                while($result){
                
                    echo '<div id="write">';
                    $row=mysqli_fetch_assoc($result);
                    echo '<div id="ID">';
                    echo "<h1>".$row['ID']."</h1>";
                    echo "<p>".$row['post']."</p>";
                    echo '<a href="delete.php">Delete</a>';
                    echo "</div>";
                    echo "</div>";
                    
                }?>
            
            </div>
        
        </div>
            </div>
    </body>
</html>