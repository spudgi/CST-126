<?php
    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];
    
    $link = mysqli_connect("localhost", "root", "root", "activity1");
    if (mysqli_connect_errno()) {
        die('Connection Error: ('.mysqli_connect_errno().') '.mysqli_connect_error());
    } else {

    }
    
    if ($username == NULL) {
        echo nl2br("- Username cannot be left blank\n\n");
    }
    if ($password == NULL) {
        echo nl2br("- Password cannot be left blank\n\n");
    }
    
    $query = "SELECT USERNAME, PASSWORD FROM users WHERE USERNAME = $username AND PASSWORD = $password";
    $captured = $link->query($query);
    if($captured->num_rows == 1) {
        echo "Login Successfull!";
    } else if ($captured->num_rows == 0) {
            echo "Login Failed";
    } else if ($captured->num_rows > 2) {
        echo "There are more than one user(s) that have registered.";
    } else {
        echo $link->error;
    }
    
    mysqli_close($link);
?>
    
        