<?php
require("includes/common.php");
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reserve</title>
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
            <div id = "reader_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <div class="panel-heading">
                                <h1>DOCUMENT RESERVE</h1>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i><p>
                                <form action="reserve-process.php" method="POST">
                                    <div class="form-group">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><h4>Title<h4></th>
                                                    <th><h4>Doc ID<h4></th>
                                                    <th><h4>Remark</h4></th>
                                                    <th><h4> <h4></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT Title, DocID, noofcopies from document where noofcopies>0 AND DocID IN(SELECT DocID from copy)";
                                                $result = mysqli_query($con, $query)or die( mysqli_error($con));                                                
                                                while($row = mysqli_fetch_array($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["Title"] ?></td>
                                                    <td><?php echo $row["DocID"] ?></td>                                                    
                                                    <td><?php if($row["noofcopies"]==1){echo "<b style='color:red;'>Last Copy</b>";}
                                                              else if($row["noofcopies"]<=7){echo "<b style='color:red;'>Last Few..!</b>";}?></td>
                                                    <td><a href="reserve-process.php?DocID=<?php echo $row["DocID"];?>">Reserve</a></td>                                            
                                                    
                                                </tr>
                                                
                                                <?php }                                                
                                                        ?>
                                            </tbody>
                                        </table> 
                            <br/>
                                   
                                </form><br/>
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
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>