<?php
    $email=$_POST['email'];
    $password=$_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','weather system');
    if ($conn->connect_error){
        die('connection failed :' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into login(email,password)
        values(?,?)")
        $stmt->bind_param("ss,$email,$password");
        $stmt->execute();
        echo "Login successfully";
        $stmt->close();
        $conn->close();

    }