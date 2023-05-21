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
        <style>
            <?php include 'styles.css'; ?>
        </style>
        <!-- jquery library reference -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    </head>
    <?php include("connection.php")?>  
    <body>
    <!-- When the hamburger menu is clicked, the menu must ‘toggle’ in and out using jQuery -->
        <script>
            $(document).ready(function(){ 
                $("#btnMenu").click(function(){ 
                    if($("#listMenu").is(":visible")){                			
                        $("#listMenu").hide();
                    }
                    else{
                        $("#listMenu").slideDown("slidedown");
                    }
                }); 
            });
        </script>
            
        <header id="mainheader" >
         <!-- navigation bar contains the menu-header-logo    -->
            <nav>
                <button id="btnMenu"><img src="hamburger.png" height=55></button>
                Halifax Canoe and Kayak
                <img style="float:right"; src="HalifaxCanoelogo.png" height="55" />
                
            </nav>
    
        </header>
        <!-- the hidden menu-->
        <div id="listMenu">
            <ul>
                <li>Home</li> <br>
                <li>Book Trip</li><br>
                <li><a href="admin-add.php">Admin Log</a></li>
            </ul>
        </div>
       
        <!-- retrieving data from database -->
        

        <!-- the main content of the webpage -->
        <div style="margin-left: auto;margin-right: auto;">
            <main">
                <img id="imgCanoe" src="canoe.jpg" alt="Come Experience Canada" width=1000px  height="400px"/>

                <div id="divText" style="max-width: 1200px;">
                    <header id="textheader">
                        <h1>Upcoming Adventures</h1><hr style="margin-left: 5px; width: 350px;">
                    </header>
                    <?php
            $sql = "SELECT * FROM project3tb";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<h2>' . $row["heading"] . '</h2>';
                    echo '<p>';
                        echo 'Trip Date: ' . $row["tripDate"];  
                        echo '<br>';
                        echo 'Duration: ' . $row["duration"]; 
                    echo '</p>';
                    echo '<h3> Summary: ' .'</h3>';
                    echo  $row["summary"];

                    
                }
            } else {
                echo "0 results";
            }
        ?>
                    
                </div>
            </main>    
        </div>
    
    </body>
</html>