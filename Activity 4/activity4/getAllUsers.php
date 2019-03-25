<?php
    $firstname = $_POST['FIRST_NAME'];
    $lastname = $_POST['LAST_NAME'];
    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];
    
    $link = mysqli_connect("localhost", "root", "root", "activity1");
        if (mysqli_connect_errno()) {
            die('Connection Error: ('.mysqli_connect_errno().') '.mysqli_connect_error());
        } else {
            echo "Connected to activity1"."<br>";
        }
     $query = "SELECT FIRST_NAME, LAST_NAME, USERNAME, PASSWORD FROM users ORDER BY LAST_NAME";
     if ($result = mysqli_query($link, $query)) {
         while ($row = mysqli_fetch_row($result))
         {
             printf ("%s (%s)\n", $row[0], $row[1]);
             printf ("%s (%s)\n", $row[2], $row[3]);

         }
         mysqli_free_result($result);
     }
     mysqli_close($link);
?>