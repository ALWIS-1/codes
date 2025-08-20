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
         background-color: rgb(19, 88, 19);
         margin-right: 100px;
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
        background-color: rgb(203, 223, 241);
        border-radius: 10px;
    }
    i{
        margin: 10px;
    }
    
</style>
<body>
    <center><br><br><br>
    <form action="" method="POST">
<div class="ff"><br><br>
    <h1>Create Account</h1><br><br><br>
    <i class="fa-solid fa-user"></i><input type="text" name="username" placeholder="Enter your username"><br><br>
    <i class="fa-solid fa-unlock-keyhole"></i><input type="password" name="password" placeholder="Enter your password"><br><br><br>
    <button name="create">create</button></div>
</form>
    </center>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['create'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password')");
    header("location: index.php");
}

?>