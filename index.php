<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<style>
    button{
        width: 80px;
        height: 40px;
        border-radius: 6px;
         background-color: rgb(28, 29, 29);
         margin-right: 10px;
         color: white;
    }
    a{
        text-decoration: none;
        color: blue;
       
    }
    input{
         width: 200px;
        height: 30px;
        border-radius: 5px;
       
    }
    ::placeholder{
        text-align: center;
        font-size: 20px;
    }
    .ff{
        width: 350px;
        height: 450px;
        background-color: rgb(171, 175, 179);
        border-radius: 10px;
    }
    i{
        margin: 10px;
    }
    h1{
        font-weight: bold;

    }
    
</style>
<body>
    <center><br><br><br>
    <form action="" method="POST">
<div class="ff"><br><br>
    <h1>Login here</h1><br><br><br>
    <i class="fa-solid fa-user"></i><input type="text" name="username" placeholder="Enter your username"><br><br>
    <i class="fa-solid fa-unlock-keyhole"></i><input type="password" name="password" placeholder="Enter your password"><br><br><br>
    <button name="create">Login</button><a href="create.php">Create Account</a></div>
</form>
    </center>
</body>
</html>
<?php
session_start();
include("connection.php");
if(isset($_POST['create'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
     $select=mysqli_query($conn,"select * from users where username='$username' && password='$password'");
    while($row=mysqli_fetch_array($select)){
        if(mysqli_num_rows($select)>=1){
            header("location: homepage.php")
         }
        $_SESSION['username']=$a['username'];
        $_SESSION['password']=$a['password'];

   
    }
   
}

?>