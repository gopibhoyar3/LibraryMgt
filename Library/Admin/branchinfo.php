<?php
require("../includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Branch Info</title>
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
                                <h1>BRANCH INFO</h1>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i><p>
                                    <div class="form-group">
                                      
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><h4>Library Name<h4></th>
                                                    <th><h4>Location<h4></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "Select LName, Location from branch ORDER BY LName";
                                                $result = mysqli_query($con, $query);
                                                while($row = mysqli_fetch_array($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["LName"] ?></td>
                                                    <td><?php echo $row["Location"] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                            <br/>
                                <br/>
                            </div>
                           </div>                                         
                            
                        </div>
                    </center>
                </div>
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
