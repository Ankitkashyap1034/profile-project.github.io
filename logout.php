<?php
    session_start();
    if(isset($_SESSION['name'])){
        session_destroy();
        header("location:login.php?log=logout");
    }else{
        header("location:index.php");
    }
?>