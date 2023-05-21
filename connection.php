
<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with  password as password) */

    $conn = mysqli_connect("localhost", "root", "password", "project3db");
     
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

?>  

