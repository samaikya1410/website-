<?php

session_start();
$servcies_login=$_SESSION['user'];
echo $servcies_login;
if($servcies_login==""){
	echo "<script>location.href='../../index.php'</script>";
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
</head>
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="styles/index.css">
<body>


<?php 
include '../db.php';
?>


<div class="container">

<div class="col-lg-12">
<nav class="navbar navbar-right">
<ul class="nav nav-pills">
<li><a href="../dashboard.php"><span class="fa fa-home"></span>Dashboard</a></li>
<li><a href="#">Change password</a></li>
<li><a href="../signout.php">Signout</a></li>
</ul>
</nav>
</div>
<style>
.navbar{
	margin-bottom:0px;
}

</style>
<div class="col-lg-12"><hr style="margin-top:0px; margin-bottom:0px; padding-top:5px; background-color:#428bca "></div>

<div class="col-lg-8 col-lg-offset-2">	
<ul class="nav nav-pills nav-justified">
  <li class="active"><a href="home.php">Home</a></li>
  <li><a href="about_us.php">About Us</a></li>
  <li><a href="projects.php">Projects</a></li>
  <li><a href="alliances.php">Alliances</a></li>
  <li><a href="careers.php">Careers</a></li>
  <li><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#company_details" role="tab" data-toggle="tab">Company Details</a></li>
  <li><a href="#residential" role="tab" data-toggle="tab">Residential Projects</a></li>
  <li><a href="#commercial" role="tab" data-toggle="tab">Commercial Projects</a></li>
  <li><a href="#major_clients" role="tab" data-toggle="tab">Major Clients</a></li>
  <li><a href="#latest_news" role="tab" data-toggle="tab">Latest News</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="company_details">
  
  
  <?php

	if(isset($_POST['details'])) {
		
		$company_name = $_POST['company_name'];
		$company_description = $_POST['company_description'];
		$logoname=$_FILES['company_logo']['name'];
	    $logotype=$_FILES['company_logo']['type'];
		$logosize=$_FILES['company_logo']['size'];
		$logotmp=$_FILES['company_logo']['tmp_name'];
		$path=$logoname;
		
		$company_email = $_POST['company_email'];
		$company_phone = $_POST['company_phone'];
		$company_location = $_POST['company_location'];
		$company_street = $_POST['company_street'];
		$company_city = $_POST['company_city'];
		$company_state = $_POST['company_state'];
		$company_pincode = $_POST['company_pincode'];
		$linked_in = $_POST['linked_in'];
		$google = $_POST['google'];
		$fb = $_POST['fb'];
		$twitter = $_POST['twitter'];
		
		$insert = mysql_query("INSERT INTO company(name, description, logo, email, phone, location, street, city, state, pin, linked_in, fb, google, twitter) VALUES  ('$company_name', '$company_description', '$logotmp', '$company_email', '$company_phone', '$company_location', '$company_street', '$company_city', '$company_state', '$company_pincode', '$linked_in', '$fb', '$google', '$twitter' ) ");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
				 move_uploaded_file($logotmp,"home/company/$path");	
		 }else
		 {
			 echo 'not updated';
		 }
		
	}
	?>
  
  			<form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="company-name" class="col-sm-2  col-lg-3 control-label">Company Name*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name='company_name' class="form-control" id="company-name" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="company-description" class="col-sm-2  col-lg-3 control-label">Company Description*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name='company_description' class="form-control" id="company-description" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                <label for="company-logo" class="col-sm-2 col-lg-3 control-label">Logo*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name='company_logo' value="upload image" class="" id="company-logo" placeholder="" required accept="image" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="company-email" class="col-sm-2 col-lg-3 control-label">Email*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="email" name="company_email" class="form-control" id="company-email" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="company-phone" class="col-sm-2 col-lg-3 control-label">Phone*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="tel" name="company_phone" class="form-control" id="company-phone" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="company-location" class="col-sm-2 col-lg-3 control-label">Address*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="company_location" class="form-control" id="company-location" placeholder="location" required>
                    <br>
                    <input type="text" name="company_street" class="form-control" id="company-street" placeholder="street" required>
                    <br>
                    <input type="text" name='company_city' class="form-control" id="company-city" placeholder="city" required>
                    <br>
                    <input type="text" name="company_state" class="form-control" id="company-state" placeholder="state" required>
                    <br>
                    <input type="text" name="company_pincode" class="form-control" id="company-pincode" placeholder="PIN Code" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
                  <label for="linked_in" class="col-sm-2 col-lg-3 control-label">Social Network Links</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="linked_in" class="form-control" id="linked_in" placeholder="link for linkedin page" required>
                    <br>
                    <input type="text" name="google" class="form-control" id="google+" placeholder="link for google+ page" required>
                    <br>
                    <input type="text" name="fb" class="form-control" id="fb" placeholder="link for fb page" required>
                    <br>
                    <input type="text" name="twitter" class="form-control" id="twitter" placeholder="link for twitter page" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" name="details" class="btn btn-default">Submit</button>  
    			</div>
 				</div>
              </form>
  </div>
  <div class="tab-pane" id="residential">
  
  <?php
	
	if(isset($_POST['rdetails'])){
		$rname=$_POST['rname'];
		$rlocation=$_POST['rlocation'];
		$rdevelopment=$_POST['rdevelopment'];
		$runits=$_POST['runits'];
		$rstatus=$_POST['rstatus'];
		
		$rimagename=$_FILES['rimage']['name'];
	    $rimagetype=$_FILES['rimage']['type'];
		$rimagesize=$_FILES['rimage']['size'];
		$rimagetmp=$_FILES['rimage']['tmp_name'];
		$rimagepath=$rimagename;

		
		$rmplanname=$_FILES['rmasterplan']['name'];
	    $rmplantype=$_FILES['rmasterplan']['type'];
		$rmplansize=$_FILES['rmasterplan']['size'];
		$rmplantmp=$_FILES['rmasterplan']['tmp_name'];
		$rmplanpath=$rmplanname;
		
		
		$rfplanname=$_FILES['rfloorplan']['name'];
	    $rfplantype=$_FILES['rfloorplan']['type'];
		$rfplansize=$_FILES['rfloorplan']['size'];
		$rfplantmp=$_FILES['rfloorplan']['tmp_name'];
		$rfplanpath=$rfplanname;
	
		
		$rinsert = mysql_query("INSERT INTO residential(name, location, development, units, status, image, mplan, fplan ) VALUES  ('$rname', '$rlocation', '$rdevelopment', '$runits', '$rstatus', '$rimagepath', '$rmplanpath', '$rfplanpath' ) ");
		
		
		 if($rinsert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($rimagetmp,"home/residential/$rimagepath");
			    move_uploaded_file($rmplantmp,"home/residential/$rmplanpath");
			    move_uploaded_file($rfplantmp,"home/residential/$rfplanpath");		
		 }else
		 {
			 echo 'not updated';
		 }
		
	} 
	
	?>
  
  				<form class="form-horizontal" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="company-rprojectname" class="col-sm-2 col-lg-3 control-label"> Name*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="rname" class="form-control" id="company-rprojectname" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-rprojectname" class="col-sm-2 col-lg-3 control-label">Location*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="rlocation" class="form-control" id="company-rprojectlocation" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-rdevelopment-type" class="col-sm-2 col-lg-3 control-label">Development Type*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="rdevelopment" class="form-control" id="company-rdevelopment-type" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-rno-of-units" class="col-sm-2 col-lg-3 control-label">No-of-units</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="runits" class="form-control" id="company-rno-of-units" placeholder="" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="r_current" class="col-sm-2 col-lg-3 control-label">Project Status</label>
                        <div class="col-sm-10 col-lg-9">
                          <select class="form-control" name="rstatus">
                            <option value="current" id="r_current">Current</option>
                            <option valu="completed" id="r_completed">Completed</option>
                            <option value="forthcoming" id="r_forthcoming">Forthcoming</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-rproject-image" class="col-sm-2 col-lg-3 control-label">Project's picture*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="file" name="rimage" id="company-rproject-image" placeholder="" required accept="image">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="company-rproject-masterplan" class="col-sm-2 col-lg-3 control-label">Project's Master Plan</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="file" name="rmasterplan" id="company-rproject-masterplan" placeholder=""  accept="image,document">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-rproject-floorplan" class="col-sm-2 col-lg-3 control-label">Project's Floor Plan</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="file" name="rfloorplan" class="" id="company-rproject-floorplan" placeholder=""  accept="image,document">
                        </div>
                      </div>
                      <!--
                       <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10"> 
                          <input type="radio" name="rmajorproject">Include in Major Projects List</button>
                        </div>
                      </div>
                       <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10"> 
                          <input type="radio" name="rcarousel">Add Project to Slide Show</button>
                        </div>
                      </div>
                      
                      -->
                      <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" name="rdetails" class="btn btn-default">Submit</button>  
    			</div>
 				</div>
                    </form>
  </div>
  <div class="tab-pane" id="commercial">
  
  
   <?php
	if(isset($_POST['cdetails'])){
		$name=$_POST['cname'];
		$location=$_POST['clocation'];
		$development=$_POST['cdevelopment'];
		$units=$_POST['cunits'];
		$status=$_POST['cstatus'];
		
		$imagename=$_FILES['cimage']['name'];
	    $imagetype=$_FILES['cimage']['type'];
		$imagesize=$_FILES['cimage']['size'];
		$imagetmp=$_FILES['cimage']['tmp_name'];
		$imagepath=$imagename;

		
		$mplanname=$_FILES['cmasterplan']['name'];
	    $mplantype=$_FILES['cmasterplan']['type'];
		$mplansize=$_FILES['cmasterplan']['size'];
		$mplantmp=$_FILES['cmasterplan']['tmp_name'];
		$mplanpath=$mplanname;
		
		
		$fplanname=$_FILES['cfloorplan']['name'];
	    $fplantype=$_FILES['cfloorplan']['type'];
		$fplansize=$_FILES['cfloorplan']['size'];
		$fplantmp=$_FILES['cfloorplan']['tmp_name'];
		$fplanpath=$fplanname;
	
		
		$insert = mysql_query("INSERT INTO commercial(name, location, development, units, status, image, mplan, fplan ) VALUES  ('$name', '$location', '$development', '$units', '$status', '$imagepath', '$mplanpath', '$fplanpath' ) ");
		
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"home/commercial/$imagepath");
			    move_uploaded_file($mplantmp,"home/commercial/$mplanpath");
			    move_uploaded_file($fplantmp,"home/commercial/$fplanpath");	
					
		 }else
		 {
			 echo 'not updated';
		 }
		
	} 
	?>
  
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="company-cprojectname" class="col-sm-2 col-lg-3 control-label"> Name*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="cname" class="form-control" id="company-cprojectname" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-cprojectname" class="col-sm-2 col-lg-3 control-label">Location*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="clocation" class="form-control" id="company-cprojectlocation" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-cdevelopment-type" class="col-sm-2 col-lg-3 control-label">Development Type*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="cdevelopment" class="form-control" id="company-cdevelopment-type" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-cno-of-units" class="col-sm-2 col-lg-3 control-label">No-of-units</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="text" name="cunits" class="form-control" id="company-cno-of-units" placeholder="" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="c_current" class="col-sm-2 col-lg-3 control-label">Project Status</label>
                        <div class="col-sm-10 col-lg-9">
                          <select class="form-control" name="cstatus">
                            <option value="current" id="c_current">Current</option>
                            <option value="completed" id="c_completed">Completed</option>
                            <option value="forthcoming" id="c_forthcoming">Forthcoming</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-cproject-image" class="col-sm-2 col-lg-3 control-label">Project's picture*</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="file" name="cimage" id="company-cproject-image" placeholder="" required accept="image">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="company-cproject-masterplan" class="col-sm-2 col-lg-3 control-label">Project's Master Plan</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="file" name="cmasterplan" id="company-cproject-masterplan" placeholder=""  accept="image,document">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-rproject-floorplan" class="col-sm-2 col-lg-3 control-label">Project's Floor Plan</label>
                        <div class="col-sm-10 col-lg-9">
                          <input type="file" name="cfloorplan" class="" id="company-cproject-floorplan" placeholder=""  accept="image,document">
                        </div>
                      </div>
                   <!--   <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10"> 
                          <input type="radio" name="cmajorproject">Include in Major Projects List</button>
                        </div>
                      </div>
                     
                          <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10"> 
                          <input type="radio" name="ccarousel">Add Project to Slide Show</button>
                        </div>
                      </div>
                      -->
                       <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" name="cdetails" class="btn btn-default">Submit</button>  
    			</div>
 				</div>
               
                    </form>
  </div>
  <div class="tab-pane" id="major_clients">
  
   <?php
	if(isset($_POST['submitclient'])){
		$imagename=$_FILES['client']['name'];
	    $imagetype=$_FILES['client']['type'];
		$imagesize=$_FILES['client']['size'];
		$imagetmp=$_FILES['client']['tmp_name'];
		$imagepath=$imagename;
		$insert= mysql_query("INSERT INTO clients(client_img) VALUES ('$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"home/clients/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
	?>
  
  		<form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-2 col-lg-3 control-label">Client's Image*</label>
                    <div class="col-sm-10 col-lg-9">
                      <input type="file" name="client" required accept="image">
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="submitclient" class="btn btn-default">Submit</button>
                    </div>
                  </div>
        </form>
   </div>
  <div class="tab-pane" id="latest_news" >
  
 
    <?php
	if(isset($_POST['submitnews'])){
		
		$newsheadline=$_POST['newsheadline'];
		$newslink=$_POST['newslink'];
		
		$insert= mysql_query("INSERT INTO news(headline, link) VALUES ('$newsheadline','$newslink')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}

?>
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="news_headline1" class="col-sm-2 col-lg-3 control-label">News Headline*</label>
                    <div class="col-sm-10 col-lg-9">
                      <input type="text" name="newsheadline" class="form-control" id="news_headline1" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="news_headline1_link" class="col-sm-2 col-lg-3 control-label">Link for News Headline*</label>
                    <div class="col-sm-10 col-lg-9">
                      <input type="text" name="newslink" class="form-control" id="news_headline1" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="submitnews" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
  </div>
  
 
</div>

</div>

<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<!--<script>
$('.nav-pills').children('li :nth-child(0)').addClass('active');
</script>-->

</body>
</html>

