
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
        <!-- jquery library reference -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    </head>

    <style>
        <?php include 'styles.css'; ?>
    </style>

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
                <li>Admin Log</li>
            </ul>
        </div>

        <!-- the main content of the webpage -->

        
    
    </body>
</html>

