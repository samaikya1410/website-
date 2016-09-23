<?php
	
	include_once("db.php");
	 

session_start();
$servcies_login=$_SESSION['user'];
echo $servcies_login;

?>
	
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
</head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="property/styles/index.css">
<body>


<div class="container">

<div class="col-lg-12">
<nav class="navbar navbar-right">
<ul class="nav nav-pills">
<li><a href="../dashboard.php"><span class="fa fa-home"></span>Dashboard</a></li>
<li><a href="#">Change password</a></li>
<li><a href="signout.php">Signout</a></li>
</ul>
</nav>
</div>
<style>
.navbar{
	margin-bottom:0px;
}

</style>
<div class="col-lg-12"><hr style="margin-top:0px; margin-bottom:0px; padding-top:5px; background-color:#428bca "></div>

                 <?php		  
				  $select=mysql_query("SELECT * FROM users WHERE email='$servcies_login' ");
				  echo $select;
			 	  $rows=mysql_num_rows($select);
				  echo $rows;
				  $value=mysql_fetch_array($select);
				  if(!($value['pb']&&$value['pm']&&$value['ra'])){
					  ?>
                      
					  <div class="col-lg-12"><button  class="pull-right btn btn-default" name="addservice">Add Service</button></div>
                         
                     
                      <?php
				  }
			  
			  if($rows==1)
			  	{       
						$plan=$value['pb'];
						if($plan){
				?>

<div class="col-lg-4" align="center">
<a href="property/home.php">
<div><img src="../images/01.jpg" width="80%" height="100px"/></div>
<div>property builder</div>
</a>
<div>You Subscribed to <?php echo $plan ;?> plan</div>
<div>Change Plan</div>

<?php if($plan=='free'){?><input type="radio" name="plan" value="free" class="hidden" >Free <?php } ?> 
<?php if($plan=='silver'){?><input type="radio" name="plan" value="silver"class="hidden">silver <?php } ?>
<?php if($plan=='gold'){?><input type="radio" name="plan" value="gold" class="hidden" >Gold <?php } ?>
<?php if($plan=='platinum'){?><input type="radio" name="plan" value="platinum" class="hidden" >Platinum <?php } ?>
<div><button class="btn btn-default">Change</button></div>

</div>
<?php
						}
						$plan=$value['pm'];
						if($plan){
				?>

<div class="col-lg-4" align="center">
<a href="property/home.php">
<div><img src="../images/01.jpg" width="80%" height="100px"/></div>
<div>Property Management</div>
</a>
<div>You Subscribed to <?php echo $plan ;?> plan</div>
<div>Change Plan</div>

<?php if($plan=='free'){?><input type="radio" name="plan" value="free" class="hidden" >Free <?php } ?> 
<?php if($plan=='silver'){?><input type="radio" name="plan" value="silver"class="hidden">silver <?php } ?>
<?php if($plan=='gold'){?><input type="radio" name="plan" value="gold" class="hidden" >Gold <?php } ?>
<?php if($plan=='platinum'){?><input type="radio" name="plan" value="platinum" class="hidden" >Platinum <?php } ?>
<div><button class="btn btn-default">Change</button></div>

</div>
<?php
						}
						
						
						
						$plan=$value['ra'];
						if($plan){
				?>

<div class="col-lg-4" align="center">
<a href="property/home.php">
<div><img src="../images/01.jpg" width="80%" height="100px"/></div>
<div>Real Estate Agent</div>
</a>
<div>You Subscribed to <?php echo $plan ;?> plan</div>
<div>Change Plan</div>

<?php if($plan=='free'){?><input type="radio" name="plan" value="free" class="hidden" >Free <?php } ?> 
<?php if($plan=='silver'){?><input type="radio" name="plan" value="silver"class="hidden">silver <?php } ?>
<?php if($plan=='gold'){?><input type="radio" name="plan" value="gold" class="hidden" >Gold <?php } ?>
<?php if($plan=='platinum'){?><input type="radio" name="plan" value="platinum" class="hidden" >Platinum <?php } ?>
<div><button class="btn btn-default">Change</button></div>

</div>
<?php
						}
						
				}
?>

</div>


<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--<script src="../../js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$('.nav-pills').children('li :nth-child(0)').addClass('active');
</script>-->

</body>
</html>



