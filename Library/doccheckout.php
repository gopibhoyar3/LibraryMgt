<?php
require("includes/common.php");
if (isset($_SESSION['readerid'])) {
echo $_SESSION['readerid'];}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout</title>
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
                                <h1>DOCUMENT CHECKOUT</h1>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i><p>
                                <form action="checkout-process.php" method="POST">
                                    <div class="form-group">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><h4>Title<h4></th>
                                                    <th><h4>Doc ID<h4></th>
                                                    <th><h4>Reservation ID<h4></th>
                                                    <th><h4> <h4></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT D.Title,R.Doc_ID, R.Reservation_No from document D, reserves R where D.DocID=R.Doc_ID AND noofcopies>0 AND RID=".$_SESSION['reader'];
                                                $result = mysqli_query($con, $query);                                                
                                                while($row = mysqli_fetch_array($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["Title"] ?></td>
                                                    <td><?php echo $row["Doc_ID"] ?></td>
                                                    <td><?php echo $row["Reservation_No"] ?></td>                                                    
                                                    <td><a href="checkout-process.php?DocID=<?php echo $row["Doc_ID"];?>">Borrow</a></td>                                               
                                                    
                                                </tr>
                                                
                                                <?php }                                                
                                                        ?>
                                            </tbody>
                                        </table> 
                                        <br/>
                                   
                                    <?php #echo $_GET['error']; ?>
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