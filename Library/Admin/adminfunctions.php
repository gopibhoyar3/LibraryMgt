<?php
require("../includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reader</title>
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include '../includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "reader_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>ADMIN FUNCTIONS</h1>                            
                             <div class="dropdown">
                                      <button  class="dropbtn btn btn-primary">Admin Functions</button>
                               <div id="myDropdown" class="dropdown-content">
                                   <a href="addreader.php">Add Reader</a><br>
                                 <a href="branchinfo.php">Branch Information</a><br>
                                 <a href="docadd.php">Add Document</a><br>
                                 <a href="docsearch.php">Search Document</a><br>
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
        include '../includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>