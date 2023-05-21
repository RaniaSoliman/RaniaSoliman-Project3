
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
    <?php include("connection.php")?>  

    <body>

        <div id="divText">
            
        <header id="textheader">
            <h1>Admin and Adventure</h1><hr style="margin-left: 5px; width: 350px;">
        </header> 
        <br>
            <p>Input details about the trip</p>
            <form method="get" action="admin-confirm.php">
            Heading &nbsp
            <input type="text" name="heading" id="heading" placeholder="Heading" class="form-control"><br>
            <br>
            Trip Date
            <input type="date" name="tripDate" id="tripDate" placeholder="Trip Date" class="form-control"><br>
            <br>
            Duration &nbsp
            <input type="text" name="duration" id="duration" placeholder="Duration" class="form-control"><br>
            <br>
            Summary
            <input type="text" name="summary" id="summary" placeholder="Summary" class="form-control"><br>
            <br><br>
            <input type="submit" name="Submit" class="btn-primary" >
        </form>
        </div>

    </body>
</html>