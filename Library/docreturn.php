<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Return</title>
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
                                <h1>DOCUMENT RETURN</h1>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i><p>
                                <form action="return-process.php" method="POST"> 
                                    <div class="form-group">
                                        <div class="form-group">
                                          <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><h4>Title<h4></th>
                                                    <th><h4>Borrow No.<h4></th>
                                                    <th><h4>Doc ID<h4></th>
                                                    <th><h4> <h4></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT D.Title, B.Bor_No, B.DocID from borrows AS B, document AS D where B.DocID=D.DocID and B.RID=".$_SESSION['reader'];
                                                $result = mysqli_query($con, $query);                                                
                                                while($row = mysqli_fetch_array($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["Title"] ?></td>
                                                    <td><?php echo $row["Bor_No"] ?></td>
                                                    <td><?php echo $row["DocID"] ?></td>
                                                    <td><a href="return-process.php?Bor_No=<?php echo $row["Bor_No"];?>">Return</a></td>
                                                    
                                                </tr>
                                                
                                                <?php }                                 $_SESSION['Bor_No']= $row["Bor_No"];              
                                                        ?>
                                            </tbody>
                                        </table> 
                                         <?php error_reporting($bno = $_SESSION['Bor_No']);
                                         error_reporting($query = "SELECT RDTime FROM borrowing B, borrow BR where B.Bor_No=BR.Bor_No and B.Bor_No='".$Bor_No."' ");
                                         $result = mysqli_query($con, $query);#or die($mysqli_error($con));
                                         $row = mysqli_fetch_array($result);
                                         if((date('y-m-d h:i:s')-$row['RDTime'])>0){
                                           $diff=$row['RDTime']- date('y-m-d');
                                           $date_diff = floor($diff / (60 * 60 * 24));
                                           $fine_amt = $date_diff * 0.20;
                                           if($fine_amt>0){
                                           echo 'Fine is: '.$fine_amt.'$';}  }                                         
                                         ?>
                                        </div><br/>                                   
                                   
                               <br/>
                            </div>
                                    </form>
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