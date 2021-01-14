<?php
    session_start();
    $_SESSION['name']=null;
    $_SESSION['login_id'] =null;
    session_destroy();
    header('location:login.php');
?>