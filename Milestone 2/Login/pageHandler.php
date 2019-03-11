<?php
    $firstname = $_POST['FIRST_NAME'];
    $lastname = $_POST['LAST_NAME'];
    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];
    
        
    $link = mysqli_connect("localhost", "root", "root", "activity1");
    if (mysqli_connect_errno()) {
        die('Connection Error: ('.mysqli_connect_errno().') '.mysqli_connect_error());
    } else {
        echo "Your first name of: ".$_POST["FIRST_NAME"]. " and last name of: ".$_POST["LAST_NAME"]."<br>";
    }
        
    $query = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES ('$firstname', '$lastname', '$username', '$password')";
    if (mysqli_query($link, $query)) {
        echo "New First, Last name, username and password recorded successfully!"."<br>";
    } else {
        echo "Error: ".$query."<br>".mysqli_errno($link);
    }
    if ($firstname == NULL) {
        echo nl2br("- First Name cannot be left blank\n\n");
    }
    if ($lastname == NULL) {
        echo nl2br("- Last Name cannot be left blank\n\n");
    }
    if ($username == NULL) {
        echo nl2br("- Username cannot be left blank\n\n");
    }
    if ($password == NULL) {
        echo nl2br("- Password cannot be left blank\n\n");
    }
    
    if (!($firstname == NULL || $lastname == NULL || $username == NULL || $password == NULL) && $link->query($query) == true) {
        echo "New account recorded successfully!";
    } else {
        echo "Error: ".$query."<br>".$link->error;
    }
    
    mysqli_close($link);
    
    
?>
