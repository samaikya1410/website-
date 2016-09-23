
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
  <li><a href="careers.php">Careers</a></li>
  <li class="active"><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#mainoffice" role="tab" data-toggle="tab">Main Office</a></li>
  <li><a href="#roffice" role="tab" data-toggle="tab">Regional Offices</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="mainoffice">
  
   <?php
if(isset($_POST['oadd'])){
	
		
		$olocation=$_POST['olocation'];
		$ostreet=$_POST['ostreet'];
		$ocity=$_POST['ocity'];
		$ostate=$_POST['ostate'];
		$opin=$_POST['opin'];
		$oemail=$_POST['oemail'];
		$ophone=$_POST['ophone'];
		
		$insert= mysql_query("INSERT INTO contact_us_main(location,street,city,state,pin,email,phone) VALUES ('$olocation', '$ostreet', '$ocity', '$ostate', '$opin', '$oemail', '$ophone')");
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
                  <label for="m_company-location" class="col-sm-2 col-lg-3 control-label">Address*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="olocation" class="form-control" id="m_company-location" placeholder="location" required>
                    <br>
                    <input type="text" name="ostreet" class="form-control" id="m_company-street" placeholder="street" required>
                    <br>
                    <input type="text" name="ocity" class="form-control" id="m_company-city" placeholder="city" required>
                    <br>
                    <input type="text" name="ostate" class="form-control" id="m_company-state" placeholder="state" required>
                    <br>
                    <input type="text" name="opin" class="form-control" id="m_company-pincode" placeholder="PIN Code" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
                  <label for="m_company-email" class="col-sm-2 col-lg-3 control-label">Email</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="email" name="oemail" class="form-control" id="m_company-email" placeholder="" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
                  <label for="m_company-phone" class="col-sm-2 col-lg-3 control-label">Phone</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="tel" name="ophone" class="form-control" id="m_company-phone" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                <button name="oadd" class="btn btn-default">Submit </button>
                </div>
                </div>
              </form>
  </div>
  <div class="tab-pane" id="roffice">
  
   <?php
if(isset($_POST['roadd'])){
	
		
		$olocation=$_POST['rolocation'];
		$ostreet=$_POST['rostreet'];
		$ocity=$_POST['rocity'];
		$ostate=$_POST['rostate'];
		$opin=$_POST['ropin'];
		$oemail=$_POST['roemail'];
		$ophone=$_POST['rophone'];
		
		$insert= mysql_query("INSERT INTO contact_us_main(location,street,city,state,pin,email,phone) VALUES ('$olocation', '$ostreet', '$ocity', '$ostate', '$opin', '$oemail', '$ophone')");
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
                  <label for="company-location_1" class="col-sm-2 col-lg-3 control-label">Address*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="rolocation" class="form-control" id="company-location_1" placeholder="location" required>
                    <br>
                    <input type="text" name="rostreet" class="form-control" id="company-street_1" placeholder="street" required>
                    <br>
                    <input type="text" name="rocity" class="form-control" id="company-city_1" placeholder="city" required>
                    <br>
                    <input type="text" name="rostate" class="form-control" id="company-state_1" placeholder="state" required>
                    <br>
                    <input type="text" name="ropin" class="form-control" id="company-pincode_1" placeholder="PIN Code" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
                  <label for="company-email_1" class="col-sm-2 col-lg-3 control-label">Email</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="email" name="roemail" class="form-control" id="company-email_1" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="company-phone_1" class="col-sm-2 col-lg-3 control-label">Phone</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="tel" name="rophone" class="form-control" id="company-phone_1" placeholder="" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                <button name="roadd" class="btn btn-default">Submit </button>
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