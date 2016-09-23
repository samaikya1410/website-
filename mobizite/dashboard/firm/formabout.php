<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us|Property Management</title>
	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  </head>
  <body>
      <div class="container-fluid">
    	
        <div class="row header-info">
        	<div class="col-lg-6 col-md-6">
            	Welcome to Our Website
            </div>
            
            
           <div class="col-lg-6 col-md-6 text-right header-social-icons">
           		<span><i class="fa fa-phone"></i>+91-9999999999</span>
            	<a href="https://www.facebook.com/" target="_blank"> <i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com/" target="_blank"> <i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"> <i class="fa fa-linkedin"></i></a>
                <a href="http://www.google-plus.com/" target="_blank"> <i class="fa fa-google-plus"></i></a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div> 	
	
    
      <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Property Management Firm</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="about-us.php">ABOUT US</a></li>
            <li class="dropdown">
              <a href="#" >PROPERTY MANAGEMENT</span></a>
              <ul class="dropdown-menu propmen" role="menu">
                <li><a href="plotmntrng.php">Plot Monitoring</a></li>
                <li><a href="rntasstnc.php">Rent Assistance</a></li>
                <li><a href="tenant.php">Tenant Management</a></li>
                <li><a href="rprsrnvtn.php">Repairs & Renovation</a></li>
              </ul>
            </li>
            <li><a href="propertylist.php">PROPERTY LISTING</a></li>
            <li><a href="faqs.php">FAQS</a></li>
            <li><a href="cntct-us.php">CONTACT US</a></li>
          </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    
   <div class="clearfix"></div>
    
    <div class="container" style="margin-top:20px">
    
    <h1>About Us</h1>

	
  		
  		<div  id="about_us">
       		<hr><h4> About Us </h4><hr><br>
			
			
			<?php
			
			mysql_connect("localhost","root","");
			mysql_select_db("mobizite");
			mysql_error();
			error_reporting(0);
			
			
			if(isset($_POST['submitbtn'])) {
				$abt_header = $_POST['abt_header'];
				$abt_image = $_POST['abt_image'];
				$abt_headers = $_POST['abt_headers'];
				$abt_text = $_POST['abt_text'];
				
				
				
				$insert = mysql_query("INSERT INTO pm_abt(abt_header,abt_image,abt_headers,abt_text) VALUES('$abt_header','$abt_image','$abt_headers','$abt_text')");
				if($insert){
					echo "<div align='center'>Successfully Uploaded</div>";
					move_uploaded_file($logotmp,"company/$path");
					}else
					{
					echo 'not updated';
					}
			}
			?>
    		
            <form class="form-horizontal" method="post" enctype="multipart/formdata>
    		
            <div class="form-group">
    	<label for="about_header" class="col-sm-2  col-lg-3 control-label">Header</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="text" class="form-control" name="abt_header" id="about_header" placeholder="Enter Your Header" required>
    	</div>
    </div>
    
    		<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image for About Us</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" class="form-control" name="image" id="about_file" placeholder="" required>
    	</div>
    </div>
    
    		<hr><h4> Headers </h4><hr><br>
    		
           
			<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Headers</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="text" class="form-control" name="headers" id="headrs" placeholder="" required>
    	</div>
    </div>
			
			<hr><h4>Text in About Us</h4><hr>
			<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Text</label>
    	<div class="col-sm-10 col-lg-9">
      		<textarea rows="5" class="form-control" cols="70" id="text_abt" name="text"></textarea>
    	</div>
    </div>
   
    
    
      
      		<hr>
     		
            <input type="submit" name="submitbtn" class="btn btn-default">
			<hr>
			</form>
        </div>
  		
    
   <div class="clearfix"></div>
    
      
   <footer class="foot">
    
            <div class="top-footer">
            	
                <div class="col-md-3">
                	<h2> About Us </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, provident, ab, laborum odit quo voluptatum omnis nihil assumenda expedita iste natus sunt fugit explicabo non dignissimos eligendi ut asperiores eum excepturi illum. Debitis, odit tempore unde excepturi tempora sapiente in voluptatem voluptatum cum suscipit? Porro, accusantium, ut quaerat modi iste id esse soluta aspernatur.   </p>
                </div>
                
                 <div class="col-md-3 footer-links">
                	<h2> Main Links </h2>
                    <ul>
                    
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about_us.php">ABOUT US</a></li>
                    <li><a href="products.php">VERTICALS</a></li>
                    <li><a href="contact-us.php">CONTACT US</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#login">SIGN IN</a></li>
                    
                    </ul>
                   
                </div>
                
                 <div class="col-md-3 contact-footer">
                	<h2> Contact Us </h2>
                   	
                     <ul>
                    
                    <li> <b>Company Name</b>   </li>
                     <li>Address</li>
                    <li>Bangalore</li>
                    <li>+91 80 24524524</li>
                    <li>company@company.com</li>
                    
                    </ul>
                    
                    
                </div>
                
                 <div class="col-md-3">
                	<h2> Locations </h2>
                   <img src="images/map.png" class="img-responsive"/>
                </div>
                
                
            </div>
            <div class="clearfix"></div>

            <div class="bottom-footer">
            	<div class="container-fluid">
               		
                    <div class="col-md-6">
                    	Copyright &copy; 2014 Mobizite (India) Pvt. Ltd., All rights reserved.
                    </div>
                    
                    <div class="col-md-6 text-right footer-b-links">
                    	<a href="privacy-policy.php">Privacy Policy</a> | 
                        <a href="disclaimer.php">Disclaimer</a> |
                         <a href="#" data-toggle="modal" data-target="#feedback">Feedback</a> |
                        <a href="newsletter.php">News Letter</a> |
						<a href="terms_of_use.php">Term 	s Of Use</a> 
                    </div>
					
                    
            	</div>
            </div>

    </footer> 
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	<script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	
  </body>
</html>