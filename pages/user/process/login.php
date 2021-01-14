<?php

if(isset($_POST["TenTK"]) && isset($_POST["Mk"])){
    $user = $_POST["TenTK"];
    $pass = $_POST["Mk"];
    if(strtolower($user) == "admin" && strtolower($pass) == "admin"){
        header("location: ../AdminPanel/panelAdmin.html");
    }else{
        header("location: ../userPanel/userPanel.html");
    }
}