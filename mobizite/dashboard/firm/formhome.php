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
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("mobizite");
		mysql_error();
		
	
		if(isset($_POST['c_det_sub'])) {
			$c_name= $_POST['c_name'];
			$c_desc=$_POST['c_desc'];
			$logoname=$_FILES['c_logo']['name'];
			$logotype=$_FILES['c_logo']['type'];
			$logosize=$_FILES['c_logo']['size'];
			$logotmp=$_FILES['c_logo']['tmp_name'];
			$path=$logoname;
			$c_email=$_POST['c_email'];
			$c_phone=$_POST['c_phone'];
			$c_ad_loc=$_POST['c_ad_loc'];
			$c_ad_str=$_POST['c_ad_str'];
			$c_ad_city=$_POST['c_ad_city'];
			$c_ad_state=$_POST['c_ad_state'];
			$c_ad_pin=$_POST['c_ad_pin'];
			$c_soc_li=$_POST['c_soc_li'];
			$c_soc_gog=$_POST['c_soc_gog'];
			$c_soc_fb=$_POST['c_soc_fb'];
			$c_soc_twit=$_POST['c_soc_twit'];

	
			$insert=mysql_query("INSERT INTO pm_h_comdet(c_name,c_desc,c_logo,c_email,c_phone,c_ad_loc,c_ad_str,c_ad_city,c_ad_state,c_ad_pin,c_soc_li,c_soc_gog,c_soc_fb,c_soc_twit) VALUES('$c_name','$c_desc','$path','$c_email','$c_phone','$c_ad_loc','$c_ad_str','$c_ad_city','$c_ad_state','$c_ad_pin','$c_soc_li','$c_soc_gog','$c_soc_fb','$c_soc_twit') ");
			if($insert){
					echo "<div align='center'>Successfully Uploaded</div>";
					move_uploaded_file($logotmp,"home/$path");	
			}else
				{
					echo 'not updated';
				}	
	
			
		}
		if(isset($_POST['car_submit'])) {
			
			$pic1name=$_FILES['pic1_file']['name'];
			$pic1type=$_FILES['pic1_file']['type'];
			$pic1size=$_FILES['pic1_file']['size'];
			$pic1tmp=$_FILES['pic1_file']['tmp_name'];
			$path1=$pic1name;
			$pic1_head=$_POST['pic1_head'];
			$pic1_text=$_POST['pic1_text'];
			$pic2name=$_FILES['pic2_file']['name'];
			$pic2type=$_FILES['pic2_file']['type'];
			$pic2size=$_FILES['pic2_file']['size'];
			$pic2tmp=$_FILES['pic2_file']['tmp_name'];
			$path2=$pic2name;
			$pic2_head=$_POST['pic2_head'];
			$pic2_text=$_POST['pic2_text'];
			$pic3name=$_FILES['pic3_file']['name'];
			$pic3type=$_FILES['pic3_file']['type'];
			$pic3size=$_FILES['pic3_file']['size'];
			$pic3tmp=$_FILES['pic3_file']['tmp_name'];
			$path3=$pic3name;
			$pic3_head=$_POST['pic3_head'];
			$pic3_text=$_POST['pic3_text'];
			$pic4name=$_FILES['pic4_file']['name'];
			$pic4type=$_FILES['pic4_file']['type'];
			$pic4size=$_FILES['pic4_file']['size'];
			$pic4tmp=$_FILES['pic4_file']['tmp_name'];
			$path4=$pic4name;
			$pic4_head=$_POST['pic4_head'];
			$pic4_text=$_POST['pic4_text'];
			
			$insert1=mysql_query("INSERT INTO pm_h_carousel(pic1,pic1header,pic1text,pic2,pic2header,pic2text,pic3,pic3header,pic3text,pic4,pic1header,pic1text) VALUES ('$path1','$pic1_head','$pic1_text','$path2','$pic2_head','$pic2_text','$path3','$pic3_head','$pic3_text','$path4','$pic4_head','$pic4_text')");
			if($insert1){
					echo "<div align='center'>Successfully Uploaded</div>";			
			}else
				{
					echo 'not updated';
				}	
	
			
		}
		if(isset($_POST['car_submit'])) {
			
			$abtimgname=$_FILES['h_abt_image']['name'];
			$abtimgtype=$_FILES['h_abt_image']['type'];
			$abtimgsize=$_FILES['h_abt_image']['size'];
			$abtimgtmp=$_FILES['h_abt_image']['tmp_name'];
			$abtimgpath=$abtimgname;
			
			$abttext=$_POST['h_abt_text'];
			
			
			$insert1=mysql_query("INSERT INTO pm_h_abt(abt_img,abt_text) VALUES ('$abtimgpath','$abttext')");
			if($insert1){	
					echo "<div align='center'>Successfully Uploaded</div>";			
			}else
				{
					echo 'not updated';
				}	
	
			
		}
		if(isset($_POST['srvc_submit'])) {
			
			$srvc_title=$_POST['srvc_title'];
			$srvc_text=$_POST['srvc_text'];
			$srvc_link=$_POST['srvc_link'];
			
			
			
			$insert1=mysql_query("INSERT INTO pm_h_srvc(srvc_name,srvc_text,srvc_link) VALUES ('$srvc_title','$srvc_text','$srvc_link')");
			if($insert1){	
					echo "<div align='center'>Successfully Uploaded</div>";			
			}else
				{
					echo 'not updated';
				}	
	
			
		}
		if(isset($_POST['tstm_submit'])) {
			
			$tstm_text=$_POST['tstm_text'];
			$tstm_cstmr=$_POST['tstm_cstmr'];
						
			$insert1=mysql_query("INSERT INTO pm_h_tstms(text,cstmr) VALUES ('$tstm_text','$tstm_cstmr')");
			if($insert1){	
					echo "<div align='center'>Successfully Uploaded</div>";			
			}else
				{
					echo 'not updated';
				}	
	
			
		}
	?>
    
    
   <div class="clearfix"></div>
    
    <div class="container" style="margin-top:20px">
    <h1>Home</h1>
    <ul class="nav nav-tabs" role="tablist" id="myTab">
  		<li class="active"><a href="#home" role="tab" data-toggle="tab">Company Details</a></li>
  		<li><a href="#carouse" role="tab" data-toggle="tab">Carousel Pictures</a></li>
  		<li><a href="#about" role="tab" data-toggle="tab">About Us</a></li>
  		<li><a href="#srvc" role="tab" data-toggle="tab">Our Services</a></li>
  		<li><a href="#tstm" role="tab" data-toggle="tab">Testimonials</a></li>
	</ul>

	<div class="tab-content">
  		<div class="tab-pane active" id="home">
        	<hr><h4> Company Details </h4><hr><br>
            
        	<form class="form-horizontal comdet" method="post" enctype="multipart/formdata">
    <div class="form-group">
    <label for="company-name" class="col-sm-2  col-lg-3 control-label">Company Name*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-name" name="c_name" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-description" class="col-sm-2  col-lg-3 control-label">Company Description*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-description" name="c_desc" placeholder="" required>
    	</div>
    </div>
    
   <div class="form-group">
    <label for="company-logo" class="col-sm-2 col-lg-3 control-label">Logo*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="file"  class="" id="company-logo" placeholder="" name="c_logo" required accept="image" >
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-email" class="col-sm-2 col-lg-3 control-label">Email*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="email" class="form-control" id="company-email" name="c_email" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-phone" class="col-sm-2 col-lg-3 control-label">Phone*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="tel" class="form-control" id="company-phone" name="c_phone" placeholder="" required>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="company-location" class="col-sm-2 col-lg-3 control-label">Address*</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="company-location" name="c_ad_loc" placeholder="location" required>
        <br>
        <input type="text" class="form-control" id="company-street" name="c_ad_str" placeholder="street" required>
        <br>
        <input type="text" class="form-control" id="company-city" name="c_ad_city" placeholder="city" required>
        <br>
        <input type="text" class="form-control" id="company-state" name="c_ad_state" placeholder="state" required>
        <br>
        <input type="text" class="form-control" id="company-pincode" name="c_ad_pin" placeholder="PIN Code" required>
        <br>
    	</div>
    </div>
    
    <div class="form-group">
    <label for="linked_in" class="col-sm-2 col-lg-3 control-label">Social Network Links</label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="linked_in" name="c_soc_li" placeholder="link for linkedin page" required>
        <br>
        <input type="text" class="form-control" id="google+" name="c_soc_gog" placeholder="link for google+ page" required>
        <br>
        <input type="text" class="form-control" name="c_soc_fb" id="fb" placeholder="link for fb page" required>
        <br>
        <input type="text" class="form-control" id="twitter" name="c_soc_twit" placeholder="link for twitter page" required>
        <br>
    	</div>
    </div>
    <div><input type="submit" class="btn btn-default btn-sm" value="Submit" name="c_det_sub" style="margin-left:40%" /></div>
    </form>
	
  		</div>
		<div class="tab-pane" id="carouse">
       <hr> <h4>Carousel Pictures</h4><hr>
       <form class="form-horizontal car1">
    <div class="form-group">
		<label for="pic1" class="col-sm-2 col-lg-3 control-label">Pictures</label>
        <div class="col-sm-10 col-lg-9">
        <input type="file" class="form-control" name="pic1_file" id="pic1" placeholder="Picture 2">
        <br>
        <input type="text" class="form-control" name="pic1_head" id="cap1" placeholder="Heading for Pic 2">
        <br>
        <textarea cols="40" rows="4" name="pic1_text" id="abt1"></textarea>
    	<br>
        <input type="file" class="form-control" name="pic2_file" id="pic2" placeholder="Picture 2">
        <br>
        <input type="text" class="form-control" name="pic2_head" id="cap2" placeholder="Heading for Pic 2">
        <br>
        <textarea cols="40" rows="4" name="pic2_text" id="abt2"></textarea>
    	<br>
        <input type="file" class="form-control" name="pic3_file" id="pic3" placeholder="Picture 3">
        <br>
        <input type="text" class="form-control" name="pic3_head" id="cap3" placeholder="Heading for Pic 3">
        <br>
        <textarea cols="40" rows="4" name="pic3_text" id="abt3"></textarea>
    	<br>
        <input type="file" class="form-control" name="pic4_file" id="pic4" placeholder="Picture 4">
        <br>
        <input type="text" class="form-control" name="pic4_head" id="cap4" placeholder="Heading for Pic 4">
        <br>
        <textarea cols="40" rows="4" name="pic4_text" id="abt4"></textarea>
    	<br>
        </div>
    </div>
    <div><input type="submit" class="btn btn-default btn-sm" value="Submit" name="car_submit" style="margin-left:40%" /></div></form>
    </div>
   		<div class="tab-pane" id="about">
            <hr><h4>About Us</h4><hr>
            <form class="form-horizontal abthome" method="post" enctype="multipart/formdata">
             <div class="form-group">
    	<label for="about_home" class="col-sm-2 col-lg-3 control-label">Text in Home Page</label>
    	<div class="col-sm-10 col-lg-9">
      	<textarea rows="5" name="h_abt_text" cols="50" id="about_home"></textarea>
        <br>
        <input type="file" class="form-control" name="h_abt_image" id="abt_image">
        <br>
    	</div>
        
        
        
    </div>
            
         <div><input type="submit" value="Submit" name="car_submit" class="btn btn-default btn-sm"></div>    
          </form> 
            
            </div>
        <div class="tab-pane" id="srvc">
    
     <hr><h4>Our Services</h4><hr>
 
     
    
     <div><h4>Service</h4></div>
     
     <div class="srvc-form1">
     <form class="form-horizontal" method="post" enctype="multipart/formdata">
     <div class="form-group">
     <label for="srvc_name" class="col-sm-2 col-lg-3 control-label">Service Name<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" id="srvc_name" name="srvc_title" placeholder="" required>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="srvc_about" class="col-sm-2 col-lg-3 control-label">About Service<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<textarea type="text" rows="5" class="form-control" name="srvc_text" id="srvc_about" placeholder="" required></textarea>
    	</div>  
     </div>
     
     <div class="form-group">
     <label for="srvc_link" class="col-sm-2 col-lg-3 control-label">Service Link<span>*</span></label>
    	<div class="col-sm-10 col-lg-9">
      	<input type="text" class="form-control" name="srvc_link"  id="srvc_link" placeholder="" required>
    	</div>  
     </div>
 
     
    		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      		<button type="reset" class="btn btn-default">Reset</button>
    		</div>
  			</div>
            
        	<div><button type="submit" name="srvc_submit" class="btn btn-default btn-sm">Submit</button></div>
            </form>
     </div>
      
        
        
        
     </div>
     	<div class="tab-pane" id="tstm">
  	<hr><h4>Testimonials</h4><hr>
    	<form class="form-horizontal testmn" method="post" enctype="multipart/formdata">
          <div class="form-group">
                <label for="test_text" class="col-sm-2 col-lg-3 control-label">Testimonial</label>
                <div class="col-sm-10 col-lg-9">
                    <textarea rows="4" class="form-control" name="tstm_text" cols="50" id="test_text"></textarea> 
                </div>  
              
             </div>
          <div class="form-group">
                <label for="test_cust" class="col-sm-2 col-lg-3 control-label">Customer</label>
                <div class="col-sm-10 col-lg-9">
                    <input type="text" class="form-control" id="test_cust" name="tstm_cstmr"  placeholder="" required>
                </div>  
             
             </div>
      		
      		<div><button type="submit" name="tstm_submit" class="btn btn-default btn-sm">Submit</button></div>
      	</form>
     </div>
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