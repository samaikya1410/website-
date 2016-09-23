
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
include_once '../db.php';
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
  <li><a href="home.php">Home</a></li>
  <li><a href="about_us.php">About Us</a></li>
  <li><a href="projects.php">Projects</a></li>
  <li><a href="alliances.php">Alliances</a></li>
  <li class="active"><a href="careers.php">Careers</a></li>
  <li><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#wwws" role="tab" data-toggle="tab">Why Work With Us</a></li>
  <li><a href="#jobopenings" role="tab" data-toggle="tab">Job Openings</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="wwws">
  
  <?php
if(isset($_POST['add1'])){
	
		
		$wwwus=$_POST['wwwus'];
		$imagename=$_FILES['wwwusimage']['name'];
	    $imagetype=$_FILES['wwwusimage']['type'];
		$imagesize=$_FILES['wwwusimage']['size'];
		$imagetmp=$_FILES['wwwusimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO careers_wwwus(cwwwus, cimage) VALUES ('$wwwus','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"careers/wwwus/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?> 
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Why Work With Us*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="wwwus" id="why_work_with_us" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image related to "Why Work With Us"</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="wwwusimage" id="why_work_with_us_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add1" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>
  </div>
  <div class="tab-pane" id="jobopenings">
  
  
  <?php
if(isset($_POST['add2'])){
	
		
		$jobopening=$_POST['jobopening'];
		
		$insert= mysql_query("INSERT INTO careers_wwwus(cjobopening) VALUES ('$jobopening')");
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
                  <label class="col-sm-2  col-lg-3 control-label"> Job Openings*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="jobopening" id="finishing" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add2" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>
              
              
              
              <h4> Job Descriptions </h4>
              
  <?php
if(isset($_POST['add3'])){
	
		
		$joblocation=$_POST['joblocation'];
		$jobcode=$_POST['jobcode'];
		$qualification=$_POST['qualification'];
		$experience=$_POST['experience'];
		
		$insert= mysql_query("INSERT INTO careers_jobopenings(cjoblocation,cjobcode,cqualification,cexperience) VALUES ('$joblocation', '$jobcode', '$qualification', '$experience')");
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
                  <label for="job_location" class="col-sm-2 col-lg-3 control-label"> Job Location*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="joblocation" class="form-control" id="job_location" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="job_code" class="col-sm-2 col-lg-3 control-label"> Job Code*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="jobcode" class="form-control" id="job_code" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="qualification" class="col-sm-2 col-lg-3 control-label"> Qualification*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="qualification" class="form-control" id="qualification" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="experience" class="col-sm-2 col-lg-3 control-label"> Experience*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="experience" class="form-control" id="experience" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                <button name="add3" class="btn btn-default">Submit </button>
                </div>
                </div>
              </form>
  </div>
</div>
</div>

<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<!--<script src="../../js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$('.nav-pills').children('li :nth-child(0)').addClass('active');
</script>-->

</body>
</html>