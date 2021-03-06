<?php
require('includes/common.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>eBag</title>
        

      
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <style>
           .jstyle{
               margin-top: 80px;
               background-color: #c0c0c0;
           }
            .imdw{
                padding-bottom: 8px;
            }
        </style>
        </head>
       
    <body>
        <nav>
            <?php
             require('includes/header.php');
             ?>
        </nav>
        <div class="content">
         
        <div id = "banner_image">
          <?php if(isset($_GET['msg'])){ ?>
          <div class="alert alert-success"><?php  echo $_GET['msg']; //alert message for user of successful registering ?>
          </div>
         <?php } ?>
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1 class="animated bounce">eBag (A Online Bag) </h1>
                            <p>Your Privacy is Our #1 Concern</p>
                            <br/>
                          
                            <a  href="explore.php" class="btn btn-danger btn-lg active">Explore</a>
                        </div>
                    </center>
                </div>
            </div>
          
            
         </div>
       <!--Main banner image end-->

    <!--Item categories listing-->
    <div class="container">
        <row>
              <div class="col-sm-4">
                
                <div class="thumbnail">
                  <img src="img/lock.jpg">
                     <div class="caption">
                        <center><h3>100% Private</h3>
                         <p>Designed to focus on privacy, your entries are totally private by default!</p>
                       </center>
                     </div>
                
                </div>
                
            </div>
            
        <div class="col-sm-4">
    
            <div class="thumbnail">
                <img src="img/phone.jpg" alt="">
                <div class="caption">
                   <center><h3>Available Everywhere</h3>
                    <p>Enjoy eBook on the move. Available for iOS and Android and totally free!</p>
                   </center>
               </div>
            </div>
        
         </div>
            
               <div class="col-sm-4">
                 
                 <div class="thumbnail">
                    <img src="img/watch.jpg" alt="">
                      <div class="caption">
                         <center><h3>Never Forget to Write</h3>
                          <p>Custom email reminders help you make sure you never forget to write.</p>
                         </center>
                     </div>
                </div>
               
               </div>
       </row>
        </div>
    </body>
    <footer id="footer">
    <?php
    include('includes/footer.php');
    ?>
</footer>
    
</html>