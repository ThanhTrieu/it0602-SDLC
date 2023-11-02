<?php
session_start();

function checkLogin(){
    if(isset($_POST["username"])){
        // $_POST : super global
        // $_POST : bien kieu mang - nhan cac gia tri gui du lieu len bang method post
        $username = trim(strip_tags($_POST["username"]));
        $password = trim(strip_tags($_POST["password"]));
        if(!empty($username) && !empty($password)){
            // co nhap du lieu
            if($username === "admin" && $password === "123"){
                // gan gia tri vao session
                $_SESSION["user"] = $username;

                header("Location:home.php");
            } else {
                header("Location:login.php?state=fail");
            }
        } else {
            // ko nhap gi ca
            // dieu huong trang
            header("Location:login.php?state=error");
        }
    }
}
checkLogin();