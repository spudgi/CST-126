<?php
    include('config.php');
    session_start();
    
    $user_check = $_SESSION['loggged_in'];
    
    $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
    
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
    $login_session = $row['username'];
    
    if(!isset($_SESSION['logged_in'])){
        header("location:success.php");
        die();
    }
?>