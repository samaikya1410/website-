<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <title>Website Title</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
   
    <link rel="stylesheet" type="text/css" href="getinfo.css">

  </head>
  <body>
  	
    
    
    <div class="container" style="margin-top:20px">
    
    <ul class="nav nav-tabs" role="tablist" id="myTab">
  		<li class="active"><a href="#home" role="tab" data-toggle="tab">HOME</a></li>
  		<li><a href="#about_us" role="tab" data-toggle="tab">ABOUT US</a></li>
  		<li><a href="#projects" role="tab" data-toggle="tab">PROJECTS</a></li>
  		<li><a href="#alliances" role="tab" data-toggle="tab">ALLIANCES</a></li>
  		<li><a href="#careers" role="tab" data-toggle="tab">CAREERS</a></li>
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
    
    </form>
   
    		<div class="residential">
    
    <hr> <h4>Residential Projects</h4><hr>

     <div class="project1">
     
    
     <div class="slide"><h4>Project 1</h4><span class="fa fa-chevron-down"></span></div>
     
     <div class="project-form1">
     <form class="form-horizontal">
     <div class="form-group">
     <label for="company-rprojectname" class="col-sm-2 col-lg-3 control-label"> Name*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-rprojectname" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="company-rprojectname" class="col-sm-2 col-lg-3 control-label">Location*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-rprojectlocation" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="company-rdevelopment-type" class="col-sm-2 col-lg-3 control-label">Development Type*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-rdevelopment-type" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="company-rno-of-units" class="col-sm-2 col-lg-3 control-label">No-of-units</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-rno-of-units" placeholder="" >
    	</div>  
     </div>
     
     <div class="form-group">
     	<label for="r_current" class="col-sm-2 col-lg-3 control-label">Project Status</label>
		<div class="col-sm-10 col-lg-9">
        <select class="form-control">	
        	<option id="r_current">Current</option>
            <option id="r_completed">Completed</option>
            <option id="r_forthcoming">Forthcoming</option> 
        </select>
        </div>
     </div>
     
     <div class="form-group">
     	<label for="company-rproject-image" class="col-sm-2 col-lg-3 control-label">Project's picture*</label>
    		<div class="col-sm-10 col-lg-9">
      	<input type="file" class="" id="company-rproject-image" placeholder="" required accept="image">
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="company-rproject-locationmap" class="col-sm-2 col-lg-3 control-label">Project's location Map</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file" class="" id="company-rproject-locationmap" placeholder=""  accept="image,document">
    	</div>  
     </div>
     	
        <div class="form-group">
     	<label for="company-rproject-masterplan" class="col-sm-2 col-lg-3 control-label">Project's Master Plan</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file" class="" id="company-rproject-masterplan" placeholder=""  accept="image,document">
    	</div>  
     	</div>
     
     <div class="form-group">
     <label for="company-rproject-floorplan" class="col-sm-2 col-lg-3 control-label">Project's Floor Plan</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" class="" id="company-rproject-foorplan" placeholder=""  accept="image,document">
			<br><button>Add more floor plan</button>
    	</div>
  
     </div>
     
     <div class="form-group">
     	<div class="col-sm-offset-2 col-sm-10">
      		<button type="reset" class="btn btn-default">Reset</button>
            <button class="btn btn-default">Include in Major Projects List</button>
            <button class="btn btn-default">Remove from Major Projects List</button>
    	</div>
  	 </div>
        </form>
     </div>
      </div>
        
        
        <div class="add-rproject"><button  class="btn btn-default">Add New project</button></div>
     </div>
     
    		<div class="commercial">
    
     <hr><h4>Commercial Projects</h4><hr>
 
     <div class="project">
     
    
     <div><h4>Project 1</h4></div>
     
     <div class="project-form1">
     <form class="form-horizontal">
     <div class="form-group">
     <label for="company-cprojectname" class="col-sm-2 col-lg-3 control-label"> Name<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-cprojectname" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="company-cprojectname" class="col-sm-2 col-lg-3 control-label">Location<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-cprojectlocation" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="company-cdevelopment-type" class="col-sm-2 col-lg-3 control-label">Development Type<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-cdevelopment-type" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     	<label for="company-cno-of-units" class="col-sm-2 col-lg-3 control-label">No-of-units</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="text" class="form-control" id="company-cno-of-units" placeholder="" >
    	</div>  
     </div>
     
     <div class="form-group">
     	<label for="c_current" class="col-sm-2 col-lg-3 control-label">Project Status</label>
		<div class="col-sm-10 col-lg-9">
        <select class="form-control">	
        	<option id="c_current">Current</option>
            <option id="c_completed">Completed</option>
            <option id="c_forthcoming">Forthcoming</option> 
        </select>
        </div>
     </div>
     
     <div class="form-group">
     <label for="company-cproject-image" class="col-sm-2 col-lg-3 control-label">Project's picture<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file" class="" id="company-cproject-image" placeholder="" required accept="image">
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="company-cproject-locationmap" class="col-sm-2 col-lg-3 control-label">Project's location Map</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file" class="" id="company-cproject-locationmap" placeholder=""  accept="image,document">
    	</div>  
     </div>
     	
        <div class="form-group">
     	<label for="company-cproject-masterplan" class="col-sm-2 col-lg-3 control-label">Project's Master Plan</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file" class="" id="company-cproject-masterplan" placeholder=""  accept="image,document">
    	</div>  
     	</div>
     
     <div class="form-group">
     <label for="company-cproject-floorplan" class="col-sm-2 col-lg-3 control-label">Project's Floor Plan</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file" class="" id="company-cproject-floorplan" placeholder=""  accept="image,document">
    	</div>  
     </div>
     
    		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      		<button type="reset" class="btn btn-default">Reset</button>
            <button class="btn btn-default">Include in Major Projects List</button>
            <button class="btn btn-default">Remove from Major Projects List</button>
    		</div>
  			</div>
        </form>
     </div>
      </div>
        
        
        <div><button  class="btn btn-default add-cproject">Add New project</button></div>
     </div>
    
  			<div class="clients">
  	<hr><h4>Major Clients</h4><hr>
    <div class="form-horizontal">
    <div class="form-group">
     	<label class="col-sm-2 col-lg-3 control-label">Client's Image*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" class="" placeholder="" required accept="image">
    	</div>  
      
     </div>
     
      <div><button class="btn btn-default">Add New Client</button></div> 
     </div>
  </div> 
  
  			<div class="clients">
  	<hr><h4>Advertisements</h4><hr>
    <div class="form-horizontal">
    <div class="form-group">
     	<label class="col-sm-2 col-lg-3 control-label">Advertisement's Image*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" class="" placeholder="" required accept="image">
    	</div>  
     </div>
      <div><button class="btn btn-default">Add New Advertisement</button></div> 
     </div>
  </div>
  		
    		<div class="clients">
  	<hr><h4>Latest News</h4><hr>
    <div class="form-horizontal">
    <div class="form-group">
     	<label for="news_headline1" class="col-sm-2 col-lg-3 control-label">News Headline*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="news_headline1" placeholder="" required>
    	</div>   
     </div>
     <div class="form-group">
     	<label for="news_headline1_link" class="col-sm-2 col-lg-3 control-label">Link for News Headline*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="news_headline1" placeholder="" required>
    	</div>  
     </div>
     
      <div><button class="btn btn-default">Add More News Update</button></div> 
     </div>
     <hr>
     <button class="btn btn-default">SUBMIT</button>
     <br><br><hr>
  </div>
  		</div>
        
  		<div class="tab-pane" id="about_us">
       		<hr><h4> Corporate Profile </h4><hr><br>
    		
            <form class="form-horizontal">
    		
            <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Corporate Profile of the Company*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="corporate_profile" placeholder="" required>
    	</div>
    </div>
    
    		<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image for Corporate Profile</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="corporate_profile_i" placeholder="" required>
    	</div>
    </div>
    
    		<hr><h4> Board Of Directors </h4><hr><br>
    		
            <form class="form-horizontal">
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Details about the member*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="member_1" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image of the member</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="member_1_i" placeholder="" required>
    	</div>
    </div>
    <div><button class="btn btn-default">Add new member</button></div>
    
    <hr><h4> Awards </h4><hr><br>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Details of the Award</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="award_1" placeholder="" required>
    	</div>
    </div>
        <div><button class="btn btn-default">Add new Award</button></div>
    
    <hr><h4> Quality Policy </h4><hr><br>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Quality Policy file</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="quality_policy" placeholder="" required>
    	</div>
    </div>
    
    <hr><h4> Testimonials </h4><hr><br>
    <h4>Residents</h4>
        <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Details about the Resident*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="resident_1" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image of the Resident</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="resident_1_i" placeholder="" required>
    	</div>
    </div>
    <div><button class="btn btn-default">Add new Resident's Testimonial</button></div><br>
    
    <h4>Corporates</h4>
        <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Details about the Corporate*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="corporate_1" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image of the Corporate</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="corporate_1_i" placeholder="" required>
    	</div>
    </div>
    <div><button class="btn btn-default">Add new Corporate's Testimonial</button></div><br>
    
        <h4>Associates</h4>
        <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Details about the Associate*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="associate_1" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image of the Associate</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="associate_1_i" placeholder="" required>
    	</div>
    </div>
    <div><button class="btn btn-default">Add new Associate's Testimonial</button></div><br>
    
    <h4>Employees</h4>
        <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Details about the Employee*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="employee_1" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image of the Employee</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="employee_1_i" placeholder="" required>
    	</div>
    </div>
    <div><button class="btn btn-default">Add new Employee's Testimonial</button></div><br>
    
    </form>  
      		<hr>
     		
            <button class="btn btn-default">SUBMIT</button>
     		<br><br><hr> 
        </div>
  		
        <div class="tab-pane" id="projects">
       		<hr><h4> Designing </h4><hr><br>
    		
            <form class="form-horizontal">
    		
            <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Designing*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="designing" placeholder="" required>
    	</div>
    </div>
    
    		<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload Image related to Designing</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="designing_i" placeholder="" required>
    	</div>
    </div>
    
    		<hr><h4> Finishing </h4><hr><br>
    		
            <form class="form-horizontal">
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Finishing*</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="finishing" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Designing</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="finishing_i" placeholder="" required>
    	</div>
    </div>
    
    <hr><h4> Electrical </h4><hr><br>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Electrical</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="award_1" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Electrical</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="electrical_i" placeholder="" required>
    	</div>
    </div>
    
    <hr><h4> Interior </h4><hr><br>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Interior</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="interior" placeholder="" required>
    	</div>
    </div>
    
   	<div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Interior</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="interior_i" placeholder="" required>
    	</div>
    </div>
    
    <hr><h4> Plumbing </h4><hr><br>
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload file related to Plumbing</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="plumbing" placeholder="" required>
    	</div>
    </div>   
    
    <div class="form-group">
    	<label class="col-sm-2  col-lg-3 control-label">Upload image related to Plumbing</label>
    	<div class="col-sm-10 col-lg-9">
      		<input type="file" id="plumbing_i" placeholder="" required>
    	</div>
    </div>
    
    </form>    
      		<hr>
     		<button class="btn btn-default">SUBMIT</button>
     		<br><br><hr>
        </div>
  		
        <div class="tab-pane" id="alliances">
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
  
  	<style>
		
		.form-control{
			width:50%;
		}
	</style>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../builder/js/bootstrap.min.js"></script>
    <script src="../builder/js/home.js"></script>
	<script src="../builder/js/jquery.nicescroll.js"></script>
    
    <script>
	
	
	</script>
    
	
  </body>
</html>