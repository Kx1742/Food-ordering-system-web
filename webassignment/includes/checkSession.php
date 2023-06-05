<?php
    session_start();
    if(isset($_SESSION['userId'])){
        ;  
    }else{
        // User was not logged in
        header("location:../index.html");
        exit();
    }
?>