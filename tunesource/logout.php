<?php
session_start(); 
function logout(){
    if(isset($_POST['btnLogout'])){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        header("Location:login.php");
    }
}
logout();   