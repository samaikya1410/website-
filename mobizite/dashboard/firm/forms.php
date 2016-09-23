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
    
    <ul class="nav nav-tabs" role="tablist" id="myTab">
  		<li class="active"><a href="#home" role="tab" data-toggle="tab">HOME</a></li>
  		<li><a href="#about_us" role="tab" data-toggle="tab">ABOUT US</a></li>
  		<li><a href="#property" role="tab" data-toggle="tab">PROPERTY MANAGEMENT</a></li>
  		<li><a href="#listing" role="tab" data-toggle="tab">PROPERTY LISTING</a></li>
  		<li><a href="#careers" role="tab" data-toggle="tab">FAQS</a></li>
		<li><a href="#contact_us" role="tab" data-toggle="tab">CONTACT US</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="home">
        	<hr><h4> Company Details </h4><hr><br>
            
        	<form class="form-horizontal">
    <div class="form-group">
    <label for="company-name" class="col-sm-2  col-lg-3 control-label">Company Name*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-name" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-description" class="col-sm-2  col-lg-3 control-label">Company Description*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-description" placeholder="" required>
    	</div>
    </div>
    
   <div class="form-group">
    <label for="company-logo" class="col-sm-2 col-lg-3 control-label">Logo*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file" value="upload image" class="" id="company-logo" placeholder="" required accept="image" >
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-email" class="col-sm-2 col-lg-3 control-label">Email*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="email" class="form-control" id="company-email" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-phone" class="col-sm-2 col-lg-3 control-label">Phone*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="tel" class="form-control" id="company-phone" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-location" class="col-sm-2 col-lg-3 control-label">Address*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-location" placeholder="location" required>
        <br>
        <input type="text" class="form-control" id="company-street" placeholder="street" required>
        <br>
        <input type="text" class="form-control" id="company-city" placeholder="city" required>
        <br>
        <input type="text" class="form-control" id="company-state" placeholder="state" required>
        <br>
        <input type="text" class="form-control" id="company-pincode" placeholder="PIN Code" required>
        <br>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="linked_in" class="col-sm-2 col-lg-3 control-label">Social Network Links</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="linked_in" placeholder="link for linkedin page" required>
        <br>
        <input type="text" class="form-control" id="google+" placeholder="link for google+ page" required>
        <br>
        <input type="text" class="form-control" id="fb" placeholder="link for fb page" required>
        <br>
        <input type="text" class="form-control" id="twitter" placeholder="link for twitter page" required>
        <br>
    	</div>
    </div>
    <hr> <h4>Carousel Pictures</h4><hr>
    <div class="form-group">
		<label for="pic1" class="col-sm-2 col-lg-3 control-label">Pictures</label>
        <div class="col-sm-10 col-lg-9">
        <input type="file" class="form-control" id="pic1" placeholder="Picture 1">
        <br>
        <input type="text" class="form-control" id="cap1" placeholder="Heading for Pic 1">
        <br>
        <textarea cols="40" rows="4" id="abt1"></textarea>
    	<br>
        <input type="file" class="form-control" id="pic2" placeholder="Picture 1">
        <br>
        <input type="text" class="form-control" id="cap2" placeholder="Heading for Pic 1">
        <br>
        <textarea cols="40" rows="4" id="abt2"></textarea>
    	<br>
        <input type="file" class="form-control" id="pic3" placeholder="Picture 1">
        <br>
        <input type="text" class="form-control" id="cap3" placeholder="Heading for Pic 1">
        <br>
        <textarea cols="40" rows="4" id="abt3"></textarea>
    	<br>
        <input type="file" class="form-control" id="pic4" placeholder="Picture 1">
        <br>
        <input type="text" class="form-control" id="cap4" placeholder="Heading for Pic 1">
        <br>
        <textarea cols="40" rows="4" id="abt4"></textarea>
    	<br>
        </div>
    </div>
    </form>
   
    		<div class="about">
            <hr><h4>About Us</h4><hr>
             <div class="form-group">
    <label for="about_home" class="col-sm-2 col-lg-3 control-label">Text in Home Page</label>
    	<div class="col-sm-10 col-lg-9">
      	<textarea rows="5" cols="50" id="about_home"></textarea>
        <br>
        <input type="file" class="form-control" id="abt_image">
        <br>
    	</div>
    </div>
            
            
            
            
            </div>
     
    		<div class="srvc">
    
     <hr><h4>Our Services</h4><hr>
 
     <div class="project">
     
    
     <div><h4>Service 1</h4></div>
     
     <div class="srvc-form1">
     <form class="form-horizontal">
     <div class="form-group">
     <label for="srvc_name" class="col-sm-2 col-lg-3 control-label">Service Name<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="srvc_name" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="srvc_about" class="col-sm-2 col-lg-3 control-label">About Service<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="srvc_about" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="srvc_link" class="col-sm-2 col-lg-3 control-label">Service Link<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="srvc_link" placeholder="" required>
    	</div>  
     </div>
 
     
    		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      		<button type="reset" class="btn btn-default">Reset</button>
    		</div>
  			</div>
        </form>
     </div>
      </div>
        
        
        <div><button  class="btn btn-default add-srvc">Add New Service</button></div>
     </div>
    
  			<div class="tstm">
  	<hr><h4>Testimonials</h4><hr>
    <div class="form-horizontal">
    <div class="form-group">
     	<label for="test_text" class="col-sm-2 col-lg-3 control-label">Testimonial</label>
    	<div class="col-sm-10 col-lg-9">
      		<textarea rows="4" cols="50" id="test_text"></textarea> 
    	</div>  
      
     </div>
     <div class="form-group">
     	<label for="test_cust" class="col-sm-2 col-lg-3 control-label">Customer</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="text" class="form-control" id="test_cust"  placeholder="" required>
    	</div>  
     
     </div>
      <div><button class="btn btn-default">Add New Testimonial</button></div> 
     </div>
  </div> 
  
  			
  		
    		
  		</div>
        
  		<div class="tab-pane" id="about_us">
       		<hr><h4> About Us </h4><hr><br>
    		
            <form class="form-horizontal">
    		
            <div class="form-group">
    	<label for="about_header" class="col-sm-2  col-lg-3 control-label">Header</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="text" id="about_header" placeholder="Enter Your Header" required>
    	</div>
    </div>
    
    		<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image for About Us</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="about_file" placeholder="" required>
    	</div>
    </div>
    
    		<hr><h4> Headers </h4><hr><br>
    		
           
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Headers</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="text" id="headrs" placeholder="" required>
    	</div>
    </div>
    <div><button class="btn btn-default">Add new header</button></div>
    <hr><h4>Text in About Us</h4><hr>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Text</label>
    	<div class="col-sm-10 col-lg-9">
      		<textarea rows="5" cols="70" id="text_abt"></textarea>
    	</div>
    </div>
   
    
    
    </form>  
      		<hr>
     		
            <button class="btn btn-default">SUBMIT</button>
     		<br><br><hr> 
        </div>
  		
			<div class="tab-pane" id="property">
				<hr><h4> Property Management </h4><hr><br>
				
				<form class="form-horizontal">
					<div><h4>Plot Monitoring</h4></div>
					
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="plotpic">Upload Picture</label>
						<div class="col-sm-10 col-lg-9">
						<input type="file" id="plotpic" placeholder="" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="plottext">Text</label>
						<div class="col-sm-10 col-lg-9">
						<textarea cols="70" rows="5" id="plottext"></textarea>
						</div>
					</div>
			
					<div><h4>Rent Assistance</h4></div>
					
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="rentpic">Upload Picture</label>
						<div class="col-sm-10 col-lg-9">
						<input type="file" id="rentpic" placeholder="" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="renttext">Text</label>
						<div class="col-sm-10 col-lg-9">
						<textarea cols="70" rows="5" id="renttext"></textarea>
						</div>
					</div>
					
					<div><h4>Tenant Assistance</h4></div>
					
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="tenpic">Upload Picture</label>
						<div class="col-sm-10 col-lg-9">
						<input type="file" id="tenpic" placeholder="" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="tentext">Text</label>
						<div class="col-sm-10 col-lg-9">
						<textarea cols="70" rows="5" id="tentext"></textarea>
						</div>
					</div>
					
					<div><h4> Repairs & Renovation </h4></div>
					
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="rarpic">Upload Picture</label>
						<div class="col-sm-10 col-lg-9">
						<input type="file" id="tenpic" placeholder="" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2  col-lg-3 control-label" for="rartext">Text</label>
						<div class="col-sm-10 col-lg-9">
						<textarea cols="70" rows="5" id="rartext"></textarea>
						</div>
					</div>
					
				<hr>
				<button class="btn btn-default">SUBMIT</button>
				<br><br>
				<hr>
				</form>
			</div>
			
        <div class="tab-pane" id="listing">
        	<hr><h4> Partners </h4><hr><br>
    		<form class="form-horizontal">
    		
            <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload details of the Partner*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="partner_1" placeholder="" required>
    	</div>
    </div>
    
    		<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image of the Partner </label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="partner_1_i" placeholder="" required>
    	</div>
    </div>
    		
            <div><button class="btn btn-default">Add new Partner</button></div>
    
			<hr><h4> Investors </h4><hr><br>
    		<h4>Investor Updates</h4>
    		
            <form class="form-horizontal">
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Investor Updates*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="investor_updates" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Investor Updates</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="investor_updates_i" placeholder="" required>
    	</div>
    </div>
    
    <h4> Financial Results </h4>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Financial Results</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="finanicial_results" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Financial Results</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="financial_results_i" placeholder="" required>
    	</div>
    </div>
    
    <h4> Share Prices </h4>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Share Prices</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="share_prices" placeholder="" required>
    	</div>
    </div>
    
   	<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Share Prices</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="share_prices_i" placeholder="" required>
    	</div>
    </div>
    
    <h4> Investor Claims </h4>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Investor Claims</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="investor_claims" placeholder="" required>
    	</div>
    </div>   
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Investor Claims</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="investor_claims_i" placeholder="" required>
    	</div>
    </div>
    
    <h4> Share Holding Pattern </h4>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Share Holding Pattern</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="share_holding_pattern" placeholder="" required>
    	</div>
    </div>   
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Share Holding Pattern</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="share_holding_pattern_i" placeholder="" required>
    	</div>
    </div>    
    
    </form>    
      		<hr>
     		<button class="btn btn-default">SUBMIT</button>
     		<br><br><hr>
        </div>
        
        <div class="tab-pane" id="careers">
        	<hr><h4> Why Work With Us </h4><hr><br>
    		
            <form class="form-horizontal">
    		
            <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to "Why Work With Us"*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="why_work_with_us" placeholder="" required>
    	</div>
    </div>
    
    		<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image related to "Why Work With Us"</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="why_work_with_us_i" placeholder="" required>
    	</div>

    </div>
    
    		<hr><h4> Job Openings </h4><hr><br>
    		
            <form class="form-horizontal">
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Job Openings*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="finishing" placeholder="" required>
    	</div>
    </div>
    
    <h4> Job Descriptions </h4>
    
     <div class="form-group">
     <label for="job_location" class="col-sm-2 col-lg-3 control-label"> Job Location*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="job_location" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="job_code" class="col-sm-2 col-lg-3 control-label"> Job Code*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="job_code" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="qualification" class="col-sm-2 col-lg-3 control-label"> Qualification*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="qualification" placeholder="" required>
    	</div>  
     </div>     
 
     <div class="form-group">
     <label for="experience" class="col-sm-2 col-lg-3 control-label"> Experience*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="experience" placeholder="" required>
    	</div>  
     </div>     
     
     <div><button>Add more Job Openings</button></div>
    </form>    
      		<hr>
     		<button class="btn btn-default">SUBMIT</button>
     		<br><br><hr>
        </div>
        
        <div class="tab-pane" id="contact_us">
        	<form class="form-horizontal">
  
    <hr><h4> Main Office </h4><hr><br>
    
    <div class="form-group">
    <label for="m_company-location" class="col-sm-2 col-lg-3 control-label">Address*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="m_company-location" placeholder="location" required>
        <br>
        <input type="text" class="form-control" id="m_company-street" placeholder="street" required>
        <br>
        <input type="text" class="form-control" id="m_company-city" placeholder="city" required>
        <br>
        <input type="text" class="form-control" id="m_company-state" placeholder="state" required>
        <br>
        <input type="text" class="form-control" id="m_company-pincode" placeholder="PIN Code" required>
        <br>
    	</div>
    </div>

    <div class="form-group">    
        <label for="m_company-email" class="col-sm-2 col-lg-3 control-label">Email</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="email" class="form-control" id="m_company-email" placeholder="" required>
        <br>
    	</div>
    </div>
    
    <div class="form-group">
    	<label for="m_company-phone" class="col-sm-2 col-lg-3 control-label">Phone</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="tel" class="form-control" id="m_company-phone" placeholder="" required>
    	</div>
    </div>
    
   	<hr><h4> Regional Offices </h4><hr><br>
   
    <div class="form-group ">
    	<label for="company-location_1" class="col-sm-2 col-lg-3 control-label">Address*</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-location_1" placeholder="location" required>
        <br>
        <input type="text" class="form-control" id="company-street_1" placeholder="street" required>
        <br>
        <input type="text" class="form-control" id="company-city_1" placeholder="city" required>
    	<br>
   		<input type="text" class="form-control" id="company-state_1" placeholder="state" required>
    	<br>
        <input type="text" class="form-control" id="company-pincode_1" placeholder="PIN Code" required>
    	<br>    
    </div>
	</div>
    
    <div class="form-group">    
        <label for="company-email_1" class="col-sm-2 col-lg-3 control-label">Email</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="email" class="form-control" id="company-email_1" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label for="company-phone_1" class="col-sm-2 col-lg-3 control-label">Phone</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="tel" class="form-control" id="company-phone_1" placeholder="" required>
        <br>
    	</div>
    </div>
     
     <div><button class="btn btn-default">Add more Offices</button></div>
           <hr>
     <button class="btn btn-default">SUBMIT</button>
     <br><br><hr>
   
</form>
        </div>
	</div>
    
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