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
     <link rel="stylesheet" type="text/css" href="css/agentlocation.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  </head>
  <body>
  
  
  <?php
  	include_once("dashboard/db.php");
  ?>
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
  
    <?php
					
					$select = mysql_query("SELECT * FROM rehome");
					$select_array = mysql_fetch_array($select);
					
					
				
				?>
  <div class="container">
  		<div class="row">
        	<div><h3><?php echo $select_array['client_name']; ?></h3><br></div>
  			<div class="col-lg-8 agent">
            	<div class="row">
                	<div class="col-lg-4" align="center">
                    <img src="dashboard/real_estate_agent/upload_images/<?php echo $select_array['client_image']; ?>" width="70%" height="70%"/>
                    </div>
                    <div class="col-lg-8">
                    <span class="fa fa-phone"></span><?php echo $select_array['client_phone']; ?><br>
                    <span class="fa fa-envelope"></span><?php echo $select_array['client_email']; ?><br><br>
                    Languages:<?php echo $select_array['client_languages']; ?><br><br>
                    <?php echo $select_array['client_location']; ?>,<?php echo $select_array['client_street']; ?>,<?php echo $select_array['client_city']; ?><br>
					<?php echo $select_array['client_state']; ?>,PIN: <?php echo $select_array['client_pincode']; ?><br><br>
                    License #: <?php echo $select_array['client_license']; ?><br>
                    <span class="fa fa-facebook"></span><span class="fa fa-google-plus"></span><span class="fa fa-twitter"></span><br>
                   <button class=" btn btn-success" style="margin-top:20px;"> View Website </button>
                    </div>
                </div>
                <div class="col-lg-12" style="margin-top:10px;">
                
                
              
                
                <h4><?php echo $select_array['client_name']; ?> Biography</h4>
<?php echo $select_array['client_biography']; ?>
<!-- <p>Srikanth has been a top producing real estate agent for the past 19 years. He is a licensed Broker in both California and Nevada and specializes in residential and land sales. </p>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
                </div>
            </div>
            <div class="col-lg-4 agent-list">
            <h4>Srikanth's Current Listing</h4>
            <div class="agent-property col-lg-12">
            <h5><b>$262,000  1451 DOWNS Minden</b></h5>
            <div class="col-lg-5">
            <img src="images/agent.jpg" width="90%" height="110px"/>
            </div>
            <div class="col-lg-7">
            3 beds, 2/0 baths<br>
1412 sq. ft., 0.900 acre(s)<br>
Single Family/Site/Stick Built<br>
89423<br>
Listed 6/29/2014<br>
Listing#140009012<br>
            <a href="real-estate-agent-agentproperty.html" target="_blank">VIEW..</a>
            </div>
            </div>
   			<div class="agent-property col-lg-12">
            <h5><b>$262,000  1451 DOWNS Minden</b></h5>
            <div class="col-lg-5">
            <img src="images/agent.jpg" width="90%" height="110px"/>
            </div>
            <div class="col-lg-7">
            3 beds, 2/0 baths<br>
1412 sq. ft., 0.900 acre(s)<br>
Single Family/Site/Stick Built<br>
89423<br>
Listed 6/29/2014<br>
Listing#140009012<br>
             <a href="real-estate-agent-agentproperty.html" target="_blank">VIEW..</a>
            </div>
            </div>
            <div class="agent-property col-lg-12">
            <h5><b>$262,000  1451 DOWNS Minden</b></h5>
            <div class="col-lg-5">
            <img src="images/agent.jpg" width="90%" height="110px"/>
            </div>
            <div class="col-lg-7">
            3 beds, 2/0 baths<br>
1412 sq. ft., 0.900 acre(s)<br>
Single Family/Site/Stick Built<br>
89423<br>
Listed 6/29/2014<br>
Listing#140009012<br>
            <a href="real-estate-agent-agentproperty.html" target="_blank">VIEW..</a>
            </div>
            </div>
            <div class="agent-property col-lg-12">
            <h5><b>$262,000  1451 DOWNS Minden</b></h5>
            <div class="col-lg-5">
            <img src="images/agent.jpg" width="90%" height="110px"/>
            </div>
            <div class="col-lg-7">
            3 beds, 2/0 baths<br>
1412 sq. ft., 0.900 acre(s)<br>
Single Family/Site/Stick Built<br>
89423<br>
Listed 6/29/2014<br>
Listing#140009012<br>
             <a href="real-estate-agent-agentproperty.html" target="_blank">VIEW..</a>
            </div>
            </div>
            <div class="agent-property col-lg-12">
            <h5><b>$262,000  1451 DOWNS Minden</b></h5>
            <div class="col-lg-5">
            <img src="images/agent.jpg" width="90%" height="110px"/>
            </div>
            <div class="col-lg-7">
            3 beds, 2/0 baths<br>
1412 sq. ft., 0.900 acre(s)<br>
Single Family/Site/Stick Built<br>
89423<br>
Listed 6/29/2014<br>
Listing#140009012<br>
            <a href="real-estate-agent-agentproperty.html" target="_blank">VIEW..</a>
            </div>
            </div>
            <div class="agent-property col-lg-12">
            <h5><b>$262,000  1451 DOWNS Minden</b></h5>
            <div class="col-lg-5">
            <img src="images/agent.jpg" width="90%" height="110px"/>
            </div>
            <div class="col-lg-7">
            3 beds, 2/0 baths<br>
1412 sq. ft., 0.900 acre(s)<br>
Single Family/Site/Stick Built<br>
89423<br>
Listed 6/29/2014<br>
Listing#140009012<br>
             <a href="real-estate-agent-agentproperty.html" target="_blank">VIEW..</a>
            </div>
            </div>
            </div>
		</div>
        
    
 
	</div>
   
    
    <br><br>
    
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