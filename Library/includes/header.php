<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php" href="../logout_script.php">Library</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['admin'])) {
                    ?>                       
                    <li><a href = "../Admin/adminfunctions.php"><span class = "glyphicon glyphicon-log-in"></span> Admin Functions</a></li>
                    <li><a href = "../logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>                    
                    <?php
                }else if (isset($_SESSION['reader'])){
                    ?>
                    <li><a href = "readerfunctions.php"><span class = "glyphicon glyphicon-log-in"></span> Reader Functions</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php
                    }else {
                    ?>
                    <li><a href = "extra.php"><span class = "glyphicon glyphicon-log-in"></span> Extra Functions</a></li>
                    <?php
                    }
                    ?>                    
            </ul>
        </div>
    </div>
</div>