<!DOCTYPE HTML>
<html>
    <head>
        <title>Log-In Page</title>
        

      
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        
        <link href="style.css" rel="stylesheet" type="text/css"><!--for linking to syle.css file-->
          <style>
            .row_style{
                margin-top: 80px;
            }
          </style>
        
     </head>
    <body>
       <div class="content">
    <nav>
         <?php
           require('includes/header.php');
         ?>    
    </nav>
        <div id="content">
            
              <div class="container-fluid decor_bg" id="login-panel">
                <div class="row row_style">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>VERIFICATION</h4>
                            </div>
                            <div class="panel-body">
                                
                                <form role="form" action="email_scripts.php" method="POST">
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <center><button type="submit" name="submit" class="btn btn-primary">Continue..</button></center><br><br>
                                </form><br/>
                                 
                            </div>
                             <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                         </div>
                        
                    </div>
                </div>
                   <?php if(isset($_GET['error'])){ ?>
                        <div class="alert alert-danger"><?php echo $_GET['error']; ?></div><!--Alerting Message
                                                                                                         if email is not valid-->
                  <?php } ?>
            </div>
        </div>
        </div>
    
    </body>

    <footer id="footer">
      <?php
        include('includes/footer.php');
      ?>
    </footer>
    
</html>