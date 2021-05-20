<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "admin_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <div class="panel-heading">
                                <h1>EXTRA FUNCTIONS</h1>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i><p>
                                    <div class="dropdown">
                                      <button  class="dropbtn btn btn-primary">Extra Functions</button>
                               <div id="myDropdown" class="dropdown-content">
                                 <a href="1.php">1</a><br>
                                 <a href="2.php">2</a><br>
                                 <a href="3.php">3</a><br>
                                 <a href="4.php">4</a><br>
                                 <a href="5.php">5</a><br>
                                 <a href="6.php">6</a><br>
                               </div>
                             </div>                                
                            </div>
                        </div>                  
                            
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->         
            
         
        </div>        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>