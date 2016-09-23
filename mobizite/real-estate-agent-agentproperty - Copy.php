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
    <link rel="stylesheet" type="text/css" href="css/agentproperty.css">

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
  
  
   
    <div style="clear:both"></div>
    <div class="container">
    <br>
    <div align="right" class="navigator"><a href="real-estate-agent-agentproperty.html"><span class="fa fa-chevron-left"></span>Previous</a> 2 of 30<a href="real-estate-agent-agentproperty - Copy (2).html">Next<span class="fa fa-chevron-right"></span></a></div>
    <br>
    
    <br>
    <div class="row">
    <div class="col-lg-8 content">
    <div class="heading">
    <div><h3>1000 DOWNS, Minden, 89423 <span class="pull-right">$262,000</span></h3></div>
    <div><small>3 beds | 2.0 baths | 1412 sq. ft. | Single Family /Site/Stick Built</small><span class="pull-right fa fa-star" title="add to favourites"></span></div>
    <hr>
    </div>
    <br>
    <div class="">
    
     <ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#images" role="tab" data-toggle="tab">Images</a></li>
  <li><a href="#description" role="tab" data-toggle="tab">Description</a></li>
  <li><a href="#details" role="tab" data-toggle="tab">Details</a></li>
	</ul>

     <div class="tab-content">
  <div class="tab-pane active" id="images">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item active">
      <img src="images/agent.jpg" alt="...">
    </div>
      <div class="item">
      <img src="images/agentproperty1.jpg" alt="...">
      </div>
      <div class="item">
      <img src="images/agentproperty2.jpg" alt="...">
      </div>
    </div>
    
    
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  </div>
  </div>
  <div class="tab-pane" id="description">
   <h4>Description</h4><hr>
    <div class="col-lg-12"><p>Very nice, well maintained home on a corner lot. The home offers a great room layout with kitchen, dining and family room open to each other. Features include stainless steel appliances, wood laminate flooring, breakfast bar, high ceilings, lots of natural light, spacious master bedroom and bath, spacious laundry room with utility sink, covered deck. Great views, nice landscaping around the home, access off of two streets, large open and level area suitable for horses, gardening or outbuildings.
</p></div>
  </div>
  <div class="tab-pane" id="details">
  <h4>Details</h4><hr>
    
    <div class="col-lg-6">
    <ul>
    <li>Property Class: Residential Type</li>
    <li>Type: Site/Stick Built</li>
    <li>Listing Status: Active</li>
    <li>Area: 30 – Topaz Lake, CA</li>
    <li>County: Mono</li>
    <li>State: CA</li>
    <li>Status Detail: New</li>
    <li>Beds: 2</li>
    <li>Baths(F/H): 1 /0</li>
    <li>Living Area (SqFt): 864 sq. ft.</li>
    </ul>
    </div>
    <div class="col-lg-6">
    <ul>
    <li>Parking Spaces: 3</li>
    <li>Carport Spaces: 1</li>
    <li>Built: 1975</li>
    <li> Listing#: 140008926</li>
    <li>List Date: 6/28/2014</li>
    <li>Class: Single Family</li>
    <li>Approx Lot Size: 1.400</li>
    <li>Stories: 1</li>
    <li>Fireplaces: Yes</li>
    </ul>
    </div>
  </div>
</div>

    </div>
  	<div class="col-lg-12"><button class="btn btn-primary">Save</button>
    <button class="btn"><span class="fa fa-facebook"></span>Like</button>
    <button class="btn"><span class="fa fa-google-plus"></span>Share</button>
    <button class="btn"><span class="fa fa-twitter"></span>Tweet</button>
    </div>
    </div>
    <div class="col-lg-4" style="padding-left:50px">
    <div class="col-lg-12" style="border:1px #E4E4E4 solid">
    <h4 align="center">Contact Agent</h4>
    <form role="form" style="padding:20px;">
    <div class="form-group">
    	<label for="name1" class=" control-label">First Name<font style="font-size:18px; color:red">*</font></label>
    	<div class="">
      	<input type="text" class="form-control" id="name1" placeholder="Type Your First Name" required>
    	</div>
  		</div>
        <div class="form-group">
    	<label for="name2" class="  control-label">Last Name<font style="font-size:18px; color:red">*</font></label>
    	<div class="">
      	<input type="text" class="form-control" id="name2" placeholder="Type Your Last Name" required>
    	</div>
  		</div>
       <div class="form-group">
    	<label for="Email1" class="control-label">Email<font style="font-size:18px; color:red">*</font></label>
    	<div class="">
      	<input type="email" class="form-control" id="Email1" placeholder="Type Your Email Address" required>
    	</div>
  		</div>
        <div class="form-group">
    	<label for="phoneno1" class="control-label">Mobile Number<font style="font-size:18px; color:red">*</font></label>
    	<div class="">
      	<input type="phoneno1" class="form-control" id="phoneno1" placeholder="Type Your Mobile Number" required>
    	</div>
  		</div>
        <div class="form-group">
    	<label for="message" class="control-label">Message</label>
    	<div class="">
      	<textarea class="form-control" id="message"></textarea>
    	</div>
  		</div>
        <div class="form-group" align="center">
        <button type="submit" class="btn btn-primary" >Send</button>
        </div>

    </form>
  	</div>
    </div>
    </div>
    <br>
    
    <br>
    
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