<?php
require("../includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Reader</title>
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
            <div id = "admin_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <div class="panel-heading">
                                <h1>ADD READER</h1>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i><p>
                                <form action="addreader_submit.php" method="POST">
                                   <div class="form-group">                                         
                                        <input type="id" class="form-control"  placeholder="ID" name="id" required = "true">
                                        </div>
                                        <div class="form-group">                                         
                                        <input type="type" class="form-control"  placeholder="Type" name="type" required = "true">
                                        </div>
                                        <div class="form-group">                                         
                                        <input type="name" class="form-control"  placeholder="Name" name="name" required = "true">
                                        </div>
                                        <div class="form-group">                                         
                                        <input type="contact" class="form-control"  placeholder="Contact no." name="contact" required = "true">
                                        </div>
                                        <div class="form-group">                                         
                                        <input type="address" class="form-control"  placeholder="Address" name="address" required = "true">
                                        </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                            <br/>                
                                </form><br/>
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
        include '../includes/footer.php';
        $con -> close();
        ?>
        <!--Footer end-->
   
    </body> 
</html>