<?php
require("../includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Document</title>
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
                                <h1>ADD DOCUMENT</h1>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i><p>
                                <form action="docadd_submit.php" method="POST">
                                    <div class="form-group">
                                        <div class="form-group">                                         
                                        <input type="docid" class="form-control"  placeholder="Document ID" name="docid" required = "true">
                                        </div>
                                        <div class="form-group">                                         
                                        <input type="title" class="form-control"  placeholder="Title" name="title" required = "true">
                                        </div>
                                        <div class="form-group">                                         
                                        <input type="publisherid" class="form-control"  placeholder="Publisher ID" name="publisherid" required = "true">
                                        </div>
                                        <div class="form-group">                                         
                                        <label for="start">Publishing Date:</label>
                                        <p style="color:black"><input type="date" name="publishingdate" id="dateofbirth"></p>                                       </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>   
                                        
                            <br/>
                                    <?php #echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                           </div>
                           </div                  
                            
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