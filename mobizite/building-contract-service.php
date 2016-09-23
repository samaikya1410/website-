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
            	<a href="https://www.facebook.com/" target="_blank"> <i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com/" target="_blank"> <i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"> <i class="fa fa-linkedin"></i></a>
                <a href="http://www.google-plus.com/" target="_blank"> <i class="fa fa-google-plus"></i></a>
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
          <a href="about_us.php">About Us <b class="caret"></b></a>
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
       	<div class="col-lg-12 banner">
   	    <img src="images/czarsuites-pic.jpg" width="100%" height="500" alt=""/> </div>
		<div class="clearfix"></div>
        <div class="row">
			<div class="prods spring" data-stellar-background-ratio="0">
              <div class="col-lg-10 col-lg-offset-1 prods-content" data-stellar-background-ratio="0">
              <h1 style="text-align:center;">Products</h1>
              <h2 style="text-align:center;">Building Contract Service</h2>
        	<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, similique, sed, quis, officia doloremque nostrum quo suscipit nihil numquam soluta laudantium temporibus placeat. Tempora, mollitia, nihil ipsum officia dolorum minus voluptatum quidem reiciendis esse nemo! Maiores, necessitatibus, ducimus, vero quidem explicabo autem quis totam placeat hic corrupti voluptatibus sed officiis magnam corporis harum architecto voluptatem deserunt cum itaque neque possimus nemo cupiditate obcaecati eveniet unde blanditiis expedita assumenda magni a perspiciatis ipsam optio nobis aperiam in voluptate sunt quasi recusandae iste quas illo. Eius, incidunt, porro, alias totam dolorem facere error dolore numquam aspernatur vitae earum delectus! Earum nihil aliquam perferendis quos repellat tempore debitis! Ea, esse, neque deleniti eveniet ipsum rem cum aut ducimus reprehenderit dignissimos ullam eligendi et nihil at tenetur incidunt recusandae enim est quibusdam iusto minus suscipit eos error quae numquam magni ex. Quaerat, autem quas pariatur sed iste adipisci aspernatur molestias quam ipsam odit quia consectetur sunt animi veniam nobis officiis at suscipit dignissimos debitis omnis. Odio, rem, non, sit eum asperiores eius laborum nisi odit cum obcaecati voluptatum nemo aliquam id sunt delectus. Fugiat, quo, consequatur laborum ipsam cumque odit tempora adipisci aliquam eaque delectus illum sunt autem at! Impedit, ducimus ratione nesciunt doloribus.</p>
        </div>
          </div> 
            
        </div>
    <div class="row">
        	<div class="prd col-lg-3" style="position: relative;">
    <div class="col-lg-10 col-lg-offset-1 prd1">
    <h3>Free</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;">SIGNUP</a>
    </div></div>
    <div class="prd col-lg-3">
    <div class="col-lg-10 col-lg-offset-1 prd1"> 
    <h3>Silver</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    <li><span style="color:green">&#10004;</span>SEO</li>
     
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;" >SIGNUP</a></div>	
    </div>
    <div class="prd col-lg-3">
    <div class="col-lg-10 col-lg-offset-1 prd1">	
    <h3>Gold</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    <li><span style="color:green">&#10004;</span>SEO</li>
    <li><span style="color:green">&#10004;</span>Mobile App</li>
    
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;" >SIGNUP</a>	
    </div></div>
    <div class="prd col-lg-3">
    <div class="col-lg-10 col-lg-offset-1 prd1">
    <h3>Platinum</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    <li><span style="color:green">&#10004;</span>SEO</li>
    <li><span style="color:green">&#10004;</span>Mobile App</li>
    <li><span style="color:green">&#10004;</span>Social Media</li>
    <li><span style="color:green">&#10004;</span>Analytics</li>
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;" >SIGNUP</a>	
    </div></div>	

        </div>
 <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
       	<form class="form-horizontal" role="form">
  		<div class="form-group">
    	<div class="form-group">
    	<label for="name" class="col-sm-2 control-label">Name<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="name" class="form-control" id="name" placeholder="Enter your Name" required>
    	</div>
		</div>
		<div class="form-group">
		<label for="inputEmail1" class="col-sm-2 control-label">Email<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="email" class="form-control" id="inputEmail1" placeholder="Enter your Email Address" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword1" class="col-sm-2 control-label">Password<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="password" class="form-control" id="inputPassword1" placeholder="Enter Your Password" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="signplan" class="col-sm-2 control-label">Plan<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
		<input type="radio" name="price" id="signplan" class="rad">Free<input type="radio" name="price" id="signplan" class="rad" > Silver <input type="radio" name="price"  id="signplan" class="rad"> Gold <input type="radio" name="price"  id="signplan" class="rad"> Platinum
    	</div>
  		</div>
		<div class="form-group">
    	<label for="cont_num" class="col-sm-2 control-label">Contact<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="number" class="form-control" id="cont_num" placeholder="Enter Your Contact Number" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      	<button type="submit" class="btn btn-default">Submit</button>
    	</div>
  		</div>
		</form>
      </div>
          
    </div>
  </div>
</div>
</div>
</div>
   
    <div style="clear:both"></div>
    
    
    <footer>
    
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
					
                    <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Feedback</h4>
      </div>
      <div class="modal-body">
       	<form class="form-horizontal" role="form">
        <div class="form-group">
    	<label for="feedback_name" class="col-sm-2 control-label">Name</label>
    	<div class="col-sm-10">
      	<input type="text" class="form-control" id="feedback_mame" placeholder="Name" required>
    	</div>
  		</div>
  		<div class="form-group" >
    	<label for="feedback_email" class="col-sm-2 control-label">Email</label>
    	<div class="col-sm-10">
      	<input type="email" class="form-control" id="feedback_email" placeholder="Email" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="feedback_feedback" class="col-sm-2 control-label">Feedback</label>
    	<div class="col-sm-10">
      	<textarea class="form-control" id="feedback_feedback" placeholder=""></textarea>
    	</div>
  		</div>
  		
  		<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      	<button type="submit" class="btn btn-default">Send</button>
    	</div>
  		</div>
		</form>
      </div>
           
    </div>
  </div>
</div>
            	</div>
            </div>

    </footer>
   

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