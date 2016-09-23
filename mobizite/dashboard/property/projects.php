
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
  <li class="active"><a href="projects.php">Projects</a></li>
  <li><a href="alliances.php">Alliances</a></li>
  <li><a href="careers.php">Careers</a></li>
  <li><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#designing" role="tab" data-toggle="tab">Designing</a></li>
  <li><a href="#finishing" role="tab" data-toggle="tab">Finishing</a></li>
  <li><a href="#electrical" role="tab" data-toggle="tab">Electrical</a></li>
  <li><a href="#interiors" role="tab" data-toggle="tab">Interiors</a></li>
  <li><a href="#plumbing" role="tab" data-toggle="tab">Plumbing</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="designing">
  
  
<?php
if(isset($_POST['add1'])){
	
		
		$designing=$_POST['designing'];
		$imagename=$_FILES['designingimage']['name'];
	    $imagetype=$_FILES['designingimage']['type'];
		$imagesize=$_FILES['designingimage']['size'];
		$imagetmp=$_FILES['designingimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO projects_designing(pdesigning, pimage) VALUES ('$designing','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"projects/designing/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?> 
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Designing*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="designing" id="designing" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload Image related to Designing</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="designingimage" id="designing_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add1" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>                
              
              
  </div>
  <div class="tab-pane" id="finishing">
  
<?php
 if(isset($_POST['add2'])){
	
		
		$finishing=$_POST['finishing'];
		$imagename=$_FILES['finishingimage']['name'];
	    $imagetype=$_FILES['finishingimage']['type'];
		$imagesize=$_FILES['finishingimage']['size'];
		$imagetmp=$_FILES['finishingimage']['tmp_name'];
		$imagepath=$imagename;
	
		$insert= mysql_query("INSERT INTO projects_finishing(pfinishing,pimage) VALUES ('$finishing','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"projects/finishing/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>       
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Finishing*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="finishing" id="finishing" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Finishing</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file"  name="finishingimage" id="finishing_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add2" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>          
                   
              
              
  </div>
  <div class="tab-pane" id="electrical">
  
 <?php
 if(isset($_POST['add3'])){
	
		
		$electrical=$_POST['electrical'];
		$imagename=$_FILES['electricalimage']['name'];
	    $imagetype=$_FILES['electricalimage']['type'];
		$imagesize=$_FILES['electricalimage']['size'];
		$imagetmp=$_FILES['electricalimage']['tmp_name'];
		$imagepath=$imagename;
	
		$insert= mysql_query("INSERT INTO projects_electrical(pelectrical,pimage) VALUES ('$electrical','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"projects/electrical/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>   
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Electrical</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="electrical" id="award_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Electrical</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="electricalimage" id="electrical_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add3" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>                 
              
  </div>
  <div class="tab-pane" id="interiors">
  
 <?php
 if(isset($_POST['add4'])){
	
		
		$interior=$_POST['interior'];
		$imagename=$_FILES['interiorimage']['name'];
	    $imagetype=$_FILES['interiorimage']['type'];
		$imagesize=$_FILES['interiorimage']['size'];
		$imagetmp=$_FILES['interiorimage']['tmp_name'];
		$imagepath=$imagename;
	
		$insert= mysql_query("INSERT INTO projects_interiors(pinterior,pimage) VALUES ('$interior','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"projects/interiors/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>     
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Interior</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="interior" id="interior" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Interior</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="interiorimage" id="interior_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add4" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>
                 
  </div>
  <div class="tab-pane" id="plumbing">
 
  <?php
 if(isset($_POST['add5'])){
	
		
		$plumbing=$_POST['plumbing'];
		$imagename=$_FILES['plumbingimage']['name'];
	    $imagetype=$_FILES['plumbingimage']['type'];
		$imagesize=$_FILES['plumbingimage']['size'];
		$imagetmp=$_FILES['plumbingimage']['tmp_name'];
		$imagepath=$imagename;
	
		$insert= mysql_query("INSERT INTO projects_plumbing(pplumbing,pimage) VALUES ('$plumbing','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"projects/plumbing/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>   
   <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Plumbing</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="plumbing" id="plumbing" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Plumbing</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="plumbingimage" id="plumbing_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add5" class="btn btn-default">Submit</button>
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