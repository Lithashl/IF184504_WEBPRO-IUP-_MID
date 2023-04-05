<?php
if(isset($_POST['btnLogin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="admin"){
        if($password=="admin"){
            //login valid
            header('location:index.php');
        }else{
            //password wrong
            header('location:login.php');
            
        }
    }else{
        //username salah;
        header('location:login.php?pesan=Username Salah');
    }
}