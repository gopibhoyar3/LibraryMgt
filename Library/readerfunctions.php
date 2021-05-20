<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Library Store</title>
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
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Welcome to Library</h1>
                            <p><h3>A book is a gift you can open again and again. </h3></p>
                             <p><h3>- Garrison Keillor</h3></p>
                        <h1>READER FUNCTIONS</h1>
                        <div class="dropdown">
                                      <button  class="dropbtn btn btn-primary">Reader Functions</button>
                               <div id="myDropdown" class="dropdown-content">
                                 <a href="docsearch.php">Doc Search</a><br>
                                 <a href="docreturn.php">Doc Return</a><br>
                                 <a href="docreserve.php">Doc Reserve</a><br>
                                 <a href="doccheckout.php">Doc Checkout</a><br>
                               </div>
                             </div><br>
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