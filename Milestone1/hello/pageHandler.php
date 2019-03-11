<?php
    $firstname = $_POST['FIRST_NAME'];
    $lastname = $_POST['LAST_NAME'];
        
    $link = mysqli_connect("localhost", "root", "root", "activity1");
    if (mysqli_connect_errno()) {
        die('Connection Error: ('.mysqli_connect_errno().') '.mysqli_connect_error());
    } else {
        echo "Your first name of: ".$_POST["FIRST_NAME"]. " and last name of: ".$_POST["LAST_NAME"]."<br>";
    }
        
    $query = "INSERT INTO users (FIRST_NAME, LAST_NAME) VALUES ('$firstname', '$lastname')";
    if (mysqli_query($link, $query)) {
        echo "New First and Last name recorded successfully!";
    } else {
        echo "Error: ".$query."<br>".mysqli_errno($link);
    }
    
    mysqli_close($link);
    
    
?>
