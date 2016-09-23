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
    <h1>Contact Us</h1>
	
	<?php
	
		mysql_connect("localhost","root","");
		mysql_select_db("mobizite");
		mysql_error();
		error_reporting(0);
	
			if(isset($_POST['submitbtn'])) {
				$main_location = $_POST['main_location'];
				$main_street = $_POST['main_street'];
				$main_city = $_POST['main_city'];
				$main_state = $_POST['main_state'];
				$main_pincode = $_POST['main_pincode'];
				$main_link = $_POST['main_link'];
				$main_email = $_POST['main_email'];
				$main_phonenum = $_POST['main_phonenum'];
				$other_location = $_POST['other_location'];
				$other_street = $_POST['other_street'];
				$other_city = $_POST['other_city'];
				$other_state = $_POST['other_state'];
				$other_pincode = $_POST['other_pincode'];
				$other_link = $_POST['other_link'];
				$other_email = $_POST['other_email'];
				$other_phonenum = $_POST['other_phonenum'];
				
				
				$insert = mysql_query("INSERT INTO pm_contact(main_location,main_street,main_city,main_state,main_pincode,main_link,main_email,other_location,other_street,other_city,other_state,other_pincode,other_link,other_email,other_phonenum) VALUES('$main_location','$main_street','$main_city','$main_state','$main_pincode','$main_link','$main_email','$other_location','$other_street','$other_city','$other_state','$other_pincode','$other_link','$other_email','$other_phonenum')");
				if($insert){
					echo "<div align='center'>Successfully Uploaded</div>";
					move_uploaded_file($logotmp,"company/$path");
					}else
					{
					echo 'not updated';
					}
			}
			?>
	
    <div class="tab-pane" id="contact_us">
        	<form class="form-horizontal" method="post" enctype="multipart/formdata">
  
    <hr><h4> Main Office </h4><hr><br>
    
    <div class="form-group">
    <label for="m_company-location" class="col-sm-2 col-lg-3 control-label" >Address*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="m_company-location" placeholder="location" name="main_location" required>
        <br>
        <input type="text" class="form-control" id="m_company-street" placeholder="street" name="main_street" required>
        <br>
        <input type="text" class="form-control" id="m_company-city" placeholder="city" name="main_city" required>
        <br>
        <input type="text" class="form-control" id="m_company-state" placeholder="state" name="main_state" required>
        <br>
        <input type="text" class="form-control" id="m_company-pincode" placeholder="PIN Code" name="main_pincode" required>
        <br>
    	</div>
    </div>
    <div class="form-group">    
        <label for="m_company-map" class="col-sm-2 col-lg-3 control-label">Google Map Link</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="m_company-map" placeholder="Enter Your Link" name="main_link" required>
        <br>
    	</div>
    </div>

    <div class="form-group">    
        <label for="m_company-email" class="col-sm-2 col-lg-3 control-label">Email</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="email" class="form-control" id="m_company-email" placeholder="Enter Your Email Id" name="main_email" required>
        <br>
    	</div>
    </div>
    
    <div class="form-group">
    	<label for="m_company-phone" class="col-sm-2 col-lg-3 control-label">Phone</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="tel" class="form-control" id="m_company-phone" placeholder="Enter Your Phone Number" name="main_phonenum" required>
    	</div>
    </div>
    
   	<hr><h4> Other Offices </h4><hr><br>
   
    <div class="form-group ">
    	<label for="company-location_1" class="col-sm-2 col-lg-3 control-label">Address*</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-location_1" placeholder="location" name="other_location" required>
        <br>
        <input type="text" class="form-control" id="company-street_1" placeholder="street" name="other_street" required>
        <br>
        <input type="text" class="form-control" id="company-city_1" placeholder="city" name="other_city" required>
    	<br>
   		<input type="text" class="form-control" id="company-state_1" placeholder="state" name="other_state" required>
    	<br>
        <input type="text" class="form-control" id="company-pincode_1" placeholder="PIN Code" name="other_pincode" required>
    	<br>    
    </div>
	</div>
    <div class="form-group">    
        <label for="company-map" class="col-sm-2 col-lg-3 control-label">Google Map Link</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-map" placeholder="Enter Your Link" name="other_link" required>
        <br>
    	</div>
    </div>
    
    <div class="form-group">    
        <label for="company-email_1" class="col-sm-2 col-lg-3 control-label">Email</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="email" class="form-control" id="company-email_1" placeholder="Enter Your Email Id" name="other_email" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label for="company-phone_1" class="col-sm-2 col-lg-3 control-label">Phone</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="tel" class="form-control" id="company-phone_1" placeholder="Enter Your Phone Number" name="other_phonenum" required>
        <br>
    	</div>
    </div>
     
     <div><button class="btn btn-default">Add more Offices</button></div>
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
						<a href="terms_of_use.php">Terms Of Use</a> 
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