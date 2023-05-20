<?php
if(isset($_POST['name'])){
$server="localhost:3307";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed dueto". mysqli_connect_error());
}
//echo"Success connecting to the db";

$name = $_POST['name'];
$password = $_POST['password'];


$sql="INSERT INTO `login`.`user` (`name`, `password`) VALUES ('$name', '$password');";

echo $sql;
if($con->query($sql)==true){
    echo "Successfully inserted";
}
else{
    echo "Error : $sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student sign up</title>
        <link rel="stylesheet" href="C:\Users\SAI\Desktop\portfolia\style.css" >
        <style>
            

            
          body{
            background-image: url('bg.jpg');
            background-size: cover;
          } 
          .login-form{
            width:350px;
            top:60%;
            left:50%;
            transform:translate(-50%,-50%);
            position:absolute;
            color:#fff;
          } 
          .login-form h1{
            font-size: :40px;
            text-align:center;
            text-transform:uppercase;
            margin : 40px 0;
          }
          .login-form p{
            font-size: :20px;
            margin : 20px;
          }
          .login-form input{
            font-size: :16px;
            width:100%;
            padding:15px 10px;
            border:0;
            outline:none;
            border radius:5px;
          }
          .login-form button{
            font-size: :18px;
            font-weight:bold;
            margin:20px 0;
            width:50%;
            padding:10px 15px;
            border:0;
            border radius:5px;
          }


            
        </style>
</head>
<body>
    
</body>
</html>
    <body>
        <form action="action.php" method="post">
        
        <div class="login-form">
            <h1>Signup form</h1>
        <p>Username:</p>
        <input type="Text" name="name" id="name" placeholder=" Enter Name">
        <br>
        <br>
        <p>Password:</p>
        <input type="password" name="password" id="password" placeholder=" Enter password">
        
        
        <br>
        <button type="submit">login</button>
        



        
</form>
    </body>
</html>




