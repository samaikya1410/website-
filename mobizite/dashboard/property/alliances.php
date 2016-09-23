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
  <li class="active"><a href="alliances.php">Alliances</a></li>
  <li><a href="careers.php">Careers</a></li>
  <li><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#partners" role="tab" data-toggle="tab">Partners</a></li>
  <li><a href="#investors" role="tab" data-toggle="tab">Investors</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="partners">
  

<?php
if(isset($_POST['add1'])){
	
		
		$partner=$_POST['partner'];
		$imagename=$_FILES['partnerimage']['name'];
	    $imagetype=$_FILES['partnerimage']['type'];
		$imagesize=$_FILES['partnerimage']['size'];
		$imagetmp=$_FILES['partnerimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO alliances_partners(apartner, aimage) VALUES ('$partner','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"alliances/partners/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>            
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Details of the Partner*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="partner" id="partner_1" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image of the Partner </label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="partnerimage" id="partner_1_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add1" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>     
                
              
              
  </div>
  <div class="tab-pane" id="investors">
  
  		<h4>Investor Updates</h4>
              
   <?php
if(isset($_POST['add2'])){
	
		
		$update=$_POST['update'];
		$imagename=$_FILES['updateimage']['name'];
	    $imagetype=$_FILES['updateimage']['type'];
		$imagesize=$_FILES['updateimage']['size'];
		$imagetmp=$_FILES['updateimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO alliances_investor_updates(aupdate, aimage) VALUES ('$update','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"alliances/investor_updates/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>          
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
              
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Investor Updates*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="update" id="investor_updates" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Investor Updates</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="updateimage" id="investor_updates_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add2" class="btn btn-default">Submit</button>
                    </div>
                  </div>
              </form>    
              
              
              <br>
              
              
              <h4> Financial Results </h4>
              
  <?php
if(isset($_POST['add3'])){
	
		
		$fresult=$_POST['fresult'];
		$imagename=$_FILES['fresultimage']['name'];
	    $imagetype=$_FILES['fresultimage']['type'];
		$imagesize=$_FILES['fresultimage']['size'];
		$imagetmp=$_FILES['fresultimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO alliances_financial_results(afresult, aimage) VALUES ('$fresult','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"alliances/financial_results/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>        
  
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
   
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Financial Results</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="fresult" id="finanicial_results" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Financial Results</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="fresultimage" id="financial_results_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add3" class="btn btn-default">Submit</button>
                    </div>
                  </div>
               </form>        
               
               <br>
               
               <h4> Share Prices </h4>
               
              
 <?php
if(isset($_POST['add4'])){
	
		
		$sprice=$_POST['sprice'];
		$imagename=$_FILES['spriceimage']['name'];
	    $imagetype=$_FILES['spriceimage']['type'];
		$imagesize=$_FILES['spriceimage']['size'];
		$imagetmp=$_FILES['spriceimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO alliances_share_prices(asprice, aimage) VALUES ('$sprice','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"alliances/share_prices/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>          
  
   <form class="form-horizontal" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Share Prices</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="sprice" id="share_prices" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Share Prices</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="spriceimage" id="share_prices_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add4" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                  
                  </form>
          
                 
                 
                 
                 <br>
                <h4> Investor Claims </h4>
                
  <?php
if(isset($_POST['add5'])){
	
		
		$claim=$_POST['claim'];
		$imagename=$_FILES['claimimage']['name'];
	    $imagetype=$_FILES['claimimage']['type'];
		$imagesize=$_FILES['claimimage']['size'];
		$imagetmp=$_FILES['claimimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO alliances_investor_claims(aclaim, aimage) VALUES ('$claim','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"alliances/investor_claims/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>                
  
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Investor Claims</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="claim" id="investor_claims" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Investor Claims</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="claimimage" id="investor_claims_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add5" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                  </form>   
                  
                  <br>
                <h4> Share Holding Pattern </h4>
               
 <?php
if(isset($_POST['add6'])){
	
		
		$shpattern=$_POST['shpattern'];
		$imagename=$_FILES['shpatternimage']['name'];
	    $imagetype=$_FILES['shpatternimage']['type'];
		$imagesize=$_FILES['shpatternimage']['size'];
		$imagetmp=$_FILES['shpatternimage']['tmp_name'];
		$imagepath=$imagename;
		
	
	
		$insert= mysql_query("INSERT INTO alliances_share_holding_pattern(ashpattern, aimage) VALUES ('$shpattern','$imagepath')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
			 	move_uploaded_file($imagetmp,"alliances/share_holding_pattern/$imagepath");
			    
		 }else
		 {
			 echo 'not updated';
		 }
	}
  
  ?>     
  
  
   <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label"> Share Holding Pattern</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="shpattern" id="share_holding_pattern" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2  col-lg-3 control-label">Upload image related to Share Holding Pattern</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="shpatternimage" id="share_holding_pattern_i" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 col-lg-offset-3 col-lg-9">
                    <button name="add6" class="btn btn-default">Submit</button>
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