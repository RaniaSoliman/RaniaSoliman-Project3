
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Halifax Canoe and Kayak">
        <meta name="description" content="Information about upcoming adventures">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halifax Canoe and Kayak</title>
        <link rel="icon" type="image/png" href="CanoelogoBlue.png">
    
    </head>

    <style>
        <?php include 'styles.css'; ?>
    </style>
    <!-- connect to the database -->
<?php include("connection.php")?> 

    <body>

        <div id="divText">
        <header id="textheader">
            <h1>Admin - Confirm</h1><hr style="margin-left: 5px; width: 350px;">
        </header>    
   
            
            <!-- inserting data -->
            <?php
        
                $heading=$_GET["heading"];
                $tripDate=trim($_GET["tripDate"]);
                $duration=$_GET["duration"];
                $summary=trim($_GET["summary"]);  
                 
                                
                if (trim($heading) === "" || trim($tripDate) === "" || trim($duration) === "" || trim($summary) === "" ){
                    echo 'All the fields should be entered';
                }
                elseif(!is_numeric($duration) || strlen($duration)> 3){
                    echo 'Duration should be a number less than 999';
                }
                else {
                    $sql = "INSERT INTO project3tb (heading,tripdate,duration,summary)
                    VALUES ('$heading','$tripDate','$duration','$summary')";

                    if (mysqli_query($conn, $sql)) {
                        echo "The trip has sucessfully added to our schedule";
                    } else {
                        echo "Error: " . $sql . "
                    " . mysqli_error($conn);
                    }
                }

            ?>

        </div>
        <br><br><br>
        <div id="divLink" >
            <a href="all-adventures.php">View All Adventures</a><br>
        </div>

    </body>
</html>