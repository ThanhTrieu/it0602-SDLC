<?php 
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

function checkUserLogined(){
    if(empty($_SESSION["user"])){
        return false;
    }
    return true;
}