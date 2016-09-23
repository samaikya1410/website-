<?php

session_start();
$servcies_login=$_SESSION['user'];
echo $servcies_login;
if($servcies_login){
}else
{echo "<script>location.href='../../index.php'</script>";
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
  <li><a href="home.php">Home</a></li>
  <li class="active"><a href="about_us.php">About Us</a></li>
  <li><a href="projects.php">Projects</a></li>
  <li><a href="alliances.php">Alliances</a></li>
  <li><a href="careers.php">Careers</a></li>
  <li><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#rporate_profile" role="tab" data-toggle="tab">CorporateProfile </a></li>
  <li><a href="#board_of_directors" role="tab" data-toggle="tab">Board Of Directors</a></li>
  <li><a href="#awards" role="tab" data-toggle="tab">Awards</a></li>
  <li><a href="#quality_policy" role="tab" data-toggle="tab">Quality Policy</a></li>
  <li><a href="#testimonials" role="tab" data-toggle="tab">Testimonials</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="corporate_profile">
  
  <?php

if(isset($_POST['add1'])){
	
		$cprofile=$_POST['profile'];
		$imagename=$_FILES['profileimage']['name'];
	    $imagetype=$_FILES['profileimage']['type'];
		$imagesize=$_FILES['profileimage']['size'];
		$imagetmp=$_FILES['profileimage']['tmp_name'];
		$imagepath=$imagename;
		$insert= mysql_query("INSERT INTO corporate_profile(cprofile,image) VALUES ('$cprofile','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"about_us/corporate_profile/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}

?>
  
  			<form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Corporate Profile of the Company*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="profile" id="corporate_profile" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image for Corporate Profile</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="profileimage" id="corporate_profile_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add1" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>
  </div>
  <div class="tab-pane" id="board_of_directors">
  
  <?php
if(isset($_POST['add2'])){
	
		$bmember=$_POST['member'];
		$imagename=$_FILES['memberimage']['name'];
	    $imagetype=$_FILES['memberimage']['type'];
		$imagesize=$_FILES['memberimage']['size'];
		$imagetmp=$_FILES['memberimage']['tmp_name'];
		$imagepath=$imagename;
		$insert= mysql_query("INSERT INTO bofd(bmember,image) VALUES ('$bmember','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"about_us/board_of_directors/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
?>
  
  			<form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Details about the member*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea  name="member" id="member_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image of the member</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="memberimage" id="member_1_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add2" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>
  </div>
  <div class="tab-pane" id="awards">
  
  <?php
if(isset($_POST['add3'])){
	
		$award=$_POST['award'];
		$insert= mysql_query("INSERT INTO awards(awards) VALUES ('$award')");
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
                  <label class="col-sm-2  col-lg-3 control-label">Details of the Award</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea  name="award" id="award_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add3" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>
  </div>
  <div class="tab-pane" id="quality_policy">
  
  
  <?php
if(isset($_POST['add4'])){
	
		$qpolicy=$_POST['qpolicy'];
		$insert= mysql_query("INSERT INTO quality_policy(policy) VALUES ('$qpolicy')");
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
                  <label class="col-sm-2  col-lg-3 control-label"> Quality Policy </label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea  name="qpolicy" id="quality_policy" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add4" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>
              
  </div>
  
  
  
  <div class="tab-pane" id="testimonials">
          <h4>Residents</h4>    
           
<?php
if(isset($_POST['add5'])){
	
		$resident=$_POST['resident'];
		$rimagename=$_FILES['residentimage']['name'];
	    $rimagetype=$_FILES['residentimage']['type'];
		$rimagesize=$_FILES['residentimage']['size'];
		$rimagetmp=$_FILES['residentimage']['tmp_name'];
		$rimagepath=$rimagename;
		
		$insert= mysql_query("INSERT INTO testimonials_residents(tresident,timage) VALUES ('$resident','$rimagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($rimagetmp,"about_us/testimonials/residents/$rimagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>
  
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Details about the Resident*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea  name="resident" id="resident_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image of the Resident</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="residentimage" id="resident_1_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add5" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
                
                <br>
                <h4>Corporates</h4>
                
                
<?php
if(isset($_POST['add6'])){
	
		
		$corporate=$_POST['corporate'];
		$cimagename=$_FILES['corporateimage']['name'];
	    $cimagetype=$_FILES['corporateimage']['type'];
		$cimagesize=$_FILES['corporateimage']['size'];
		$cimagetmp=$_FILES['corporateimage']['tmp_name'];
		$cimagepath=$cimagename;
		
		$insert= mysql_query("INSERT INTO testimonials_corporates(tcorporate,timage) VALUES ('$corporate','$cimagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($cimagetmp,"about_us/testimonials/corporates/$cimagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Details about the Corporate*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="corporate" id="associate_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image of the Corporate</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="corporateimage" id="associate_1_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add6" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
  
  
                
                <br>
                <h4>Associates</h4>
                
<?php
if(isset($_POST['add7'])){
	
		
		$associate=$_POST['associate'];
		$aimagename=$_FILES['associateimage']['name'];
	    $aimagetype=$_FILES['associateimage']['type'];
		$aimagesize=$_FILES['associateimage']['size'];
		$aimagetmp=$_FILES['associateimage']['tmp_name'];
		$aimagepath=$aimagename;
	
		$insert= mysql_query("INSERT INTO testimonials_associates(tassociate,timage) VALUES ('$associate','$aimagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($aimagetmp,"about_us/testimonials/associates/$aimagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>     
  
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Details about the Associate*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="associate" id="associate_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image of the Associate</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="associateimage" id="associate_1_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add7" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>           
                
                <br>
                <h4>Employees</h4>
              
                
<?php
if(isset($_POST['add8'])){
		
		$employee=$_POST['employee'];
		$eimagename=$_FILES['employeeimage']['name'];
	    $eimagetype=$_FILES['employeeimage']['type'];
		$eimagesize=$_FILES['employeeimage']['size'];
		$eimagetmp=$_FILES['employeeimage']['tmp_name'];
		$eimagepath=$eimagename;
	
		$insert= mysql_query("INSERT INTO testimonials_employees(temployee,timage) VALUES ('$employee','$eimagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($eimagetmp,"about_us/testimonials/employees/$eimagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}

  ?>   
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Details about the Employee*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="employee" id="employee_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image of the Employee</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="employeeimage" id="employee_1_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add8" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>             
                
                <br>
                
                
              
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