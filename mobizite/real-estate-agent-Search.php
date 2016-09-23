<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobizite</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/about_us.css">
    <link rel="stylesheet" type="text/css" href="css/products.css">
     <link rel="stylesheet" type="text/css" href="css/search.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  </head>
  <body>
	<div class="container-fluid">
    	
        <div class="row header-info">
        	<div class="col-lg-6 col-md-6">
            	Welcome to Our Website
            </div>
            
            
           <div class="col-lg-6 col-md-6 text-right header-social-icons">
            	<a href="https://www.facebook.com/"> <i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com/"> <i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/"> <i class="fa fa-linkedin"></i></a>
                <a href="http://www.google-plus.com/"> <i class="fa fa-google-plus"></i></a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div> 
    
    <nav class="navbar navbar-main affix" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mobizite</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-custom navbar-right">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="about_us.php" >About Us <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="about_us.php#achievements">Achievements</a></li>
			<li><a href="about_us.php#customers">Customers</a></li>
            <li><a href="about_us.php#partners">Partners</a></li>
            <li><a href="about_us.php#testimonials">Testimonials</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="products.php">Verticals <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="property_builder.php">Property Builder</a></li>
            <li><a href="building-contract-service.php">Building Related Contracting Service</a></li>
            <li><a href="property-mgmnt-firm.php">Property Management Firm</a></li>
            <li><a href="real-estate-agent.php">Real Estate Agent</a></li>
          </ul>
        </li>
        <li><a href="contact-us.php">Contact Us</a></li>
         <li><a href="#" data-toggle="modal" data-target="#login">Sign In</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
      </div>
      <div class="modal-body">
       	<form class="form-horizontal" role="form">
  		<div class="form-group">
    	<label for="inputEmail1" class="col-sm-2 control-label">Email<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="email" class="form-control" id="inputEmail1" placeholder="Type Your Email Address" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword1" class="col-sm-2 control-label">Password<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="password" class="form-control" id="inputPassword1" placeholder="Type Your Password" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      	<div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      	</div>
    	</div>
  		</div>
  		<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      	<button type="submit" class="btn btn-default" formaction="real-estate-agent-Search.html">Sign in</button>
    	</div>
  		</div>
		</form>
      </div>
      <div class="modal-footer"> 
        <div class="col-lg-10" align="left"><span class="forgot-password">Forgot Password?</span></div>
        <div  class="change-password" align="left"><p><hr>Enter the email address with which you registered. We will send a link to change your password</p>
        <form class="form-horizontal" role="form">
        	<div class="form-group">
    		<label for="inputEmail2" class="col-sm-2 control-label">Email<font style="font-size:18px; color:red">*</font></label>
    		<div class="col-sm-10">
      		<input type="email" class="form-control" id="inputEmail2" placeholder="Type Your Email Address" required>
    		</div>
  			</div>
            <div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default">Send Mail</button>
    		</div>
  			</div>
        </form>
        </div>
        </div>     
    </div>
  </div>
</div> 
  
  <div class="container-fluid">
  		<div class="row">
  <div class="col-lg-12">
  <h3 align="center">Find An Agent Or Office</h3>
    
    	
        <div class="col-lg-8 col-md-8 col-lg-offset-2">
        		
              <div class="col-lg-12 col-md-12 search-box">
              	
	<form role="form">
  <div class="form-group">
    <label for="firstname">First Name<font style="font-size:18px; color:red">*</font></label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" required>
  </div>
  
    <div class="form-group">
    <label for="lastname">Last Name<font style="font-size:18px; color:red">*</font></label>
    <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" required>
  	</div>
    
    <div class="form-group">
    <label for="city">City<font style="font-size:18px; color:red">*</font></label>
    <input type="text" class="form-control" id="city" placeholder="Enter City Name" required>
  	</div>
    
    <div class="form-group">
    <label for="email">Email<font style="font-size:18px; color:red">*</font></label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email Id" required>
  	</div>
    
    <div class="col-lg-6 col-md-6" style="padding-left:0px;">
    <div class="form-group">
        <label for="pin">Pincode<font style="font-size:18px; color:red">*</font></label>
        <input type="text" class="form-control" id="pin" placeholder="Enter Pincode" required>
  	</div>
    
    
    </div>
    
    <div class="col-lg-6 col-md-6" style="padding-right:0px;">
    <div class="form-group">
        <label for="mobile">Mobile Number<font style="font-size:18px; color:red">*</font></label>
        <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
  	</div>
    
    
    </div>
    
    <div class="clearfix"> </div>
    
    <div class="checkbox">
   <label>
     <input type="checkbox"> I Agree To The Terms and Conditions
   </label>
 </div>
 
  <button type="submit" class="btn btn-primary" formaction="real-estate-agent-Search - location.html" formtarget="_blank">VIEW AGENTS</button>
</form>
                    
              	
              </div> 
               
               
        </div>
    	

     	
    </div>
		</div>
        
    
 
	</div>
   
    
    
    
    <?php  include_once  'include/footer.php' ;  ?>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
     <script src="js/index.js"></script>
	<script>
		$(".navbar").affix({
			offset:{
				top:50
			}
		});
	</script>
   

    
  </body>
</html>